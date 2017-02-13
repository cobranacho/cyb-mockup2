

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>

            

        <div class="text-center">
            <?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?>
            <?php the_title(); ?>
            <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
        </div>
        <div class="text-left">
            <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>          
        </div>

    </header>

            <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

    </article>

