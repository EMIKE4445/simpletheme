<div class="post-content">
                <div class="post-header">
                <?php $url= wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
                <img src="<?php echo $url ?>" alt="" class="article-image img">
                <h2 class="article-title"><?php the_title();?></h2> 
                <p class="article-info"><?php the_time('F j, Y g:i a');  ?>| <?php comments_number(); ?></p>
                </div>

                <div class="post-body">
                <p class="article-body"><?php the_content(); ?></p>
                </div>

            </div>