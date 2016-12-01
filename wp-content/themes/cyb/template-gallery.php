<?php /* Template name: Gallery */ ?>


<?php get_header(); ?>

<div class="jumbotron">
    News & Announcements
</div>

<div class="container-fluid news-content">
    <div class="row">

    <div class="col-sm-12">
 

    </div>

    </div>
    <div class="row">
        <section id="content" role = "main" class = "col-sm-8">
    
    <h1>About Us Page</h1>
    
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'entry' ); ?>
    
    <?php comments_template(); ?>
    
    <?php endwhile; endif; ?>
    


    <?php get_template_part( 'nav', 'below' ); ?>
</section>

    </div>
    
</div>


<?php get_footer(); ?>