<?php
namespace newsasset;

use Exception;

function get_attachment_path( $dir, $filename ) {
    // Based on wp wp_unique_filename
    $filename = sanitize_file_name( $filename );
    $ext = pathinfo( $filename, PATHINFO_EXTENSION );
    $name = pathinfo( $filename, PATHINFO_BASENAME );

    // console_dump( "local_file_exists", [ "filename" => $filename ] );

    if ( $ext ) { $ext = "." . $ext; }
    if ( $name === $ext ) { $name = ""; }

    if ( $ext && strtolower( $ext ) != $ext ) {
        $ext2 = strtolower( $ext );
        $filename2 = preg_replace( "|" . preg_quote( $ext ) . "$|", $ext2, $filename );
        $fullpath = $dir . "/$filename";

        if ( file_exists( $fullpath ) ) return $fullpath;

        $fullpath = $dir . "/$filename2";
        if ( file_exists( $fullpath ) ) return $fullpath;
    }

    $fullpath = $dir . "/$filename";
    if ( file_exists( $fullpath ) ) return $fullpath;
}

function get_attachment_from_url( $url ) {
    // Based on wp attachment_url_to_postid
    global $wpdb;

    $dir = wp_get_upload_dir();
    $path = $url;

    $site_url = parse_url( $dir['url'] );
    $image_path = parse_url( $path );

    if ( isset( $image_path['scheme'] ) && ( $image_path['scheme'] !== $site_url['scheme'] ) ) {
        $path = str_replace( $image_path['scheme'], $site_url['scheme'], $path );
    }

    if ( 0 === strpos( $path, $dir['baseurl'] . '/' ) ) {
        $path = substr( $path, strlen( $dir['baseurl'] . '/' ) );
    }

    $sql = $wpdb->prepare(
        "SELECT post_id, meta_value FROM $wpdb->postmeta WHERE meta_key = '_wp_attached_file' AND meta_value = %s",
        $path
    );

    $attachments = $wpdb->get_results( $sql );

    foreach( $attachments as $attachment ) {
        if ( $path === $attachment->meta_value ) return $attachment->post_id;
    }

    return null;
}

function get_attachment_from_document( $document_id ) {
    global $wpdb;

    $sql = $wpdb->prepare(
        "SELECT post_id FROM $wpdb->postmeta WHERE meta_key Like 'document_id' and meta_value = %s",
        $document_id
    );

    $map = function ( $data ) { return $data->post_id; };

    return array_map( $map , $wpdb->get_results( $sql ) );
}

function post_has_attachments( $post, $attachment ) {
    global $wpdb;

    $sql = $wpdb->prepare(
        "SELECT ID FROM $wpdb->posts WHERE ID = %d AND post_parent = %d",
        $attachment, $post
    );

    return count( $wpdb->get_results( $sql ) ) === 1;
}

function is_attachment_image( $attachment ) {
    switch( \get_post_mime_type( $attachment ) ) {
        case 'image/jpeg': return true;
        case 'image/png': return true;
        case 'image/gif': return true;
        default: return false;
    }
}

function get_attachment_meta( $attachment ) {
    if ( empty( $attachment ) ) return null;

    $data = get_post( $attachment );

    return empty( $data ) ? null : [
        "ingr_image_field" => $attachment,
        "ingr_image_title" => empty( $data->post_title ) ? "" : $data->post_title,
        "ingr_image_credit" => "tovima.gr",
    ];
}

function wp_update_post_attachments( $post, $data ) {
    $add_thumbnail = true;
    $gallery = [];
    $references = get_post_references( $data );

    if ( count( $references ) > 0 ) {
        foreach( get_post_references( $data ) as $key => $document_id ) {
            $attachments = get_attachment_from_document( $document_id );
            $attachment = isset( $attachments[0] ) ? $attachments[0] : null;
    
            if ( $attachment ) {
                \wp_update_post( ["ID" => $attachment, 'post_parent' => $post]  );
    
                if ( is_attachment_image( $attachment ) ) {
                    if ( $add_thumbnail ) {
                        \set_post_thumbnail( $post, $attachment );
                        $add_thumbnail = false;
                    }
                    else {
                        $meta = get_attachment_meta( $attachment );
    
                        if ( $meta ) {
                            $gallery[] = $meta;
                        }
                    }
                }
            }
        }
    
        if ( count( $gallery ) > 0 ) {
            update_field( "ingr_repeater", $gallery , $post );
        }
    }

    else if ( defined( "NA_DEFAULT_IMAGE" ) ) {
        \set_post_thumbnail( $post, NA_DEFAULT_IMAGE );
    }
}

function wp_update_attachment_meta( $attachment, $data ) {
    $update = get_image_data( $data );
    $update["ID"] = $attachment;

    \wp_update_post( $update );

    if ( $update["post_alt"] ) {
        update_post_meta( $attachment, "_wp_attachment_image_alt", $update["post_alt"] );
    }

    $document_id = get_document_id( $data );
    if ( $document_id ) { update_field( "document_id", $document_id, $attachment ); }
}

function wp_insert_attachment( $post, array $data, $id = null ) {
    if ( !function_exists ( "update_field" ) ) throw new Exception( "Missing ACF plugin" );

    // return get_image_data( $data );
    $name = get_image_name( $data );
    $date = get_image_date( $data );
    $update = get_image_data( $data );

//     add_filter( "upload_dir", function( $uploads ) use ( $date ) {
//         $day = date( "d", strtotime( $date ) );
//         $uploads["path"] .= "/" . $day;
//         $uploads["url"]  .= "/" . $day;
//         return $uploads;
//     });
    
    // add_filter( "upload_dir", "na_wp_upload_dir_filter" );
    $upload_dir = wp_upload_dir( $date, true );
//     return [$upload_dir];
    
    $unique_name = !$id &&  NA_ALWAYS_ADD_ATTACHMENT;
    $filename = $unique_name ? wp_unique_filename( $upload_dir["path"], $name ) : $name;
    $attachment = get_attachment_from_url( $upload_dir["url"] . "/" . sanitize_file_name( $filename ) );
    $upload_path = null;
    
    // You can use to check that file exist in storage but for this should not be necessary
    // as all images should be valid and exist or new and have to be inserted
    // $filepath = get_attachment_path( $upload["path"], $filename ); 

    if ( $id && ( $id !== $attachment ) ) throw new Exception( "Invalid attachment id" );

    if ( $attachment ) {
        if ( $post && !post_has_attachments( $post, $attachment ) ) {
            \set_post_thumbnail( $post, $attachment );
        }
    }
    else {
        $content = base64_decode( get_image_content( $data ) );
        $upload = wp_upload_bits( $filename, null, $content, $date );
        if ( $upload["error"] ) throw new Exception( $upload["error"] );

        $type = wp_check_filetype( $filename, null );
        $update["post_mime_type"] = $type["type"];
    
        if ( $post ) {
            $update["post_parent"] = $post;
        }
        
        $attachment = \wp_insert_attachment( $update, $upload["file"], $post ?: 0 );
        
        if ( is_wp_error( $attachment ) ) throw new Exception( $attachment->get_error_message() );

        $meta = wp_generate_attachment_metadata( $attachment, $upload["file"] );
        wp_update_attachment_metadata( $attachment,  $meta );
    }

    if ( $post ) {
        \set_post_thumbnail( $post, $attachment );
    }
    
    return $attachment;
}
