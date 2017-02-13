<div class="profile-content">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array( 'class' => 'img-circle' ) ); } ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
        <h2 class="entry-title">
            <?php the_title(); ?>
        </h2>
        <div class="text-justify intro">
            <?php the_content(); ?>
        </div>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
        </div>
    </div>


</div>
