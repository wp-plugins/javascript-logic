<?php

/**
* Handles the main plugin settings
*
* @since 0.1
*/
function javascript_logic_theme_page() {

// Some variables
	$plugin_name = __('JavaScript Logic','js_logic');
	$settings_page_title = __('JavaScript Logic Settings','js_logic');
	$hidden_field_name = 'js_logic_submit_hidden';
	$plugin_data = get_plugin_data(JS_LOGIC . '/javascript-logic.php');

// Set form data IDs the same as settings keys
// Loop through each
	$settings_arr = js_logic_settings_args(false);

// Add plugin settings to database
	add_option('javascript_logic_settings', $settings_arr);

// Set form data IDs the same as settings keys
// Loop through each
	$settings_keys = array_keys($settings_arr);
	foreach($settings_keys as $key) :
		$data[$key] = $key;
	endforeach;

// Get existing options from database
	$settings = get_option('javascript_logic_settings');

	foreach($settings_arr as $key => $value) :
		$val[$key] = $settings[$key];
	endforeach;


// See if information has been posted
	if($_POST[$hidden_field_name] == 'Y') :

	// Loop through values and set them if posted
		foreach($settings_arr as $key => $value) :
			$settings[$key] = $val[$key] = $_POST[$data[$key]];
		endforeach;

	// Update theme settings
		update_option('javascript_logic_settings', $settings);

	?>

		<div class="wrap">
			<h2><?php echo $settings_page_title; ?></h2>

		<div class="updated" style="margin: 15px 0;">
			<p><strong><?php _e('Settings saved.', 'js_logic'); ?></strong></p>
		</div>

	<?php else : ?>

		<div class="wrap">
			<h2><?php echo $settings_page_title; ?></h2>
	<?php
	endif;
?>

<div id="poststuff" class="dlm">

	<form name="form0" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" style="border:none;background:transparent;">

	<?php require_once(JS_LOGIC . '/settings.php'); ?>

	<p class="submit" style="clear:both;">
		<input type="submit" name="Submit"  class="button-primary" value="<?php _e('Save Changes', 'js_logic'); ?>" />
		<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y" />
	</p>

	</form>

</div>

</div>

<?php

}

?>