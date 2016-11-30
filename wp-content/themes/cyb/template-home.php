<?php /* Template name: Home */ ?>


<?php get_header(); ?>



hhhh
<div class="jumbotron">
     <img id="home-image" src="<?php bloginfo('template_directory'); ?>/images/home-page.png" alt="CYB Home Page" width="30%">
</div>

<section id="content" role = "main" class = "col-sm-8">
    
   
    
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'entry' ); ?>
    

    
    <?php endwhile; endif; ?>
    

</section>


<?php get_footer(); ?>