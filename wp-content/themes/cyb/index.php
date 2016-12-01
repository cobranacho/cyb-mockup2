<?php get_header(); ?>


<div class="container">
      <div class="row">
    
            
			  <?php
			    $count = 0;
    			if ( have_posts() ) : while ( have_posts() ) : the_post();
      	    if ($count!=0 && $count % 3 == 0) {
      	      echo "<div class='row'>";
      	    }
      	    $count++;
    				get_template_part( 'content', get_post_format() );
            
            if ($count!=0 && $count % 3 == 0) {
      	      echo "</div>";
      	    }
    			endwhile; endif;
    			
            if ($count % 3 != 0) {
      	      echo "</div>";
      	    }
		  	?>
                
        

      



    </div><!-- /.container -->

 
<?php get_footer(); ?>

