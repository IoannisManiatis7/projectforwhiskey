<?php 
/* Remove Search Query
=======================*/
if ( ! is_admin() ) {
	add_action( 'parse_query', function( $query ) {
		if ( $query->is_search ) {
			unset( $_GET['s'], $_POST['s'], $_REQUEST['s'] );
			$query->set( 's', '' );
			$query->is_search = false;
			$query->set_404();
			header( $_SERVER[ 'SERVER_PROTOCOL' ] . ' 404 Not Found' );
		}
	}, 5);
}
add_action( 'widgets_init', function() {
	unregister_widget( 'WP_Widget_Search' );
	}, 1 );
/* Remove Search Query
=======================*/
?>