<?php
/** 
 * Register Metaboxes
 * @package 	Wordpress_CustomTheme
 * @subpackage 	Wordpress_CustomTheme
 * @since 		1.0
 * @author 		
 */
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
function post_archives($where,$args){  
    $post_type  = isset($args['post_type'])  ? $args['post_type']  : 'post';  
    $where = "WHERE post_type = '$post_type' AND post_status = 'publish'";
    return $where;  
}
add_filter( 'getarchives_where','post_archives',10,2);

function register_my_menu() {
	register_nav_menu('new-menu',__( 'New Menu' ));
	}
add_action( 'init', 'register_my_menu' );
// metabox

function admin_enqueue() {
  
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
  
    wp_enqueue_script( 'awscript', get_stylesheet_directory_uri() . '/admin/js/admin.js', array('jquery'), null, false );
}
add_action( 'admin_enqueue_scripts', 'admin_enqueue' );

// carrousel image 1
function carousel_image1_save($post_id)
{
    if (array_key_exists('aw_custom_image1', $_POST)) {
        update_post_meta(
            $post_id,
            'aw_custom_image1',
            $_POST['aw_custom_image1']
        );
    }
}
add_action('save_post', 'carousel_image1_save');

function carousel_metabox1( $post_type, $post ) {
    add_meta_box(
        'aw-meta-box1',
        __( 'Custom Image' ),
        'render_aw_meta_box1',
        'page', //post types here
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'carousel_metabox1', 10, 2 );
  
function render_aw_meta_box1($post) {
    $image = get_post_meta($post->ID, 'aw_custom_image1', true);
    ?>
    <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="aw_custom_image1" id="aw_custom_image1" value="<?php echo $image; ?>" /></td>
        </tr>
    </table>
    <?php
}
// carrousel image 2
function carousel_image2_save($post_id)
{
    if (array_key_exists('aw_custom_image2', $_POST)) {
        update_post_meta(
            $post_id,
            'aw_custom_image2',
            $_POST['aw_custom_image2']
        );
    }
}
add_action('save_post', 'carousel_image2_save');

function carousel_metabox2( $post_type, $post ) {
    add_meta_box(
        'aw-meta-box2',
        __( 'Custom Image2' ),
        'render_aw_meta_box2',
        'page', //post types here
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'carousel_metabox2', 10, 2 );
  
function render_aw_meta_box2($post) {
    $image = get_post_meta($post->ID, 'aw_custom_image2', true);
    ?>
    <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button2 button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="aw_custom_image2" id="aw_custom_image2" value="<?php echo $image; ?>" /></td>
        </tr>
    </table>
    <?php
}

// carrousel image 3
function carousel_image3_save($post_id)
{
    if (array_key_exists('aw_custom_image3', $_POST)) {
        update_post_meta(
            $post_id,
            'aw_custom_image3',
            $_POST['aw_custom_image3']
        );
    }
}
add_action('save_post', 'carousel_image3_save');

function carousel_metabox3( $post_type, $post ) {
    add_meta_box(
        'aw-meta-box3',
        __( 'Custom Image3' ),
        'render_aw_meta_box3',
        'page', //post types here
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'carousel_metabox3', 10, 2 );
  
function render_aw_meta_box3($post) {
    $image = get_post_meta($post->ID, 'aw_custom_image3', true);
    ?>
    <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button3 button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="aw_custom_image3" id="aw_custom_image3" value="<?php echo $image; ?>" /></td>
        </tr>
    </table>
    <?php
}
// Single Page image
function carousel_image4_save($post_id)
{
	
		if (array_key_exists('aw_custom_image4', $_POST)) {
			update_post_meta(
				$post_id,
				'aw_custom_image4',
				$_POST['aw_custom_image4']
			);
		}
	
}
add_action('save_post', 'carousel_image4_save');

function carousel_metabox4( $post_type, $post ) {
	$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
	if($pageTemplate == 'single-page.php'){
    add_meta_box(
        'aw-meta-box4',
        __( 'Custom Image4' ),
        'render_aw_meta_box4',
        'page', //post types here
        'normal',
        'high'
    );
}
}
add_action( 'add_meta_boxes', 'carousel_metabox4', 10, 2 );
  
function render_aw_meta_box4($post) {
    $image = get_post_meta($post->ID, 'aw_custom_image4', true);
    ?>
    <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button4 button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="aw_custom_image4" id="aw_custom_image4" value="<?php echo $image; ?>" /></td>
        </tr>
    </table>
    <?php
}
// Featured Image Post
function featured_image_post($post_id)
{
	
		if (array_key_exists('aw_custom_image5', $_POST)) {
			update_post_meta(
				$post_id,
				'aw_custom_image5',
				$_POST['aw_custom_image5']
			);
		}
	
}
add_action('save_post', 'featured_image_post');

function post_feature_image( $post_type, $post ) {
	
    add_meta_box(
        'aw-meta-box5',
        __( 'Set as Feature Image' ),
        'render_aw_meta_box5',
        'post', //post types here
        'normal',
        'high'
    );

}
add_action( 'add_meta_boxes', 'post_feature_image', 10, 2 );
  
function render_aw_meta_box5($post) {
    $image = get_post_meta($post->ID, 'aw_custom_image5', true);
    ?>
    <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button5 button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="aw_custom_image5" id="aw_custom_image5" value="<?php echo $image; ?>" /></td>
        </tr>
    </table>
    <?php
}

  
