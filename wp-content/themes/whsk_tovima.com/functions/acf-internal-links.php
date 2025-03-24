<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b587aa3b4e34',
	'title' => 'Εξωτερικά άρθρα',
	'fields' => array(
		array(
			'key' => 'field_5b587ab7a8919',
			'label' => 'Εσωτερικό link',
			'name' => 'internal_link',
			'type' => 'group',
			'instructions' => 'Συμπληρώστε για το εξωτερικό άρθρο',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5b587b25a27e6',
					'label' => 'Τίτλος eσωτερικoύ link',
					'name' => 'internal_text_ο',
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
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5b587b41h2589',
					'label' => 'Link eσωτερικoύ link',
					'name' => 'internal_link_ο',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
		array(
			'key' => 'field_5b587ab7r4589',
			'label' => 'Εσωτερικό link N2',
			'name' => 'internal_link_2',
			'type' => 'group',
			'instructions' => 'Συμπληρώστε για το εξωτερικό άρθρο',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5b587b25a96r4',
					'label' => 'Τίτλος eσωτερικoύ link',
					'name' => 'internal_text_ο_2',
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
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5b587b41h5512',
					'label' => 'Link eσωτερικoύ link',
					'name' => 'internal_link_ο_2',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),  
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'internal_links',
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


//END εξωτερικα αρθρα αθλητισμός
endif;
?>