<div class="blog-post">


    
     <?php 
     if (has_post_thumbnail() ) {
         the_post_thumbnail();
     }
     ?>
     	<h2 class="blog-post-title"><?php the_title(); ?></h2>
     <?php
     the_excerpt();
     
     ?>

</div><!-- /.blog-post -->
