<div class="col-sm-4">
     

<div class="blog-post">


    
     <?php 
     if (has_post_thumbnail() ) {
         the_post_thumbnail('post-thumbnail', ['class' => 'img-rounded', 'title' => 'Feature image']);
     }
     ?>
     	<h3 class="blog-post-title"><?php the_title(); ?></h3>
     <div class="text-justify">
     <?php the_excerpt(); ?>
     </div>


</div><!-- /.blog-post -->
</div>