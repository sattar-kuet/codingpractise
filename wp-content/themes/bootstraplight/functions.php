<?php
require get_template_directory().'/inc/walker.php';
require get_template_directory().'/inc/customizer.php';
require get_template_directory().'/inc/widgets.php';

if(!is_admin()){

	wp_enqueue_style( 'bsl_cdn','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'bsl_font_cdna', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script('bsl-slim', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.1.1', true);
	wp_enqueue_script('bsl-proper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '1.14.3', true);
	wp_enqueue_script('bsl-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array(), '4.1.1', true);
	 wp_enqueue_script( 'bsl-general', get_template_directory_uri() . '/js/general.js', array(), '1.0.0', true );

}

add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );

register_nav_menus( array(
	'top' => 'Primary Top Menu',
	'left' => 'Secondary Left Menu'
) );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}

?>