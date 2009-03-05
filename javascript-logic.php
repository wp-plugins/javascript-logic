<?php
/*
Plugin Name: JavaScript Logic
Plugin URI: http://justintadlock.com
Description: Allows you to load JavaScript in a much more controlled way using WordPress conditional tags.
Version: 0.1
Author: Justin Tadlock
Author URI: http://justintadlock.com
License: GPL
*/

/*
* Copyright (c) 2008 Justin Tadlock.  All rights reserved.
* http://justintadlock.com
*
* Widgets Reloaded is released under the GNU General Public License, version 2 (GPL).
* http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

// Make sure we get the correct directory
	if(!defined('WP_CONTENT_URL'))
		define('WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
	if(!defined('WP_CONTENT_DIR'))
		define('WP_CONTENT_DIR', ABSPATH . 'wp-content');
	if(!defined('WP_PLUGIN_URL'))
		define('WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins');
	if(!defined('WP_PLUGIN_DIR'))
		define('WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins');

// Define constant path to plugin folder
	define(JS_LOGIC, WP_PLUGIN_DIR . '/javascript-logic');
	define(JS_LOGIC_URL, WP_PLUGIN_URL . '/javascript-logic');

// Localization
	load_plugin_textdomain('js_logic');

// Add actions
	add_action('admin_menu', 'javascript_logic_add_pages');

	if(is_admin())
		require_once(JS_LOGIC . '/meta-box.php');

// Load files
	if(is_admin())
		require_once(JS_LOGIC . '/settings-admin.php');
	else
		require_once(JS_LOGIC . '/add-scripts.php');

/**
* Function to add the settings page
*
* @since 0.1
*/
function javascript_logic_add_pages() {
	add_theme_page(__('JavaScript Logic Settings','js_logic'), __('JavaScript Logic','js_logic'), 10, 'javascript-logic-settings.php', javascript_logic_theme_page);
}

/**
* Function for retreiving all of the plugin-included scripts
*
* @since 0.1
*/
function js_logic_scripts() {
	$scripts = array(
		'',
		'iepngfix.htc',
		'jquery/effects.blind.js',
		'jquery/effects.bounce.js',
		'jquery/effects.clip.js',
		'jquery/effects.drop.js',
		'jquery/effects.explode.js',
		'jquery/effects.fold.js',
		'jquery/effects.highlight.js',
		'jquery/effects.pulsate.js',
		'jquery/effects.shake.js',
		'jquery/effects.slide.js',
		'jquery/effects.transfer.js',
		'jquery/jquery.ui.all.js',
		'jquery/ui.accordion.js',
		'jquery/ui.datepicker.js',
		'jquery/ui.droppable.js',
		'jquery/ui.selectable.js',
		'jquery/ui.slider.js',
		'mootools/mootools.js',
	);
	return $scripts;
}

/**
* Function for retreiving all of the WordPress-included scripts
*
* @since 0.1
*/
function js_logic_wp_scripts() {
	$scripts = array(
		'',
		'autosave',
		'colorpicker',
		'cropper',	
		'editor',
		'interface',
		'jquery',
		'jquery-form',
		'jquery-color',
		'jquery-ui-core',
		'jquery-ui-tabs',
		'jquery-ui-sortable',
		'jquery-ui-draggable',
		'jquery-ui-resizable',
		'jquery-ui-dialog',
		'quicktags',
		'sack',
		'schedule',
		'scriptaculous',
		'scriptaculous-builder',
		'scriptaculous-controls',
		'scriptaculous-dragdrop',
		'scriptaculous-effects',
		'scriptaculous-root',
		'scriptaculous-slider',
		'scriptaculous-sound',
		'suggest',	
		'swfupload',
		'swfupload-degrade',
		'swfupload-queue',
		'swfupload-handlers',
		'thickbox',
		'wp-ajax-response',	
		'wp-lists',	
	);

	return $scripts;
}

/**
* Returns an array of all the settings defaults
*
* @since 0.1
*/
function js_logic_settings_args() {
	$settings_arr = array(
		'script_1_input' => false,
		'script_1_select' => false,
		'script_1_plugin' => false,
		'script_1_logic' => false,

		'script_2_input' => false,
		'script_2_select' => false,
		'script_2_plugin' => false,
		'script_2_logic' => false,

		'script_3_input' => false,
		'script_3_select' => false,
		'script_3_plugin' => false,
		'script_3_logic' => false,

		'script_4_input' => false,
		'script_4_select' => false,
		'script_4_plugin' => false,
		'script_4_logic' => false,

		'script_5_input' => false,
		'script_5_select' => false,
		'script_5_plugin' => false,
		'script_5_logic' => false,

		'script_6_input' => false,
		'script_6_select' => false,
		'script_6_plugin' => false,
		'script_6_logic' => false,

		'script_7_input' => false,
		'script_7_select' => false,
		'script_7_plugin' => false,
		'script_7_logic' => false,

		'script_8_input' => false,
		'script_8_select' => false,
		'script_8_plugin' => false,
		'script_8_logic' => false,

		'script_9_input' => false,
		'script_9_select' => false,
		'script_9_plugin' => false,
		'script_9_logic' => false,

		'script_10_input' => false,
		'script_10_select' => false,
		'script_10_plugin' => false,
		'script_10_logic' => false,
	);

	return $settings_arr;
}

?>