<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
        <?php wp_head(); ?>
        
     </head>

    <body <?php body_class(); ?>>
        
<div id="nav">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" /></a>
      </div>
 
 
    <?php
    if (has_nav_menu('main-menu')) :
       wp_nav_menu([
          'theme_location' => 'main-menu',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'navbar-collapse collapse',
          'menu_class'        => 'nav navbar-nav'
       ]);
    endif;
    ?>
    </div><!-- /.container-fluid -->
  </nav>
</div><!-- #nav -->
        
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner">
            
            <section id="branding">
                <div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
                <div id="site-description"><?php bloginfo( 'description' ); ?></div>
            </section>
            
            <nav id="menu" role="navigation">
                <div id="search">
                    <?php get_search_form(); ?>
                </div>
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        </header>
<div id="container">