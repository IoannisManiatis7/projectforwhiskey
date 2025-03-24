<?php 
  /*======24HOURS INDEX QUERY ==== */
  function hwl_home_pagesize( $query ) {
  if ( ( is_home() && $query->is_main_query() && !is_admin() ) ) {
    $query->set( 'no_found_rows', true );
    $query->set( 'date_query', 
      [[
      'after'     => '24 hours ago',
      'inclusive' => true,
      ]]
    );
  }

  }

add_action( 'pre_get_posts', 'hwl_home_pagesize', 1 );

/* FIX FOR SLOW QUERIES */
add_filter( 'media_library_show_audio_playlist', '__return_true' );
add_filter( 'media_library_show_video_playlist', '__return_true' );
add_filter( 'media_library_months_with_files', function( $months )
{
    // Generate file months when it's not cached or the transient has expired
    if ( false === ( $months = get_transient( 'wpse_media_library_months_with_files' ) ) )
    {
        global $wpdb;
        $months = $wpdb->get_results( $wpdb->prepare( "
            SELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month
            FROM $wpdb->posts
            WHERE post_type = %s
            ORDER BY post_date DESC
         ", 'attachment' ) );

        // Cache the results
        set_transient(
            'wpse_media_library_months_with_files',
                $months,
                12 * HOUR_IN_SECONDS   // <-- Override to your needs!
             );
    }
    return $months;
} );

add_filter( 'ajax_query_attachments_args', function( $args ) {
   $args['date_query'] = array(array('after' => '24 months ago'));
   $args['numberposts'] = 100;
   return $args;
} );

function wpd_sort_by_meta_n( $query ) {
    if (    $query->is_archive() && $query->is_main_query() && !is_admin()  ) {
            $query->set( 'post_status', 'publish' );
            $query->set( 'date_query', 
                [[
                'after'     => '8 years ago',
                'inclusive' => true,
                ]]
            );
	    }
}
add_action( 'pre_get_posts', 'wpd_sort_by_meta_n', 1);


function wpd_sor( $query ) {
  if ($query->is_main_query() && is_admin()  ) {

    $query->set( 'date_query', 
      [[
      'after'     => '8 years ago',
      'inclusive' => true,
      ]]
    );

  }
}
add_action( 'pre_get_posts', 'wpd_sor', 1);


?>