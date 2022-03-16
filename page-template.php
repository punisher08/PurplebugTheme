<?php
/**
 * Template Name: Page Template
 */
get_header(); ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri().'/images/carousel2.jpg'; ?>">
    </div>
    <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri().'/images/carousel1.jpg'; ?>">
    </div>
    <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri().'/images/carousel3.jpg'; ?>">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?
// get_footer();

?>
