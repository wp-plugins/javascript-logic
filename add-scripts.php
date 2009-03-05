<?php

// Get the option from the database
	$js = get_option('javascript_logic_settings');

	if(!is_array($js))
		return;

	extract($js);

// Add JS Logic to appropriate hook
	add_action('wp_print_scripts', 'js_logic_script_logic');
	add_action('wp_print_scripts', 'js_logic_custom_fields');

// WP scripts
	$script_selects = array(
		$script_1_select,
		$script_2_select,
		$script_3_select,
		$script_4_select,
		$script_5_select,
		$script_6_select,
		$script_7_select,
		$script_8_select,
		$script_9_select,
		$script_10_select,
	);
// JS Logic scripts
	$script_selects_plugin = array(
		$script_1_plugin,
		$script_2_plugin,
		$script_3_plugin,
		$script_4_plugin,
		$script_5_plugin,
		$script_6_plugin,
		$script_7_plugin,
		$script_8_plugin,
		$script_9_plugin,
		$script_10_plugin,
	);
// Custom scripts
	$script_custom_inputs = array(
		$script_1_input,
		$script_2_input,
		$script_3_input,
		$script_4_input,
		$script_5_input,
		$script_6_input,
		$script_7_input,
		$script_8_input,
		$script_9_input,
		$script_10_input,
	);

/**
* Checks custom fields for JavaScript
* User can enter up to 10 pieces of JavaScript
*
* @since 0.1
*/
function js_logic_custom_fields() {
	if(is_single() || is_page()) :

		global $post;
		$i = 1;

		$wp_script = get_post_meta($post->ID, '_js_logic_wp_script', true);
		if($wp_script)
			wp_enqueue_script($wp_script);

		$js_logic_script = get_post_meta($post->ID, '_js_logic_script', true);
		if($js_logic_script)
			wp_enqueue_script('custom-field-js-logic-' . $i++, JS_LOGIC_URL . '/js/' . $js_logic_script, false);

		$js_custom = get_post_meta($post->ID, '_js_logic_custom', true);
		if($js_custom)
			wp_enqueue_script('custom-field-js-logic-' . $i++, $js_custom, false);

	endif;
}

/**
* Runs each script through a loop
* Checks if the logic is there to move on
* If true, call the script loader
*
* @since 0.1
*/
function js_logic_script_logic() {

	global $js;
	extract($js);

	$logics_arr = array(
		$script_1_logic,
		$script_2_logic,
		$script_3_logic,
		$script_4_logic,
		$script_5_logic,
		$script_6_logic,
		$script_7_logic,
		$script_8_logic,
		$script_9_logic,
		$script_10_logic,
	);

	$i = 0;
	foreach($logics_arr as $logic) :

		if($logic) :
			$logic = stripslashes($logic);
			eval("if($logic) js_logic_add_scripts($i);");
		else :
			js_logic_add_scripts($i);
		endif;

	$i++;
	endforeach;
}

/**
* Checks is a particular script has been input
* If so, add it to wp_enqueue_script()
* Check WP's script first for inclusion
*
* @since 0.1
*/
function js_logic_add_scripts($i = false) {
	global $script_selects, $script_selects_plugin, $script_custom_inputs;

	$scripts = array($script_selects[$i], $script_selects_plugin[$i], $script_custom_inputs[$i]);

	/*
	* Add script included with WordPress
	*/
	if($scripts[0])
		wp_enqueue_script($scripts[0]);

	/*
	* Add script included with plugin
	*/
	if($scripts[1])
		wp_enqueue_script('js-logic-script-' . $i++, JS_LOGIC_URL . '/js/' . $scripts[1], false);

	/*
	* Add  custom script
	*/
	if($scripts[2])
		wp_enqueue_script('js-logic-custom-script-' . $i++, $scripts[2], false);
}

?>