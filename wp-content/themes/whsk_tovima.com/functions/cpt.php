<?php 

function cptui_register_podcast_post() {
	$labels = array(
		"name" => __( "Podcasts", "" ),
		"singular_name" => __( "Podcast", "" ),
		"menu_name" => __( "Podcast", "" ),
	);

	$args = array(
    'menu_position' => 5,
		"label" => __( "Podcasts", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"query_var" => true,
		"supports" => array( "title", "thumbnail", "excerpt"),
	);

	register_post_type( "podcast_posts", $args );
}

add_action( 'init', 'cptui_register_podcast_post' );

/*
function cptui_register_my_cpts_printed_post() {
	$labels = array(
		"name" => __( "Έντυπες Ειδήσεις", "" ),
		"singular_name" => __( "Έντυπη έκδοση", "" ),
		"menu_name" => __( "Έντυπη έκδοση", "" ),
	);

	$args = array(
    'menu_position' => 5,
		"label" => __( "Έντυπες Ειδήσεις", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"has_archive" => "printed",
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
    "rewrite" => array( "slug" => "print", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ),
		"taxonomies" => array( "category", "post_tag", "nea_authors" ),
	);

	register_post_type( "printed_post", $args );
}

add_action( 'init', 'cptui_register_my_cpts_printed_post' );
*/



function cptui_register_my_cpts_kioski_posts() {

	/**
	 * Post Type: Πρωτοσέλιδα.
	 */

	$labels = array(
		"name" => __( "Πρωτοσέλιδα", "" ),
		"singular_name" => __( "Πρωτοσέλιδο", "" ),
		"menu_name" => __( "Κιόσκι", "" ),
	);

	$args = array(
		"label" => __( "Πρωτοσέλιδα", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "kioski_posts", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 7,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "kioski_posts", $args );
}

add_action( 'init', 'cptui_register_my_cpts_kioski_posts' );

function cptui_register_my_taxes_magazines() {

	/**
	 * Taxonomy: Περιοδικά.
	 */

	$labels = array(
		"name" => __( "Περιοδικά", "" ),
		"singular_name" => __( "περιοδικό", "" ),
	);

	$args = array(
		"label" => __( "Περιοδικά", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Περιοδικά",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'kiosk', 'with_front' => true,  'hierarchical' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "magazines", array( "kioski_posts" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_magazines' );
?>