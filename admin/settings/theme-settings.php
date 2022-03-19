<?php
/**
 * Theme Settings
 * 
 * @package 	
 * @subpackage 	
 * @since 		
 * @author 		
 */
add_action('admin_init', 'purplebug_register_settings');
function purplebug_register_settings() {
    
	add_settings_section(
		'purplebug_settings_section',
		'',
		'purlplebug_setting_callback',
		'purplebug_setting_option'
	);

	add_settings_field( 
		'purplebug_activate_carousel',
		'Activate Carousel',
		'activate_carousel_callback',
		'purplebug_setting_option',
		'purplebug_settings_section'
	);
	add_settings_field( 
		'purplebug_divider_color',
		'Divider color',
		'purplebug_divider_color_callback',
		'purplebug_setting_option',
		'purplebug_settings_section'
	);
	add_settings_field( 
		'purplebug_menu_color',
		'Menu Text color',
		'purplebug_menu_color_callback',
		'purplebug_setting_option',
		'purplebug_settings_section'
	);
	add_settings_field( 
		'purplebug_description_color',
		'Description Text color',
		'purplebug_description_color_callback',
		'purplebug_setting_option',
		'purplebug_settings_section'
	);
	add_settings_field( 
		'purplebug_posts_per_page',
		'Post Per Page',
		'purplebug_posts_per_page_callback',
		'purplebug_setting_option',
		'purplebug_settings_section'
	);
	add_settings_field(
		'purplebug_carousel_design',
		'Choose Carousel design',
		'purplebug_carousel_design_callback',
		'purplebug_setting_option',
		'purplebug_settings_section',
		array(
			'default'   => 'Default',
			'narrow_height' => 'Narrow Height',
		)
	);

	register_setting('purplebug_setting_option','purplebug_activate_carousel');
	register_setting('purplebug_setting_option','purplebug_divider_color');
	register_setting('purplebug_setting_option','purplebug_menu_color');
	register_setting('purplebug_setting_option','purplebug_description_color');
	register_setting('purplebug_setting_option','purplebug_posts_per_page');
	register_setting('purplebug_setting_option','purplebug_carousel_design');

	

} /* end purplebug_register_settings */
function purlplebug_setting_callback(){
    echo '<p></p>';
}
/**
* Field Callbacks
*/
function activate_carousel_callback($args) {
	$purplebug_activate_carousel = get_option( 'purplebug_activate_carousel', 0 );
	$html = '<input type="checkbox" id="purplebug_activate_carousel" name="purplebug_activate_carousel" value="1" ' . checked( 1, $purplebug_activate_carousel, false ) . '/>'; 
	echo $html;
} 

function purplebug_divider_color_callback($args) {
	$purplebug_divider_color = get_option( 'purplebug_divider_color', '#000000' );

    $html = '<input type="text" id="purplebug_divider_color" name="purplebug_divider_color" value="'.esc_attr__( $purplebug_divider_color ).'" class="purplebug_colorpicker" data-default-color="#effeff"/>';
    echo $html;
} /* end purplebug_divider_color_callback */
function purplebug_menu_color_callback($args) {
	$purplebug_menu_color = get_option( 'purplebug_menu_color', '#000000' );

    $html = '<input type="text" id="purplebug_menu_color" name="purplebug_menu_color" value="'.esc_attr__( $purplebug_menu_color ).'" class="purplebug_colorpicker" data-default-color="#effeff"/>';
    echo $html;
} /* end purplebug_menu_color_callback */
function purplebug_description_color_callback($args) {
	$purplebug_description_color = get_option( 'purplebug_description_color', '#000000' );

    $html = '<input type="text" id="purplebug_description_color" name="purplebug_description_color" value="'.esc_attr__( $purplebug_description_color ).'" class="purplebug_colorpicker" data-default-color="#effeff"/>';
    echo $html;
} /* end purplebug_description_color_callback */

function purplebug_posts_per_page_callback($args) {
	$purplebug_posts_per_page = get_option( 'purplebug_posts_per_page', '10' );

    $html = '<input type="number" id="purplebug_posts_per_page" name="purplebug_posts_per_page" value="'.esc_attr__( $purplebug_posts_per_page ).'" />';
    echo $html;
} /* end purplebug_posts_per_page_callback */



function purplebug_carousel_design_callback($args) {
	$purplebug_carousel_design = get_option( 'purplebug_carousel_design', 'default' );

	$html = "<select name='purplebug_carousel_design' class='ndf_dropdown'>";
	foreach( $args as $option_key => $option_value ){
		$html .= "<option value='".$option_key."' ".selected( $purplebug_carousel_design, $option_key, false ).">".$option_value."</option>";
	}
	$html .= "</select>";
	echo $html;
} /* end purplebug_carousel_design_callback */
