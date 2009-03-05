<div class="postbox open">

<h3><?php _e('About This Plugin','js_logic'); ?></h3>

<div class="inside">
	<table class="form-table">

	<tr>
		<th><?php _e('Plugin Description:','js_logic'); ?></th>
		<td><?php echo $plugin_data['Description']; ?></td>
	</tr>
	<tr>
		<th><?php _e('Plugin Version:','js_logic'); ?></th>
		<td><?php echo $plugin_data['Name']; ?> <?php echo $plugin_data['Version']; ?></td>
	</tr>
	<tr>
		<th><?php _e('Plugin Documentation:','js_logic'); ?></th>
		<td><?php _e('Read the <code>readme.html</code> file included with the plugin to see how this plugin works.','js_logic'); ?></td>
	</tr>
	<tr>
		<th><?php _e('Plugin Support:','js_logic'); ?></th>
		<td><a href="http://themehybrid.com/support" title="<?php _e('Get support for this plugin','js_logic'); ?>"><?php _e('Visit the support forums.','js_logic'); ?></a></td>
	</tr>

	</table>
</div>
</div>

<div class="postbox open" style="width:49%;float:left;">

<h3><?php _e('JavaScript Set 1','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_1_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_1_select']; ?>" name="<?php echo $data['script_1_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_1_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_1_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_1_plugin']; ?>" name="<?php echo $data['script_1_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_1_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_1_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_1_input']; ?>" name="<?php echo $data['script_1_input']; ?>" value="<?php echo stripslashes($val['script_1_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_1_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_1_logic']; ?>" name="<?php echo $data['script_1_logic']; ?>" value="<?php echo stripslashes($val['script_1_logic']); ?>" size="20" />
		</td>
	</tr>

	</table>
</div>
</div>

<div class="postbox open" style="width:49%;float:right;">

<h3><?php _e('JavaScript Set 2','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_2_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_2_select']; ?>" name="<?php echo $data['script_2_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_2_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_2_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_2_plugin']; ?>" name="<?php echo $data['script_2_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_2_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_2_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_2_input']; ?>" name="<?php echo $data['script_2_input']; ?>" value="<?php echo stripslashes($val['script_2_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_2_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_2_logic']; ?>" name="<?php echo $data['script_2_logic']; ?>" value="<?php echo stripslashes($val['script_2_logic']); ?>" size="20" />
		</td>
	</tr>
	</table>
</div>
</div>

<div class="postbox open" style="clear:both;width:49%;float:left;">

<h3><?php _e('JavaScript Set 3','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_3_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_3_select']; ?>" name="<?php echo $data['script_3_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_3_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_3_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_3_plugin']; ?>" name="<?php echo $data['script_3_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_3_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_3_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_3_input']; ?>" name="<?php echo $data['script_3_input']; ?>" value="<?php echo stripslashes($val['script_3_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_3_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_3_logic']; ?>" name="<?php echo $data['script_3_logic']; ?>" value="<?php echo stripslashes($val['script_3_logic']); ?>" size="20" />
		</td>
	</tr>
	</table>
</div>
</div>

<div class="postbox open" style="width:49%;float:right;">

<h3><?php _e('JavaScript Set 4','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_4_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_4_select']; ?>" name="<?php echo $data['script_4_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_4_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_4_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_4_plugin']; ?>" name="<?php echo $data['script_4_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_4_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_4_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_4_input']; ?>" name="<?php echo $data['script_4_input']; ?>" value="<?php echo stripslashes($val['script_4_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_4_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_4_logic']; ?>" name="<?php echo $data['script_4_logic']; ?>" value="<?php echo stripslashes($val['script_4_logic']); ?>" size="20" />
		</td>
	</tr>
	</table>
</div>
</div>

<div class="postbox open" style="clear:both;width:49%;float:left;">

<h3><?php _e('JavaScript Set 5','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_5_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_5_select']; ?>" name="<?php echo $data['script_5_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_5_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_5_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_5_plugin']; ?>" name="<?php echo $data['script_5_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_5_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_5_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_5_input']; ?>" name="<?php echo $data['script_5_input']; ?>" value="<?php echo stripslashes($val['script_5_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_5_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_5_logic']; ?>" name="<?php echo $data['script_5_logic']; ?>" value="<?php echo stripslashes($val['script_5_logic']); ?>" size="20" />
		</td>
	</tr>
	</table>
</div>
</div>

<div class="postbox open" style="width:49%;float:right;">

<h3><?php _e('JavaScript Set 6','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_6_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_6_select']; ?>" name="<?php echo $data['script_6_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_6_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_6_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_6_plugin']; ?>" name="<?php echo $data['script_6_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_6_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_6_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_6_input']; ?>" name="<?php echo $data['script_6_input']; ?>" value="<?php echo stripslashes($val['script_6_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_6_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_6_logic']; ?>" name="<?php echo $data['script_6_logic']; ?>" value="<?php echo stripslashes($val['script_6_logic']); ?>" size="20" />
		</td>
	</tr>
	</table>
</div>
</div>

<div class="postbox open" style="clear:both;width:49%;float:left;">

<h3><?php _e('JavaScript Set 7','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_7_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_7_select']; ?>" name="<?php echo $data['script_7_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_7_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_7_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_7_plugin']; ?>" name="<?php echo $data['script_7_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_7_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_7_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_7_input']; ?>" name="<?php echo $data['script_7_input']; ?>" value="<?php echo stripslashes($val['script_7_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_7_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_7_logic']; ?>" name="<?php echo $data['script_7_logic']; ?>" value="<?php echo stripslashes($val['script_7_logic']); ?>" size="20" />
		</td>
	</tr>
	</table>
</div>
</div>

<div class="postbox open" style="width:49%;float:right;">

<h3><?php _e('JavaScript Set 8','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_8_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_8_select']; ?>" name="<?php echo $data['script_8_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_8_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_8_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_8_plugin']; ?>" name="<?php echo $data['script_8_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_8_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_8_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_8_input']; ?>" name="<?php echo $data['script_8_input']; ?>" value="<?php echo stripslashes($val['script_8_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_8_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_8_logic']; ?>" name="<?php echo $data['script_8_logic']; ?>" value="<?php echo stripslashes($val['script_8_logic']); ?>" size="20" />
		</td>
	</tr>
	</table>
</div>
</div>

<div class="postbox open" style="clear:both;width:49%;float:left;">

<h3><?php _e('JavaScript Set 9','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_9_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_9_select']; ?>" name="<?php echo $data['script_9_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_9_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_9_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_9_plugin']; ?>" name="<?php echo $data['script_9_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_9_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_9_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_9_input']; ?>" name="<?php echo $data['script_9_input']; ?>" value="<?php echo stripslashes($val['script_9_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_9_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_9_logic']; ?>" name="<?php echo $data['script_9_logic']; ?>" value="<?php echo stripslashes($val['script_9_logic']); ?>" size="20" />
		</td>
	</tr>
	</table>
</div>
</div>

<div class="postbox open" style="width:49%;float:right;">

<h3><?php _e('JavaScript Set 10','js_logic'); ?></h3>

<div class="inside">

	<table class="form-table">

	<tr>
		<th>
			<label for="<?php echo $data['script_10_select']; ?>"><?php _e('Select WordPress Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_10_select']; ?>" name="<?php echo $data['script_10_select']; ?>">
			<?php foreach(js_logic_wp_scripts() as $script) : ?>
				<option <?php if($val['script_10_select'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_10_plugin']; ?>"><?php _e('Select Plugin Script:','js_logic'); ?></label>
		</th>
		<td>
			<select id="<?php echo $data['script_10_plugin']; ?>" name="<?php echo $data['script_10_plugin']; ?>">
			<?php foreach(js_logic_scripts() as $script) : ?>
				<option <?php if($val['script_10_plugin'] == $script) echo ' selected="selected"'; ?>>
					<?php echo $script; ?>
				</option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_10_input']; ?>"><?php _e('Custom File URL:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_10_input']; ?>" name="<?php echo $data['script_10_input']; ?>" value="<?php echo stripslashes($val['script_10_input']); ?>" size="20" />
		</td>
	</tr>

	<tr>
		<th>
			<label for="<?php echo $data['script_10_logic']; ?>"><?php _e('Script Logic:','js_logic'); ?></label>
		</th>
		<td>
			<input id="<?php echo $data['script_10_logic']; ?>" name="<?php echo $data['script_10_logic']; ?>" value="<?php echo stripslashes($val['script_10_logic']); ?>" size="20" />
		</td>
	</tr>
	</table>
</div>
</div>