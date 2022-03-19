<?php 
    $paged = get_query_var('paged')? get_query_var('paged') : 1;
    $args = [
            'post_type' => 'post',
            'posts_per_page' => 1, 
            'paged' => $paged,
    ];
    $wp_query = new WP_Query($args);

    while ( have_posts() ) : the_post(); 
    $post_id = get_the_ID();
    $featured_image = get_post_meta($post_id,'aw_custom_image5',true);
    ?>
        <div class="img-content my-3">
        <h3 class="card-title"><?=$post->post_title;?></h3>
        <hr class="divider-md">
        <img class="single-page-ida2 my-3" src="<?php echo $featured_image;?>">
        <?php
        $category_detail=get_the_category($post_id);//$post->ID
        foreach($category_detail as $cd){
            echo '<button class="category-btn mx-1">'.$cd->cat_name.'</button>';
        }
        ?>
        </div>
    <?php endwhile; ?>

    <!-- then the pagination links -->
    <?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
    <?php previous_posts_link( 'Newer posts &rarr;' ); ?>