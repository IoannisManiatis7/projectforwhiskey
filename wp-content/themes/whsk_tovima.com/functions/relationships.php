<?php
acf_add_local_field_group(array(
	'key' => 'group_5bd839b714c5a61',
	'title' => 'Εξτρα πεδία άρθρων',
	'fields' => array(
		array(
			'key' => 'field_5bd839bb8ccaqwfb',
			'label' => 'Σχετικά άρθρα',
			'name' => 'chosen_posts',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
				// 1 => 'printed_post',
			),
      'taxonomy' => taxonomieslist(),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));


/* THIS IS THE FREE TEXT AND LINK **/
acf_add_local_field_group(array(
	'key' => 'group_5b879ff865d6c',
	'title' => 'Ελευθερος Τιτλος',
	'fields' => array(
		array(
			'key' => 'field_5b879fffb1770',
			'label' => 'Τίτλος section',
			'name' => 'section_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Τίτλος',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5b87a023b1771',
			'label' => 'Url Section',
			'name' => 'url_section',
			'type' => 'text',
			'instructions' => 'πχ: http://www.tovima.gr/finance/',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5b88f7e8ad455',
			'label' => 'Ενεργό;',
			'name' => 'section_tf',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_free',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));




/** THIS IS MAIN BOX **/
acf_add_local_field_group(array(
	'key' => 'group_5b09d56678741',
	'title' => 'Επιλογή άρθρων',
	'fields' => array(
		array(
			'key' => 'field_5b09d570bdf81',
			'label' => 'Επιλογή άρθρων',
			'name' => 'box8_selection',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
			),
      'taxonomy' => taxonomieslist(),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 9,
			'max' => 9,
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_only_vima',
			),
		),
		// array(
		// 	array(
		// 		'param' => 'options_page',
		// 		'operator' => '==',
		// 		'value' => 'tovimaprint_index',
		// 	),
		// ),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_index',
			),
		),   
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/*=======================*/



acf_add_local_field_group(array(
	'key' => 'group_5b09d56671212',
	'title' => 'Επιλογή άρθρων 5 θέσεις',
	'fields' => array(
		array(
			'key' => 'field_5b09d570cca22',
			'label' => 'Επιλογή άρθρων',
			'name' => 'boxn5_selection',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
				1 => 'printed_post',
			),
			'taxonomy' => taxonomieslist(),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 5,
			'max' => 5,
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovimagr_elections23',
			),
		),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovimaprint_index',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/*=======================*/


/** THIS IS SIX BOX **/
acf_add_local_field_group(array(
	'key' => 'group_5b09d56675654',
	'title' => 'Επιλογή άρθρων 6 θέσεις',
	'fields' => array(
		array(
			'key' => 'field_5b09d570bdc56',
			'label' => 'Επιλογή άρθρων',
			'name' => 'box6_selection',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
				1 => 'printed_post',
			),
			'taxonomy' => taxonomieslist(),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 6,
			'max' => 6,
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_only_vima',
			),
		),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_printhome',
			),
		),
// 		array(
// 			array(
// 				'param' => 'options_page',
// 				'operator' => '==',
// 				'value' => 'tovima_opinions',
// 			),
// 		),   
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/*=======================*/



/** THIS IS FIVE BOX **/
acf_add_local_field_group(array(
	'key' => 'group_5b09d56675391',
	'title' => 'Επιλογή άρθρων',
	'fields' => array(
		array(
			'key' => 'field_5b09d570bdb37',
			'label' => 'Επιλογή άρθρων',
			'name' => 'box5_selection',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
			  ),
        'taxonomy' => array(
          0 => 'category:opinions',
          1 => 'category:politics',
          2 => 'category:wsj',
					3 => 'category:podcasts',
        ),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 4,
			'max' => 4,
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_opinions',
			),
		),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_wsj',
			),
		),    
		// array(
		// 	array(
		// 		'param' => 'options_page',
		// 		'operator' => '==',
		// 		'value' => 'tovimagr_elections23',
		// 	),
		// ),		
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/*=======================*/



/** THIS IS FOUR BOX **/
acf_add_local_field_group(array(
	'key' => 'group_5b09d56675106',
	'title' => 'Επιλογή άρθρων 4 θέσεις',
	'fields' => array(
		array(
			'key' => 'field_5b09d570bde76',
			'label' => 'Επιλογή άρθρων',
			'name' => 'box4_selection',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
        1 => 'printed_post',
			),
      'taxonomy' => taxonomieslist(),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 4,
			'max' => 4,
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovimaprint_xtp',
			),
		),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_afieromata',
			),
		),  
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_afieromata_2',
			),
		),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_afieromata_3',
			),
		),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_vimagazino',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/*=======================*/

/** THIS IS THREE BOX **/
acf_add_local_field_group(array(
	'key' => 'group_5b09d56676207',
	'title' => 'Επιλογή άρθρων 3 θέσεις',
	'fields' => array(
		array(
			'key' => 'field_5b09d570bdf97',
			'label' => 'Επιλογή άρθρων',
			'name' => 'box3_selection',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
        		1 => 'printed_post',
			),
      		'taxonomy' => taxonomieslist(),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 3,
			'max' => 3,
			'return_format' => 'object',
		),
	),
	'location' => array(
		// array(
		// 	array(
		// 		'param' => 'options_page',
		// 		'operator' => '==',
		// 		'value' => 'tovima_afieromata',
		// 	),
		// ),    
		// array(
		// 	array(
		// 		'param' => 'options_page',
		// 		'operator' => '==',
		// 		'value' => 'tovima_foodex',
		// 	),
		// ),
		// array(
		// 	array(
		// 		'param' => 'options_page',
		// 		'operator' => '==',
		// 		'value' => 'tovima_society',
		// 	),
		// ),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_neesepoxes',
			),
		),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_megenthinseis',
			),
		),		
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));


/*=======================*/

/** THIS IS ONE BOX
acf_add_local_field_group(array(
	'key' => 'group_5b09d56676207617',
	'title' => 'Επιλογή άρθρων 1 θέσεις',
	'fields' => array(
		array(
			'key' => 'field_5b09d570bdf96571GX7',
			'label' => 'Επιλογή άρθρων',
			'name' => 'box1_selection',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
        1 => 'printed_post',
			),
      'taxonomy' => taxonomieslist(),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 1,
			'max' => 1,
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_vimatodotis',
			),
		),
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tovima_sivilla',
			),
		),    
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
)); */


?>