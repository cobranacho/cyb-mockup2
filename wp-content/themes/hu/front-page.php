
<?php get_header(); ?>

          
<nav class="navbar navbar-inverse navbar-fixed-bottom" id="main-nav">
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
       
            <div class="container">
              <div class="row">
                <div class="center">Welcome to the jungle</div>
             <svg width="140" height="140">
              <circle cx="70" cy="70" r="60" fill="transparent" stroke="#fff" stroke-width = "4px" stroke-opacity="0.7" />
            </svg>

              </div>
              
          </div>
          
                    <div class="item animated bounceInDown">
                        3rd section
          </div>
          
        </div>
        <div class="section" id="section1">
        <div class="hexagon" id="move">
          <div class="hexTop"></div>
          <div class="hexBottom"></div>
        </div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>                        
      </button>
        </div>
        <div class="section" id="section2">
          <div class="item animated bounceInDown">
                        3rd section
          </div>

        </div>
        <div class="section" id="section3">
            the last section
            <i class="fa fa-camera-retro fa-5x"></i>

        </div>
    </div>

<?php get_footer(); ?>