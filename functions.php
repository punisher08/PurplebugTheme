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
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function theme_js_script() {
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/app.js');
	}
add_action('wp_enqueue_scripts', 'theme_js_script');

/*
 * Call to Admin Menus
 */
require_once( PURPLEBUG_BASE . '/admin/includes/register-admin-menus.php' );

/*
 * Call to Admin Meta boxes
 */
require_once( PURPLEBUG_BASE . '/admin/includes/register-metaboxes.php' );