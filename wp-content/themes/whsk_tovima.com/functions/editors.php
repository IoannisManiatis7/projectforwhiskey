<?php
function cptui_register_my_taxes_nea_authors() {
	/**
	 * Taxonomy: Authors.
	 */

	$labels = array(
		"name" => __( "Authors", "" ),
		"singular_name" => __( "Author", "" ),
		"menu_name" => __( "Editors", "" ),
	);

	$args = array(
		"label" => __( "Authors", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Authors",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'editor', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "nea_authors", array( "post", "ingr__authors", "printed_post" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_nea_authors' );
?>