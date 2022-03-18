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
        'Purple Bug',
        'Purple Bug',
        'administrator',
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
}
