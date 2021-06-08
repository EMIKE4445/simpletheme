<?php
    get_header();
?>
      
      <div class="container container-flex">
         
         <main role="main">

         <?php get_template_part('template-parts/content','article-page'); ?>

            <hr>
            <?php
                comments_template();
            ?>
            
         </main>
         
         <aside class="sidebar">
            
         <?php if(is_active_sidebar('sidebar')):?>
               <?php
                  dynamic_sidebar('sidebar');
               ?>
            <?php endif;?>
               
            </div>
            
         </aside>
      </div>

<?php
    get_footer();
?>
