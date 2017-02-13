<div class="profiles">


    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    
       <?php the_post_thumbnail(  'thumbnail', array( 'class' => 'img-circle' ) ); ?>
    </a>
    <div class="de">
            
    <?php the_excerpt(); ?>
        
    </div>



</div>
