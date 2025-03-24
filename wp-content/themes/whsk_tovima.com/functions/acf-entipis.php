<?php 

acf_add_local_field_group(array(
	'key' => 'group_5b6c3b6167a1entus74',
	'title' => 'Πεδία Έντυπης Έκδοσης Εφημερίδα',
	'fields' => array(
		array(
			'key' => 'field_5b6c3b616c193',
			'label' => 'Κλειδωμένη',
			'name' => 'locked_article_paper',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'locked' => 'Κλειδωμένο Έντυπο.',
			),
			'allow_custom' => 0,
			'save_custom' => 0,
			'default_value' => array(
				0 => 'locked',
			),
			'layout' => 'vertical',
			'toggle' => 0,
			'return_format' => 'value',
			'show_column' => 0,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'kioski_posts',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5b5f5d8471bab',
	'title' => 'Εξτρα Πεδία Εντυπης Έκδοσης',
	'fields' => array(
		array(
			'key' => 'field_5b5f5d90ee135',
			'label' => 'Document ID',
			'name' => 'document_id',
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
			'key' => 'field_5b5f5da4ee136',
			'label' => 'Eπιμέλεια άρθρου',
			'name' => 'get_editors',
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
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'printed_post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));


acf_add_local_field_group(array(
	'key' => 'group_5b1bd40fabee1',
	'title' => 'Πεδία Έντυπης Έκδοσης',
	'fields' => array(
		array(
			'key' => 'field_5b1bd43056b8d',
			'label' => 'Κλειδωμενο',
			'name' => 'locked_article',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'locked' => 'Κλειδωμενο Αρθρο.',
			),
			'allow_custom' => 0,
			'save_custom' => 0,
			'default_value' => array(
				0 => 'locked',
			),
			'layout' => 'vertical',
			'toggle' => 0,
			'return_format' => 'value',
			'show_column' => 0,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'printed_post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

?>