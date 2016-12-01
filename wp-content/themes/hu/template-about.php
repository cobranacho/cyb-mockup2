<?php /* Template name: About us */ ?>


<?php get_header(); ?>

<section id="content" role = "main" class = "col-sm-8">
    
    <h1>About Us Page</h1>
    
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'entry' ); ?>
    
    <?php comments_template(); ?>
    
    <?php endwhile; endif; ?>
    


    <?php get_template_part( 'nav', 'below' ); ?>
</section>

<section class="col-sm-4">
    <?php get_sidebar(); ?>
    
</section>

<?php get_footer(); ?>