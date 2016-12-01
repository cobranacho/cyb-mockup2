<div class="col-sm-4">
     

<div class="blog-post">


    
     <?php 
     if (has_post_thumbnail() ) {
         the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']);
     }
     ?>
     	<h2 class="blog-post-title"><?php the_title(); ?></h2>
     <?php
     the_excerpt();
     
     ?>

</div><!-- /.blog-post -->
</div>