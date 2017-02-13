
<?php get_header(); ?>
    <div class="jumbotron">
      <div class="container">
        <div class="text-center">
            <h1 id="slogan">
          Make a difference 
        </h1>
     <?php $link = get_permalink( 314 ); 
      $link = 'onclick="'."location.href='".$link."';".'"';
      ?>
    
        </div>
    
          
        <div class="text-center">
          <a href=<?php echo get_permalink( 314 );?> class="btn btn-info" role = "button"><strong>Volunteer</strong></a>
            <span class="glyphicon glyphicon-menu-down icon-size animated" id="click"></span>
        </div>
      </div>
    </div>
  

<div class="container main-content" id="main">
      <div class="row"> <!-- Our Story -->
        <div class="col-sm-10 col-sm-offset-1">
          <h1><strong>Our Story</strong></h1>
          
          <h3 class="text-center" id ="tagline">- RESPECT  •  CARE  •  COMPASSION -</em></h3>
          <br>
          <p class="text-justify intro">
          We believe that when you respect yourself, you have the capacity to respect others. Respect for self, environment, and community is paramount to leadership.  We belivev that each one of us must care for ourselves, our families, and our communities. As caring individuals, we accept true love and healing to experience the transformational gifts each of us are graced with.  We believe that each one of us is lifted when we approach those in our lives with an open and compassionate heart. When we move away from thinking about “I” and move towards thinking about “We”, the capacity to be truly authentic leaders is nurtured.
          <br>
          <br>
          We offer a holistic, human development approach to provide high-quality educational and occupational programs, resources, and services. This improves financial sustainability for traditionally marginalized at-promise youth, families, and the economically-distressed communities they call home.  Through the creation of an inclusive, equitable, and nurturing environment, we provide culturally relevant and rigorous instruction - all within the scope of leadership development and self-sufficiency.
          </p>
        </div>
     </div> <!-- End of our story -->
     
   
</div><!---#main -->

      <div class="container-fluid full programs white-font" id="pg"> <!-- programs -->
        <div class="container">
          <div class="row text-center lower">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
              <h1><strong>Our Programs</strong></h1>
              <br>
              <p class="text-center intro">
                Our comprehensive program offers training, classes, service opportunities, and resources to develop young leaders in the community. 
             </p>
            </div>  
          </div>
          
          <div class="row">
            <div class="col-sm-4 text-center">
              <div class="action" id="diploma">
                <div class="cc btn" id="diploma-box" data-toggle="collapse" href="#diploma-text" >
               
                  <i class="fa fa-graduation-cap fa-5x ico" aria-hidden="true"></i>
                </div>
              </div>

              <h3 class="prg">High School Diploma</h3>
              
              <div id="diploma-text" class="collapse text-left bigger-text">
                Through our partnership with YouthBuild Charter School of CA, young people are eligible to participate in WASC accredited education with skilled teachers. Our classroom based curriculum offers classes from 9th through 12th grade and utilizes project-based learning to deliver socially relevant, rigorous education.
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="action" id="college">
                <div class="cc btn" id="college-box" data-toggle="collapse" href="#college-text" >
                  <i class="fa fa-university fa-5x ico" aria-hidden="true"></i>
                </div>
              </div>
                <h3 class="prg">College Readiness</h3>
                
              <div id="college-text" class="collapse text-left bigger-text">
            Financial literacy, interviewing, resume writing and dressing for success are all discussed during ongoing trainings and workshops designed to prepare for the “What After”. Post-secondary transition services includes assistance applying for college and financial aid. Members are eligible for concurrent enrollment in community college.
              </div>
            </div>           
            <div class="col-sm-4 text-center">
             <div class="action" id="work">
               <div class="cc btn" id="work-box" data-toggle="collapse" href="#work-text"  >
                <i class="fa fa-wrench fa-5x ico" aria-hidden="true"></i>
              </div>
            </div>
            <h3 class="prg">Occupational Training</h3>
              <div id="work-text" class="collapse text-left bigger-text">
            Compton YouthBuild members may choose between two occupational tracks, Construction Trades and Culinary/Hospitality. Each track includes courses towards the high school diploma program , as well as workshops, specialized training, certifications and exclusive opportunities from our partners. 
            </div>
          </div>
        </div>
        </div>
        

       
       
         
      </div> <!-- programs -->
        
        
        
 <div class="container">
   <div class="row text-center lower">
           <h1><Strong>Success Stories</Strong></h1>
   </div>
          
    
          
          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
          
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Alumni Testimonial</h4>
                </div>
                <div class="modal-body embed-container">
                  <iframe id="video_src" src='' frameborder='0' allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                  <button onclick="resetVideo()" type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
              </div>
          
            </div>
          </div>

          <br>
          <div class="row success">
            <div class="col-sm-4 text-center">
              <a data-toggle="modal" data-target="#myModal">
                <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/t1.jpg' class='img-circle testmonial-img' id="testmonial1" /></a>
              <p class="stories text-justify">
                Singulis philosophia in his, sit vero mucius corpora te, quo aeterno moderatius te.  Te enim nobis blandit qui, vix putant detraxit ex, qui ex liberavisse accommodare.  Vim at invidunt consulatu, reque quidam obilque qui ut.  Per quodsi legimus percipitur cu.  Vel an indidunt euripidis...
              </p>
            </div>
            <div class="col-sm-4 text-center">
              <a data-toggle="modal" data-target="#myModal">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/t2.jpg" class="img-circle testmonial-img" id="testmonial2" /></a>
              <p class="stories text-justify">
                Singulis philosophia in his, sit vero mucius corpora te, quo aeterno moderatius te.  Te enim nobis blandit qui, vix putant detraxit ex, qui ex liberavisse accommodare.  Vim at invidunt consulatu, reque quidam obilque qui ut.  Per quodsi legimus percipitur cu.  Vel an indidunt euripidis...
         
              </p>
            </div>
            <div class="col-sm-4 text-center">
              <a data-toggle="modal" data-target="#myModal">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/t3.jpg" class="img-circle testmonial-img" id="testmonial3" /></a>
              <p class="stories text-justify">
                Singulis philosophia in his, sit vero mucius corpora te, quo aeterno moderatius te.  Te enim nobis blandit qui, vix putant detraxit ex, qui ex liberavisse accommodare.  Vim at invidunt consulatu, reque quidam obilque qui ut.  Per quodsi legimus percipitur cu.  Vel an indidunt euripidis...
         
              </p>
            </div>
           </div>
          
        </div>



<?php get_footer(); ?>