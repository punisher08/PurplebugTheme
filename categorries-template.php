<?php
/**
 * Template Name: Category Template
 */
get_header(); 
$page_id = get_the_ID();
$carousel_image1 = get_post_meta($page_id, 'aw_custom_image1', true);
$carousel_image2 = get_post_meta($page_id, 'aw_custom_image2', true);
$carousel_image3 = get_post_meta($page_id, 'aw_custom_image3', true);
$carousel_image4 = get_post_meta($page_id, 'aw_custom_image4', true);

?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?php echo $carousel_image1;?>">
    </div>
    <div class="carousel-item">
        <img src="<?php echo $carousel_image2;?>">
    </div>
    <div class="carousel-item">
        <img src="<?php echo $carousel_image3;?>">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>
<!--  -->
<div class="main-content mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-5 card">
            <?php 
                $paged = get_query_var('paged')? get_query_var('paged') : 1;
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 10, 
                    'paged' => $paged,
                ];
                $wp_query = new WP_Query($args);

                while ( have_posts() ) : the_post(); 
                $post_id = get_the_ID();
                $featured_image = get_post_meta($post_id,'aw_custom_image5',true);
                ?>
                    <div class="img-content">
                        <h3><?=$post->post_title;?></h3>
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
                
                
            </div>
            <div class="col-md-7 d-flex">
                <div class="col-md-6">
                    <div class="search-form-holder mb-3">
                        <?php  get_search_form(); ?>
                    </div>
                    <div class="card">
                        <div class="card-title pt-2  blue" mt-4>Recent Posts</div>
                        <hr class="blue-divider">
                        <?php
                        // $posts = wp_get_recent_posts(); 
                        $posts = wp_get_recent_posts(); 
                        echo '<ul class="recent-post-card">';
                        foreach($posts as $recent_post){
                            echo '<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><h3 class="px-3">'.$recent_post['post_title'].'</h3></li>';  
                        }
                        echo '</ul>';
                        ?>
                    </div>
                    <div class="card mt-2">
                        <div class="card-title pt-2 blue">Recent Comments</div>
                        <hr class="blue-divider">
                        <?php
                        // $posts = wp_get_recent_posts(); 
                        $comments = get_comments(); 
                        echo '<ul class="recent-post-card">';
                        // print_r($comments);
                        foreach($comments as $comment){
                            $output = substr($comment->comment_author, 0, 100);
                            echo '<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><p class="px-3">'.$output.'</p></li>';  
                        }
                        echo '</ul>';
                        ?>
                    </div>
                    <div class="card mt-2 calendar" style="padding:10px !important;">
                    <?php get_calendar() ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-title pt-2 red">Archives</div>
                        <hr class="red-divider">
                            <?php
                           $args = array(
                            'post_type'    => 'page',
                            'type'         => 'monthly',
                            'echo'         => 0
                        );
                        echo '<ul class="archives-page">'.wp_get_archives($args).'</ul>';
                            ?>
                    </div>
                    <div class="card mt-2">
                        <div class="card-title pt-2 red">Categories</div>
                        <hr class="red-divider">
                            <?php
                                $categories = get_categories(); 
                                // print_r($categories);
                                echo '<ul class="custom_categories_widget">';
                                foreach($categories as $category){
                                    echo '<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><p class="px-3"><a href="'.get_term_link($category->term_id).'">'.$category->cat_name.'</a></p></li>';  
                                }
                                echo '</ul>';
                            ?>
                    </div>
                    <div class="card mt-2">
                        <div class="card-title pt-2 red">Meta</div>
                        <hr class="red-divider">
                        <?php 
                            echo '<ul class="custom_categories_widget">';
                            echo '<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><p class="px-3"><a href="">COMMENTS FEED</a></p></li>';  
                            echo '<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><p class="px-3"><a href="">WORDPRESS.ORG</a></p></li>';  
                            echo '</ul>';
                            ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>


