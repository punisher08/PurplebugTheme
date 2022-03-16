<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function purplebug_metaboxes() {
	add_meta_box(
		'purplebug_page_contents',
		'Data Settings',
		'purplebug_html',
		'page',
		'advanced',
		'default'
	);
}
add_action( 'add_meta_boxes', 'purplebug_metaboxes' );


function purplebug_html( $post) { ?>
	<div id="page-contents">
		
	</div>
<?php
}