<?php
    // pagination 
    global $wpdb;
	$get_posts = $wpdb->prefix.'posts';
	$customPagHTML     = "";
	$query             = "SELECT * FROM $get_posts WHERE post_type = 'post' AND post_status = 'publish'";
	$total_query     = $wpdb->get_results($query);
	$total = count($total_query);
    $purplebug_posts_per_page = get_option( 'purplebug_posts_per_page', '10' );
	$items_per_page = $purplebug_posts_per_page;
	$page             = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : 1;
	$offset         = ( $page * $items_per_page ) - $items_per_page;
	$totalPage         = ceil($total / $items_per_page);

	if($totalPage > 1)
	{
		// $customPagHTML_count     =  '<div class="quotes_entries_count"><span>Page '.$page.' of '.$totalPage.'</span> </div>';
		$customPagHTML = 
		    '<div class="quotes_entries_pager">'
			.paginate_links( array(
			'base' => add_query_arg( 'cpage', '%#%' ),
			'format' => '',
			'prev_text' => __('&laquo;'),
			'next_text' => __('&raquo;'),
			'total' => $totalPage,
			'current' => $page
			)).
			'</div>'
			;
	}
	
	$posts = $wpdb->get_results( $query  . " ORDER BY ID ASC LIMIT $offset, $items_per_page" );
    // echo  '<pre>';
    // print_r($posts);
    // echo  '</pre>';
    // die();
    foreach($posts as $post){
        $post->ID;
        $featured_image = get_post_meta($post->ID,'aw_custom_image5',true);
    ?>
        <div class="img-content my-3">
             <h3 class="card-title"><?=$post->post_title;?></h3>
            <hr class="divider-md divider">
                <div class="row">
                    <div class="col-md-7">
                        <img class="single-page-ida2 my-3" src="<?php echo $featured_image;?>">
                    </div>
                    <div class="col-md-5 post-description">
                        <p class=""><?=$post->post_content;?></p>
                    </div>
                </div>
            <?php
                $category_detail = get_the_category($result->ID);//$post->ID
                foreach($category_detail as $cd){
                 echo '<button class="category-btn mx-1">'.$cd->cat_name.'</button>';
                 }
            ?>         
        </div>
    <?php
    }
    // echo $customPagHTML_count;
    echo $customPagHTML;
?>