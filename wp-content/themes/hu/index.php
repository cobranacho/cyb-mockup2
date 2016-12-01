


<?php get_header(); ?>


<nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="navbar-header" id="nav-container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>                        
      </button>
      
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id="menu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">Home</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">Page 1</a></li>
        <li data-menuanchor="3rdPage"><a href="#3rdPage">Page 2</a></li>
        <li data-menuanchor="4thpage"><a href="#4thpage">Page 3</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div id="fullpage">
        
        <div class="section" id="section0">
            section 0
            <div class="container">
              <div class="row">
                  <div class="col-sm-12 col-md-6">
                      <h3>Column 1</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <h3>Column 1</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <h3>Column 1</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                  </div>
              </div>
          </div>
        </div>
        <div class="section" id="section1">
            Some section
        </div>
        <div class="section" id="section2">
            3rd section
        </div>
        <div class="section" id="section3">
            the last section
        </div>
    </div>


<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>

<?php get_footer(); ?>