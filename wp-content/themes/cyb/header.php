<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
      <?php echo get_bloginfo( 'name'); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body>
    
            
<div id="nav">
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
          <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" /></a>
      </div>
      
         
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	
      
      <ul class="nav navbar-nav">
        <?php wp_list_pages( '&title_li='); ?>
        
    <li><button class="btn btn-danger navbar-btn">Button</button></li>
      </ul>

    </div><!-- /.container-fluid -->
  </nav>
</div><!-- #nav -->

</div>
    

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">
          <a href="<?php bloginfo( 'wpurl' );?>">
             <?php echo get_bloginfo( 'name' );?>
          </a>
        </h1>
        <p class="lead blog-description">
          <?php echo get_bloginfo( 'description' ); ?>
        </p>
        
        
        
        
      </div>