<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
         <title>
          <?php echo get_bloginfo( 'name'); ?>
        </title>
        
       <link href="https://fonts.googleapis.com/css?family=Droid+Sans|family=Lato:700i|Varela+Round" rel="stylesheet">   
        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate.css" />     
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/node_modules/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/node_modules/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />

        
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/node_modules/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <?php wp_head();?>
     </head>

    <body <?php body_class(); ?>>
        
    <div id="nav">
      <div class="header-band">
            <img id="logo-main" src="<?php bloginfo('template_directory'); ?>/images/compton_youth_main_logo.png" alt="CYB logo">
      </div>

      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
        
            <div class = "collapse navbar-collapse custom-collapse">
              <ul class="nav navbar-nav navbar-left">
                <?php wp_list_pages( array('title_li' => '', 'exclude' => '314')); ?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                             <a class="btn btn-info navbar-btn" id="demo01"  role="button" href="#animatedModal"><strong>Enroll</strong></a>
                 <?php $link = get_permalink( 314 ); 
                       $link = 'onclick="'."location.href='".$link."';".'"';
                       $link1 = get_permalink( 15 ); 
                       $link1 = 'onclick="'."location.href='".$link1."';".'"';
                  ?>
   
                <li>
                  <button class="btn btn-info navbar-btn" <?php echo $link?>><strong>Contribute</strong></button>
                </li>
              
              </ul>
            </div><!-- /.collapse --> 
        </div><!-- /.container -->
      </nav>
  </div><!--/ #nav -->
        
