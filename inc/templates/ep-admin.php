<h1>Elite Portfolio Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'ep-settings-group' );//name of the settings group ?>
	<?php do_settings_sections( 'elite_ep' ); //name of the page?> 
	<?php submit_button(); ?>
</form>

<?php
