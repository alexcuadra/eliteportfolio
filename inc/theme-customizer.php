<?php
/*

@package eptheme

	========================
	  	THEME CUSTOMIZER
	========================
*/

function ep_customize_register($wp_customize){
  $wp_customize->add_setting('header_bg_color', array(
    'default'  => '#18BC9C',
    'transport' => 'refresh'
  ));

  $wp_customize->add_setting('nav_foot_bg_color', array(
    'default'  => '#2C3E50',
    'transport' => 'refresh'
  ));

  $wp_customize->add_section('ep_color_theme_section', array(
    'title'  => __('Color', 'eliteportfolio'),
    'priority' => 30
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_colors', array(
    'label' => __('Header Color', 'eliteportfolio'),
    'section' => 'ep_color_theme_section',
    'settings' => 'header_bg_color'
  )));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foot_colors', array(
    'label' => __('Nav and Footer Color', 'eliteportfolio'),
    'section' => 'ep_color_theme_section',
    'settings' => 'nav_foot_bg_color'
  )));

}
