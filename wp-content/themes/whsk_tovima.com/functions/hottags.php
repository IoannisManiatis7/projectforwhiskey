<?php

acf_add_local_field_group(array(
	'key' => 'group_5aec95593ceb5',
	'title' => 'Hot Tags',
	'fields' => array(
		array(
			'key' => 'field_5aec956c21c49',
			'label' => 'Tags',
			'name' => 'tags_rows',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 15,
			'layout' => 'table',
			'button_label' => 'Προσθήκη tag',
			'sub_fields' => array(
				array(
					'key' => 'field_5aec959021c4a',
					'label' => 'Όνομα tag',
					'name' => 'tagn_name',
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
					'placeholder' => 'Tag',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5aec95c321c4b',
					'label' => 'Tag link',
					'name' => 'tag_link',
					'type' => 'text',
					'instructions' => 'Συμπληρώνετε το link τou tag',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'http://',
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
				'value' => 'tovima_tags',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
?>