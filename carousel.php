<?php
function aw_custom_meta_boxes( $post_type, $post ) {
    add_meta_box(
        'carousel_image1',
        __( 'Caorusel Image 1' ),
        'render_carousel1',
        array('page'), //post types here
        'normal',
        'high'
    );
    add_meta_box(
        'carousel_image2',
        __( 'Caorusel Image 2' ),
        'render_carousel2',
        array('page'), //post types here
        'normal',
        'high'
    );
    add_meta_box(
        'carousel_image3',
        __( 'Caorusel Image 3' ),
        'render_carousel3',
        array('page'), //post types here
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'aw_custom_meta_boxes', 10, 2 );
function render_carousel1($post) {
    $image = get_post_meta($post->ID, 'carousel_image1', true);
    ?>
    <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="carousel_image1" id="carousel_image1" value="<?php echo $image; ?>" /></td>
        </tr>
    </table>
    <?php
}
function render_carousel2($post) {
    $image = get_post_meta($post->ID, 'carousel_image2', true);
    ?>
    <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="carousel_image2" id="carousel_image2" value="<?php echo $image; ?>" /></td>
        </tr>
    </table>
    <?php
}
function render_carousel3($post) {
    $image = get_post_meta($post->ID, 'carousel_image3', true);
    ?>
    <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="carousel_image3" id="carousel_image3" value="<?php echo $image; ?>" /></td>
        </tr>
    </table>
    <?php
}