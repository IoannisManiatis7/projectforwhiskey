<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_63beb1ef4a8a0',
	'title' => 'Επιλογή Post Layout',
	'fields' => array(
		array(
			'key' => 'field_63beb200d64cc',
			'label' => 'Επιλογές Template',
			'name' => 'temp_layout',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'art01' => 'Default',
				'art02' => 'Μεγάλη Εικονα / Τιτλος Κέντρο',
				'art03' => 'Μεγάλη εικόνα με δοντι',
				'art04' => 'Άρθρο 50/50',
			),
			'default_value' => array(
				0 => 'art01',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
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
	'active' => true,
	'description' => '',
));

endif;
?>