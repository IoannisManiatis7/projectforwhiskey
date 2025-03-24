<?php
namespace newsasset;

use Exception;

function wp_insert_post( $data ) {
    if ( !NA_ENABLE_INSERTS ) throw new Exception( "Inserts are disabled!" );
    if ( !function_exists ( "update_field" ) ) throw new Exception( "Missing ACF plugin" );

    // Check if document_id exists?

    if ( is_attachment( $data ) ) {
        $attachment = wp_insert_attachment( null, $data );
        wp_update_attachment_meta( $attachment, $data );
        
        return $attachment;
    }

    else {
        $post = \wp_insert_post( get_post_data( $data ) );
        if ( is_wp_error( $post ) ) throw new Exception( get_error( $post ) );
    
        wp_update_post_meta( $post, $data );
        wp_update_post_attachments( $post, $data );

        return $post;
    }
}
