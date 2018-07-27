<?php
/*

@package eptheme

	========================
	  	MAIN FUNCTIONS
	========================
*/
//add styles and scripts
function ep_add_theme_scripts(){
  //adding styles
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.0' );
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.0' );
  //  wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css', array(), '4.0' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0' );

  //adding script
    wp_register_script( 'jqueryjs', get_template_directory_uri().'/js/jquery.js', array(), '' ,true);
    wp_register_script( 'bootsrap-bundle', get_template_directory_uri().'/js/bootstrap.bundle.js', array(), '' ,true);
    // wp_register_script( 'bootsrap-bundle', get_template_directory_uri().'/js/bootstrap.js', array(), true);
    wp_register_script( 'jquery-easing', get_template_directory_uri().'/js/jquery.easing.js', array(), '' ,true);
  //  wp_register_script( 'magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.js', array(),  '',true);
    wp_register_script( 'jqBootstrapValidation', get_template_directory_uri().'/js/jqBootstrapValidation.js', array(), '' ,true);
    wp_register_script( 'contact_me', get_template_directory_uri().'/js/contact_me.js', array(), '', true);
    wp_register_script( 'freelancer', get_template_directory_uri().'/js/freelancer.js', array(), '', true);

    wp_enqueue_script( 'jqueryjs');
  //  wp_enqueue_script( 'bootsrap');
    wp_enqueue_script( 'bootsrap-bundle');
    wp_enqueue_script( 'jquery-easing');
  //  wp_enqueue_script( 'magnific-popup');
    wp_enqueue_script( 'jqBootstrapValidation');
    wp_enqueue_script( 'contact_me');
    wp_enqueue_script( 'freelancer');

}

add_action( 'wp_enqueue_scripts', 'ep_add_theme_scripts' );

//options
require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-customizer.php';
require get_template_directory() . '/inc/front/head.php';

//actions added
add_action( 'customize_register', 'ep_customize_register' );
add_action('wp_head', 'ep_head');
/**
 * SVG icons functions and filters.
 */


require_once('wp-bootstrap-navwalker.php');

//Theme Support
function ep_theme_setup(){
  //custom logio
  add_theme_support('custom-logo');
  //add post thumbnails
  add_theme_support( 'post-thumbnails' );
  //Nav Menus
  register_nav_menus(
    array(
      'primary' => __('Primary Menu'),
      'social' => __( 'Social Links Menu')
     )
  );
}

add_action( 'after_setup_theme', 'ep_theme_setup' );

/**
 * Changes the class on the custom logo in the header.php
 */
function helpwp_custom_logo_output( $html ) {
	$html = str_replace('custom-logo', 'custom-logo img-fluid mb-5 d-block mx-auto', $html );
	return $html;
}
add_filter('get_custom_logo', 'helpwp_custom_logo_output', 10);

function ep_add_widgets() {

	register_sidebar( array(
		'name'          => 'About',
		'id'            => 'about',
		'description'   => 'add info about you '

	) );

}

add_action( 'widgets_init', 'ep_add_widgets' );
