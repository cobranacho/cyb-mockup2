<?php /* Template name: Gallery */ ?>


<?php get_header(); ?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pics/carousel0.jpg">
      </div>
  
      <div class="item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pics/carousel1.jpg">
      </div>
  
      <div class="item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pics/carousel2.jpg">
      </div>
  
      <div class="item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pics/carousel3.jpg">
      </div>
      
      <div class="item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pics/carousel4.jpg">
      </div>
  
      <div class="item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pics/carousel5.jpg">
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">COMPTON YOUTHBUILD</a></li>
    <li><a data-toggle="tab" href="#menu1">GRADUATION CEREMONY</a></li>
    <li><a data-toggle="tab" href="#menu2">COMMUNITY SERVICE</a></li>
    <li><a data-toggle="tab" href="#menu3">SENIOR PORTRAITS</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="row">
            <section id="photo-content" role = "main" class = "col-xs-12">
                <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'gallery-entry' ); ?> 
                <?php endwhile; endif; ?>
            </section>
        </div>
    </div>
    
    <div id="menu1" class="tab-pane fade">
      <div class ="container">
        <div class="row">
            <section id="photo-content" role = "main">
                <?php echo display_images("grad", 24);  ?> 
            </section>
        </div>
      </div>
    </div>
    
    <div id="menu2" class="tab-pane fade">
      <div class ="container">
        <div class="row">
            <section id="photo-content" role = "main">
                <?php echo display_images("commute", 12);  ?> 
            </section>
        </div>
      </div>
    </div>
    
    <div id="menu3" class="tab-pane fade">
      <div class ="container">
        <div class="row">
            <section id="photo-content" role = "main">
                <?php echo display_images("sen", 24);  ?> 
            </section>
        </div>
      </div>
    </div>
  </div>





<?php get_footer(); ?>