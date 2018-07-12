<?php
function bl_customizer($wp_customize){

/*
###########################################
	Footer Text
###########################################
 */
	
   $wp_customize->add_section('copyright', array(
      'title'        => __('Copyright Text', 'bootstraplight'),
      'description'  => __('Copyright text will be filter #Y by date(Y)'),
      'priority'    => 120
   ));

   $wp_customize->add_setting('copyright_text', array(

    'default' => _x('While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.Copyright 2013-2018 by Refsnes Data. All Rights Reserved.','bootstraplight'),

    'type'   => 'option'
   ));


   $wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'copyright_text',
		    array(
		        'label'    => __( 'Footer Text', 'bootstraplight' ),
		        'section'  => 'copyright',
		        'settings' => 'copyright_text',
		        'type'     => 'textarea',
		        'priority'  => 1
		    )
	    )
	);

 /*
###########################################
	Category Box setting 
###########################################
 */

	$wp_customize->add_section('category_box', array(
		'title'        => __('Category Box', 'bootstraplight'),
		'description'  => __('Enter the number of items to show in a row'),
		'priority'    => 120
	));

	$wp_customize->add_setting('category_box_row', array(
		'default' => 3,
		'type'   => 'option'
	));


	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'category_box_row',
		array(
			'label'    => __( 'Box per row', 'bootstraplight' ),
			'section'  => 'category_box',
			'settings' => 'category_box_row',
			'type'     => 'range',
			'priority'  => 1,
			'input_attrs' => array(
				'min' => 1,
				'max' => 4,
				'step' => 1
			)
		)
	)
);

}

add_action('customize_register', 'bl_customizer'); 
?>