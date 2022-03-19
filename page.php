<?php
get_header(); 
$page_id = get_queried_object_id();

$page_id = get_the_ID();
$carousel_image1 = get_post_meta($page_id, 'aw_custom_image1', true);
$carousel_image2 = get_post_meta($page_id, 'aw_custom_image2', true);
$carousel_image3 = get_post_meta($page_id, 'aw_custom_image3', true);
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
    <?php
        if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <?php the_content() ?>
        <?php endwhile;
        else :
        echo '<p>There are no posts!</p>';
        endif;
        ?>
    </div>
</div>

<?php
get_footer();

