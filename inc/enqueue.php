<?php
/*

@package eptheme

	========================
	ADMIN ENQUEUE FUNCTIONS
	========================
*/

function ep_load_admin_scripts($hook){
  if ('toplevel_page_elite_ep' != $hook) {
    // code...
    return;
  }
  wp_register_style( 'ep_admin', get_template_directory_uri().'/css/ep.admin.css', array(), '1.0', 'all' );
  wp_enqueue_style( 'ep_admin' );

  wp_enqueue_media();

  wp_register_script( 'ep-admin-script', get_template_directory_uri() . '/js/ep.admin.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'ep-admin-script' );

}

add_action( 'admin_enqueue_scripts', 'ep_load_admin_scripts' );
