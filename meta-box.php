<?php

/**
* Add actions to the admin
*/
add_action('admin_menu', 'js_create_meta_box');
add_action('save_post', 'js_save_meta_data');

/**
* Function for adding meta boxes to the admin
* Separate the post and page meta boxes
*
* @since 0.1
*/
function js_create_meta_box() {
	global $theme_name;

	add_meta_box('js-post-meta-boxes', __('JavaScript Logic Settings','js_logic'), 'js_post_meta_boxes', 'post', 'normal', 'high');
	add_meta_box('js-page-meta-boxes', __('JavaScript Logic Settings','js_logic'), 'js_page_meta_boxes', 'page', 'normal', 'high');
}

/**
* Array of variables for post meta boxes
* Make the function filterable to add options through child themes
*
* @since 0.1
* @return Array $meta_boxes
* @filter
*/
function js_get_post_meta_boxes() {
	$meta_boxes = array(
		'wp_script' => array(
			'name' => '_js_logic_wp_script',
			'default' => '',
			'title' => __('WP JavaScript:', 'js_logic'),
			'type' => 'select',
			'options' => js_logic_wp_scripts(),
			'show_description' => false,
			'description' => false,
		),
		'js_script' => array(
			'name' => '_js_logic_script',
			'default' => '',
			'title' => __('JS Logic Script:', 'js_logic'),
			'type' => 'select',
			'options' => js_logic_scripts(),
			'show_description' => false,
			'description' => false,
		),
		'script' => array(
			'name' => '_js_logic_custom',
			'default' => '',
			'title' => __('JavaScript URL:', 'js_logic'),
			'type' => 'text',
			'show_description' => false,
			'description' => false,
		),
	);

	return apply_filters('js_post_meta_boxes', $meta_boxes);
}

/**
* Array of variables for meta boxes to pages
* Make the function filterable to add options through child themes
*
* @since 0.1
* @return Array $meta_boxes
* @filter
*/
function js_get_page_meta_boxes() {
	$meta_boxes = array(
		'wp_script' => array(
			'name' => '_js_logic_wp_script',
			'default' => '',
			'title' => __('WP JavaScript:', 'js_logic'),
			'type' => 'select',
			'options' => js_logic_wp_scripts(),
			'show_description' => false,
			'description' => false,
		),
		'js_script' => array(
			'name' => '_js_logic_script',
			'default' => '',
			'title' => __('JS Logic Script:', 'js_logic'),
			'type' => 'select',
			'options' => js_logic_scripts(),
			'show_description' => false,
			'description' => false,
		),
		'script' => array(
			'name' => '_js_logic_custom',
			'default' => '',
			'title' => __('JavaScript URL:', 'js_logic'),
			'type' => 'text',
			'show_description' => false,
			'description' => false,
		),
	);

	return apply_filters('js_page_meta_boxes', $meta_boxes);
}

/**
* Displays meta boxes on the Write Post panel
* Loops through each meta box in the $meta_boxes variable
* Gets array from js_post_meta_boxes()
*
* @since 0.1
*/
function js_post_meta_boxes() {
	global $post;
	$meta_boxes = js_get_post_meta_boxes();
?>

<table class="form-table">
<?php
	foreach($meta_boxes as $meta) :

		$value = get_post_meta($post->ID, $meta['name'], true);

		if($meta['type'] == 'text') :
			js_get_meta_text_input($meta, $value);
		elseif($meta['type'] == 'textarea') :
			js_get_meta_textarea($meta, $value);
		elseif($meta['type'] == 'select') :
			js_get_meta_select($meta, $value);
		endif;

	endforeach;
?>
</table>
<?php
}

/**
* Displays meta boxes on the Write Page panel
* Loops through each meta box in the $meta_boxes variable
* Gets array from js_page_meta_boxes()
*
* @since 0.1
*/
function js_page_meta_boxes() {
	global $post;
	$meta_boxes = js_get_page_meta_boxes();
?>

<table class="form-table">
<?php
	foreach($meta_boxes as $meta) :

		$value = stripslashes(get_post_meta($post->ID, $meta['name'], true));

		if($meta['type'] == 'text') :
			js_get_meta_text_input($meta, $value);
		elseif($meta['type'] == 'textarea') :
			js_get_meta_textarea($meta, $value);
		elseif($meta['type'] == 'select') :
			js_get_meta_select($meta, $value);
		endif;

	endforeach;
?>
</table>
<?php
}

/**
* Outputs a text input box with arguments from the parameters
* Used for both the post/page meta boxes
*
* @since 0.1
*/
function js_get_meta_text_input($args = array(), $value = false) {
	extract($args);
?>

	<tr>
		<th style="width:25%;">
		<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
		<input type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="<?php echo wp_specialchars($value, 1); ?>" size="30" tabindex="30" style="width: 97%;" />
		<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce(plugin_basename(__FILE__)); ?>" />
		</td>
	</tr>
<?php
}

/**
* Outputs a select box with arguments from the parameters
* Used for both the post/page meta boxes
*
* @since 0.1
*/
function js_get_meta_select($args = array(), $value = false) {
	extract($args);

?>

	<tr>
		<th style="width:25%;">
		<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
		<select name="<?php echo $name; ?>" id="<?php echo $name; ?>">
		<?php foreach($options as $option) : ?>
			<option <?php if(htmlentities($value, ENT_QUOTES) == $option) echo ' selected="selected"'; ?>>
				<?php echo $option; ?>
			</option>
		<?php endforeach; ?>
		</select>
		<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce(plugin_basename(__FILE__)); ?>" />
		</td>
	</tr>
<?php
}

/**
* Outputs a textarea with arguments from the parameters
* Used for both the post/page meta boxes
*
* @since 0.1
*/
function js_get_meta_textarea($args = array(), $value = false) {
	extract($args);
?>
	<tr>
		<th style="width:25%;">
		<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
		<textarea name="<?php echo $name; ?>" id="<?php echo $name; ?>" cols="60" rows="4" tabindex="30" style="width: 97%;"><?php echo wp_specialchars($value, 1); ?></textarea>
		<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce(plugin_basename(__FILE__)); ?>" />
		</td>
	</tr>
<?php
}

/**
* Loops through each meta box's set of variables
* Saves them to the database as custom fields
*
* @since 0.1
*/
function js_save_meta_data($post_id) {
	global $post;

	if('page' == $_POST['post_type'])
		$meta_boxes = array_merge(js_get_page_meta_boxes());
	else
		$meta_boxes = array_merge(js_get_post_meta_boxes());

	foreach($meta_boxes as $meta_box) :

		if(!wp_verify_nonce($_POST[$meta_box['name'] . '_noncename'], plugin_basename(__FILE__))) :
			return $post_id;
		endif;

		if('page' == $_POST['post_type']) :
			if(!current_user_can('edit_page', $post_id)) :
				return $post_id;
			endif;
		else :
			if(!current_user_can('edit_post', $post_id)) :
				return $post_id;
			endif;
		endif;

		$data = stripslashes($_POST[$meta_box['name']]);

		if(get_post_meta($post_id, $meta_box['name']) == '')
			add_post_meta($post_id, $meta_box['name'], $data, true);

		elseif($data != get_post_meta($post_id, $meta_box['name'], true))
			update_post_meta($post_id, $meta_box['name'], $data);

		elseif($data == '')
			delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));

	endforeach;
}
?>