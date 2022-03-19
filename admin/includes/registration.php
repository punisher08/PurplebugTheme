<?php
/** 
 * Register Menus
 * @package 	Wordpress_CustomTheme
 * @subpackage 	Wordpress_CustomTheme
 * @since 		1.0
 * @author 		
 */

function purplebug_menu_registration(){
	add_menu_page(
        'Purple Bug Theme Settings',
        'Purple Bug',
        'manage_options',
        'purplebug_settings',
        'purplebug_menu_display',
        'dashicons-index-card'
    );
}
add_action( 'admin_menu', 'purplebug_menu_registration' );

function purplebug_menu_display(){
        if (!current_user_can('administrator'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
        include ( PURPLEBUG_BASE . '/admin/settings/theme-setting-page.php' );
}
include( PURPLEBUG_BASE . '/admin/settings/theme-settings.php' );



