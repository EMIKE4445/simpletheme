<article class="article-recent">
   <div class="article-recent-main">
      <h2 class="article-title"><?php the_title();?></h2>
      <p class="article-body"><?php the_excerpt(); ?></p>
      <a href="<?php  echo the_permalink(); ?>" class="article-read-more">CONTINUE READING</a>
   </div>
   
   <div class="article-recent-secondary">
   <?php if(has_post_thumbnail($post->ID)):?>
         <?php $url= wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
         <img src="<?php echo $url ?>" alt="" class="article-image">
         
      <?php endif;?>
      <p class="article-info"><?php the_time('F j, Y g:i a');  ?>| <?php comments_number(); ?></p>
   </div>
</article>
<hr>