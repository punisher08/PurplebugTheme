<?php
/**
 * Template Name: Page Template
 */
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
    <div class="page-element-id-a1">
            <h3>Privacy Policy</h3>
            <hr class="divider-md divider">
            <div class="dynnamic-page-content-a1">
                <h3 class="sb-text">Who are we?</h3>
                <p><span><strong>Suggested text: </strong></span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fugiat.</p>
            </div>
            <div class="dynnamic-page-content-a1">
                <h3 class="sb-text">Comments</h3>
                <p><span><strong>Suggested text: </strong></span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique animi voluptatem provident saepe quisquam mollitia, veniam beatae in minus maxime!</p>
            </div>
            <div class="dynnamic-page-content-a1">
                <h3 class="sb-text">Media</h3>
                <p><span><strong>Suggested text: </strong></span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias obcaecati facere a amet quisquam accusamus quia officia nulla? Facilis aliquid reiciendis earum possimus repudiandae magnam architecto eius voluptates expedita.</p>
            </div>
            <div class="dynnamic-page-content-a1">
                <h3 class="sb-text">Cookies</h3>
                <p><span><strong>Suggested text: </strong></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus doloremque quod magnam ad ea mollitia, ipsum non minus? Quis nihil magni, necessitatibus modi quos optio blanditiis pariatur similique earum maiores vero fuga voluptatem ea quidem obcaecati aliquam reprehenderit illo voluptas quaerat. Animi totam beatae excepturi!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reiciendis eligendi quod recusandae eaque, hic fugit iusto consequuntur nemo asperiores esse, provident numquam cum quia molestiae, tempora repudiandae iste architecto.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima tempore quod ratione magnam commodi voluptate?</p>
            </div>
            <div class="dynnamic-page-content-a1">
                <h3 class="sb-text">Embedded Contents from other websites</h3>
                <p><span><strong>Suggested text: </strong></span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias obcaecati facere a amet quisquam accusamus quia officia nulla? Facilis aliquid reiciendis earum possimus repudiandae magnam architecto eius voluptates expedita.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam illo ipsum molestias quae eligendi!</p>
            </div>
            <div class="dynnamic-page-content-a1">
                <h3 class="sb-text">Who we share your data with</h3>
                <p><span><strong>Suggested text: </strong></span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias obcaecati facere a amet quisquam accusamus quia officia nulla? Facilis aliquid reiciendis earum possimus repudiandae magnam architecto eius voluptates expedita.</p>
            </div>
            <div class="dynnamic-page-content-a1">
                <h3 class="sb-text">How long we retain your data</h3>
                <p><span><strong>Suggested text: </strong></span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias obcaecati facere a amet quisquam accusamus quia officia nulla? Facilis aliquid reiciendis earum possimus repudiandae magnam architecto eius voluptates expedita.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta harum provident fuga molestiae. Impedit nam harum fugiat soluta.</p>
            </div>
            <div class="dynnamic-page-content-a1">
                <h3 class="sb-text">What rights you have over your data</h3>
                <p><span><strong>Suggested text: </strong></span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias obcaecati facere a amet quisquam accusamus quia officia nulla? Facilis aliquid reiciendis earum possimus repudiandae magnam architecto eius voluptates expedita.</p>
            </div>
            <div class="dynnamic-page-content-a1">
                <h3 class="sb-text">Where we send your data</h3>
                <p><span><strong>Suggested text: </strong></span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias obcaecati facere a amet quisquam accusamus quia officia nulla? Facilis aliquid reiciendis earum possimus repudiandae magnam architecto eius voluptates expedita.</p>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();

