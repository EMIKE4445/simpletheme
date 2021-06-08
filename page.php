<?php
    get_header();
?>


    <!-- end of header -->
   <div class="main-blog-container">
     <div class="main-blog-header">
       <div class="title"><h2><?php the_title();?></h2></div>
     </div>

   
    <div class="blog-post content">
      <?php the_content(); ?>
    </div>
   
  <hr>



</div>
 

    <!-- footer -->
<?php
    get_footer();
?>