<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?></title>

    <script src="https://use.fontawesome.com/e1b83ebed1.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="top-header row">
          <div class="container d-flex top-bar-link">
           <div class="col-md-7 d-flex align-items-center text-white header">
                <button>Headline</button>
                <i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i>
                <p class="mx-3">NON SIMELIQUE TEMPORA</p>
                <p class="mx-3 d-sm-none">VERITATIS NATUS VOLUPTATEM</p>
           </div>
           <div class="col-lg-5 d-flex align-items-center text-white">
                <div class="add-to-menu-1"><?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?></div>
           </div>
        </div>
        </div>
       <div class="second-header container">
            <div class="col-md-6">
               <h1 class="blog-info"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
               <p><?php bloginfo( 'description' ); ?></p>
            </div>
            <div class="col-md-6">
               <div class="add-to-menu-2"><?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?></div>
               
            </div>
       </div>
    </header> 
    
