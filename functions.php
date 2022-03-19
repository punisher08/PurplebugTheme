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


/*Call to registration*/
require_once( PURPLEBUG_BASE . '/admin/includes/registration.php' );

/*Call to Page Meta boxes*/
require_once( PURPLEBUG_BASE . '/admin/includes/register-metaboxes.php' );

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="styled-button"';
}
   
function the_breadcrumb() {
    $separator = ' >> ';
    global $post;
    if (!is_front_page()) {
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $separator;
        if (is_single()) {
            echo $separator;
            echo '<div class="active-page">'.the_title();
        }
        if (is_page()) {
            echo '<div class="active-page">'.the_title();
        }
        if (is_home()){
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_post($page_for_posts_id);
                setup_postdata($post);
                echo '<div class="active-page">'.the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}
?>