<?php
/*

@package eptheme

	========================
		ADMIN PAGE
	========================
*/
function ep_add_admin_page() {

	//Generate ep Admin Page
	add_menu_page( 'ep Theme Options', 'Elite Portfolio', 'manage_options', 'elite_ep', 'ep_theme_create_page', '
dashicons-admin-customizer', 110 );

	//Generate ep Admin Sub Pages
	add_submenu_page( 'elite_ep', 'EP Theme Options', 'General', 'manage_options', 'elite_ep', 'ep_theme_create_page' );




}
add_action( 'admin_menu', 'ep_add_admin_page' );

//Activate custom settings
	add_action( 'admin_init', 'ep_custom_settings' );

function ep_custom_settings() {

	//general options

	register_setting( 'ep-settings-group', 'twitter_handler', 'ep_sanitize_twitter_handler' );
	register_setting( 'ep-settings-group', 'facebook_handler' );
	register_setting( 'ep-settings-group', 'behance_handler' );
	register_setting( 'ep-settings-group', 'linkedin_handler' );

	add_settings_section( 'ep-footer-options', 'information Option', 'ep_footer_options', 'elite_ep');


	add_settings_field( 'location', 'Location', 'ep_location', 'elite_ep', 'ep-footer-options');
	add_settings_field( 'footer-twitter', 'Twitter handler', 'ep_footer_twitter', 'elite_ep', 'ep-footer-options');
	add_settings_field( 'footer-facebook', 'Facebook handler', 'ep_footer_facebook', 'elite_ep', 'ep-footer-options');
	add_settings_field( 'footer-behance', 'Behance handler', 'ep_footer_behance', 'elite_ep', 'ep-footer-options');
	add_settings_field( 'footer-linkedin', 'Linkedin handler', 'ep_footer_linkedin', 'elite_ep', 'ep-footer-options');


}


//functions for general options
function ep_footer_options() {
	echo 'Customize your Information';
}

function ep_location() {
	$location = esc_attr( get_option( 'ep_location' ) );
	echo '<input type="text" name="ep_location" value="'.$location.'" placeholder="location" /><p class="description">Input your address.</p>';
}

function ep_footer_twitter() {
	$twitter = esc_attr( get_option( 'twitter_handler' ) );
	echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" /><p class="description">Input your Twitter address.</p>';
}
function ep_footer_facebook() {
	$facebook = esc_attr( get_option( 'facebook_handler' ) );
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler" /><p class="description">Input your facebook address.</p>';
}
function ep_footer_behance() {
	$gplus = esc_attr( get_option( 'behance_handler' ) );
	echo '<input type="text" name="behance_handler" value="'.$gplus.'" placeholder="Behance handler" /><p class="description">Input your behance address.</p>';
}

function ep_footer_linkedin() {
	$gplus = esc_attr( get_option( 'linkedin_handler' ) );
	echo '<input type="text" name="linkedin_handler" value="'.$gplus.'" placeholder="Linkedin handler" /><p class="description">Input your linkedin address.</p>';
}
//Sanitization settings
function ep_sanitize_twitter_handler( $input ){
	$output = sanitize_text_field( $input );
	$output = str_replace('@', '', $output);
	return $output;
}

//template submenu functons
function ep_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/ep-admin.php' );
}
