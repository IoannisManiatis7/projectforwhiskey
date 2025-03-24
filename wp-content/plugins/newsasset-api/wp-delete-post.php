<?php
namespace newsasset;

use Exception;

function wp_delete_post( $data ) {
    if ( !NA_ENABLE_DELETES ) throw new Exception( "Deletes are disabled!" );

    $id = get_post_id( $data );
    $doc = get_post( $id );
    $post = $doc ? $doc->ID : null;
    if ( empty( $post ) ) throw new Exception( "Invalid post id" );

    $post = \wp_delete_post( $id, true );
    if ( is_wp_error( $post ) ) throw new Exception( get_error( $post ) );
}
