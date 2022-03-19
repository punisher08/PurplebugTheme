<?php
/** 
 * 
 * @package 	Wordpress_CustomTheme
 * @subpackage 	Wordpress_CustomTheme
 * @since 		1.0
 * @author 		
 */
if( !defined('PURPLEBUG_BASE') ) { define('PURPLEBUG_BASE', dirname(__FILE__)); }
if( !defined('PURPLEBUG_BASE_VERSION') ) { define('PURPLEBUG_BASE_VERSION', '1.0' ); }

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_register_style( 'custom-style', PURPLEBUG_BASE.'/frontend/custom-styles.css',array(), '1', 'all' );
    $styles_settings = include( PURPLEBUG_BASE . '/frontend/frontend-style.php' );
	wp_add_inline_style( 'style', $styles_settings );
    wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
// Frontend JS
function theme_js_script() {
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/app.js');
	}
add_action('wp_enqueue_scripts', 'theme_js_script');
// Admin JS
function admin_enqueue() {
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
    wp_enqueue_script( 'awscript', get_stylesheet_directory_uri() . '/admin/js/admin.js', array('jquery'), null, false );
	wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle',get_stylesheet_directory_uri() . '/admin/js/admin.js', array( 'wp-color-picker' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'admin_enqueue' );


/*
 * Call to Admin Menus
 */
// require_once( PURPLEBUG_BASE . '/admin/includes/register-admin-menus.php' );
require_once( PURPLEBUG_BASE . '/admin/includes/registration.php' );

/*
 * Call to Page Meta boxes
 */
require_once( PURPLEBUG_BASE . '/admin/includes/register-metaboxes.php' );