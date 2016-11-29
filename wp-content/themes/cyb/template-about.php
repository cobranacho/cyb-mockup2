<?php /* Template name: About us */ ?>


<?php get_header(); ?>

<div class="jumbotron">
    He
</div>

<section id="content" role = "main" class = "col-sm-8">
    
   
    
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'entry' ); ?>
    

    
    <?php endwhile; endif; ?>
    

</section>


<?php get_footer(); ?>