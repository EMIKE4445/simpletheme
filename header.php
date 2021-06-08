<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
      <title><?php bloginfo('name');?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
      </title>
     
   </head>
   <body>
      
      <header>
         <div class="container container-nav">
            <div class="site-title">
               <h1><a href = "<?php echo home_url();?>" class = "navbar-brand"><?php bloginfo('name'); ?></a></h1>
               <p class="subtitle"><?php  bloginfo('description'); ?></p>
            </div>
            <nav>
        

                  <?php
                    wp_nav_menu(
                        array(
                        'menu' =>'primary',
                        'container'=>'',
                        'theme_location'=> 'primary',
                        'items_wrap'=> '<ul class="navbar-nav" > %3$s</ul>'
                    ));
                  
                  
                  ?>
               
            </nav>
         </div>
      </header>