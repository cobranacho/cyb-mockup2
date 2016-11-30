<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
         <title>
          <?php echo get_bloginfo( 'name'); ?>
        </title>
    
        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head();?>
     </head>

    <body <?php body_class(); ?>>
        
    <div id="nav" class="header-band">
    <img id="logo-main" src="<?php bloginfo('template_directory'); ?>/images/compton_youth_main_logo.png" alt="CYB logo">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        </div>
        
        <div class = "collapse navbar-collapse">
	
        <ul class="nav navbar-nav navbar-left">
            <?php wp_list_pages( '&title_li='); ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><button type="button" class="btn btn-info navbar-btn"><strong>Enroll</strong></button></li>
          <li><button type="button" class="btn btn-info navbar-btn"><strong>Contribute </strong></button></li>
        </ul>
      </div>



        </div><!-- /.container-fluid -->
      </nav>
    </div><!-- #nav -->
        

<div id="container">