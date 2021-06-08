<?php
    get_header();
?>
      
      <div class="container container-flex">
         
         <main role="main">
         <h2>Recent Blog posts</h2>
         <?php if(have_posts()) :?>
            <?php while(have_posts()) : the_post() ;?>
               <?php get_template_part('template-parts/content','article'); ?>
            <?php endwhile;?>
         <?php else:?>
            <p>no blog posts found</p>
         <?php endif;?>
   
            
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
