<?php
namespace newsasset;

use Exception;

function wp_update_post_meta( $post, $data ) {
    $document_id = get_document_id( $data );
    if ( $document_id ) { update_field( "document_id", $document_id, $post ); }

    $categories = get_categories( $data );
    if ( $categories ) { wp_set_post_categories( $post, $categories ); };

    $tags = get_tags( $data );
    if ( $tags ) { wp_set_post_tags( $post, $tags ); }

    $editors = get_editors( $data );
    if ( $editors ) { update_field( "get_editors", $editors, $post ); }

    $subtitle = get_subtitle( $data );
    if ( $subtitle ) { update_field( "post__subtitle", $subtitle, $post ); }

    $video = get_video( $data );
    if ( $video ) { update_field( "extra_video", $video, $post ); }

    $keywords = get_keywords( $data );
    if ( $keywords ) { update_field( "meta__keywords", $keywords, $post ); }

    $super_title = get_super_title( $data );
    if ( $super_title ) { update_field( "super_title", $super_title, $post ); }

    $modified = get_modified( $data );
    if ( $modified ) { update_field( "scondtimedate", $modified, $post ); }
}

function wp_update_post( $data ) {
    if ( !NA_ENABLE_UPDATES ) throw new Exception( "Deletes are disabled!" );
    if ( !function_exists ( "update_field" ) ) throw new Exception( "Missing ACF plugin" );

    $id = get_post_id( $data );

    if ( empty( $id ) ) throw new Exception( "Invalid update id" );

    if ( is_attachment( $data ) ) {
        $attachments = get_attachment_from_document( get_document_id( $data ) );
        if ( !in_array( $id, $attachments ) ) throw new Exception( "Invalid attachment id" );

        $attachment = wp_insert_attachment( null, $data, $id );
        wp_update_attachment_meta( $attachment, $data );
        
        return $attachment;
    }

    else {
        $doc = get_post( $id );
        $post = $doc ? $doc->ID : null;
        
        if ( empty( $post ) ) throw new Exception( "Invalid post id" );
    
        $update = get_post_data( $data );
        $update["ID"] = $post;
        $post = \wp_update_post( $update, true );
        if ( is_wp_error( $post ) ) throw new Exception( get_error( $post ) );
    
        wp_update_post_meta( $post, $data );
        wp_update_post_attachments( $post, $data );

        return $post;
    }
}
