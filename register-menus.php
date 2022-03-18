<?php
/** 
 * Registers Admin Menu and Sub Menus
 * 
 * Registered Menus:
 * 
 * @package 	Wordpress_CustomTheme
 * @subpackage 	Wordpress_CustomTheme
 * @since 		1.0
 * @author 		
 */

function purplebug_menu_registration(){
	add_menu_page(
        'Purple Bug',
        'Purple Bug',
        'purplebug_admin',
        'purplebug_settings',
        'purplebug_menu_display',
        'dashicons-index-card',
        11
    );
    add_submenu_page( 'wcp-settings', 'Shortcode', 'Shortcode', 'purplebug_admin', 'purplebug_settings', 'purplebug_menu_display');
}
add_action( 'admin_menu', 'purplebug_menu_registration' );