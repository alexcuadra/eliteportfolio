<?php
/*

@package eptheme

	========================
	  	CUSTOM HEAD STYLE
	========================
*/

function ep_head(){
  ?>
    <style type="text/css">

      .bg-primary, .btn-primary, .star-light::after, .portfolio-item-caption{
        background-color:<?php echo get_theme_mod('header_bg_color', '#18BC9C'); ?>!important;
      }

      .footer, .bg-secondary{
        background-color:<?php echo get_theme_mod('nav_foot_bg_color', '#2C3E50'); ?>!important;
      }

    </style>

  <?php
}
