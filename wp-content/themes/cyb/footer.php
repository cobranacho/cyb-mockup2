


    <footer class="cyb-footer">
      <div class="container">
        <div class = "row" id ="footer-content">
          <div class="col-xs-6 col-sm-4">
            <div class="newsletter">
            <h3>Newsletter</h3>
            <form>
              <input type="text" name="email" id="email-input" placeholder="Email" align="left" />
              <p>
                <button type="button" class="btn btn-info btn-sm custom-btn"><strong>Submit</strong></button>
              </p>
            </form>
            </div>
            
          </div>
          <div class="col-xs-6 col-sm-4 contact-us">
            <h3>Contact Us</h3>
         
          
              477 E. Compton Blvd.
              </br>
              Compton CA, 90221
              </br></br>
              (310) 631-2000
              </br>(310) 631-2036
      
          </div>
          <div class="col-xs-12 col-sm-4 follow-us">
            <h3>Follow Us</h3>
            <a href="#">
              <img src="<?php bloginfo('template_directory'); ?>/images/social1.png" alt="Social logo">
            </a>
            <a href="#">
              <img src="<?php bloginfo('template_directory'); ?>/images/social2.png" alt="Social logo">
            </a>
            <a href="#">
              <img src="<?php bloginfo('template_directory'); ?>/images/social3.png" alt="Social logo">
            </a>
            <a href="#">
              <img src="<?php bloginfo('template_directory'); ?>/images/social4.png" alt="Social logo">
            </a>
          </div>
        </div>
      </div>
 
    </footer>
    
    <!--Call your modal-->
    <div id="animatedModal">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
   
        <div class="modal-content container">
                  <!--Your modal content goes here-->
           <div class="row">
            <div class="close-animatedModal"> 
                <img id="close-modal" src="<?php bloginfo('template_directory'); ?>/images/closebt.svg">
            </div>
            
            <div class="text-center">
              <h2 id="modal-heading"><strong>COMPTON YOUTHBUILD</strong></h2>
            </div>
       
           <div id="member">
              <h4>
                <em>How do you become a member of Compton YouthBuild?</em>
            </h4>
            
              <p>
                <br>
                  <h5>To begin the member application process:</h5>
                 
                  <p>
                    <br>
          1.     Attend a mandatory information meeting usually held on Tuesdays at 4:00 pm                  
                  </p>
        
                  <p>
                    <br>
        2.     Call 310-631-2000 to confirm time and date                 
                  </p>
                  
                  <p>
                    <br>
        3.     Complete an application packet and submit all required documentation                 
                  </p>
        
                  <p>
                    <br>
        4.     Interview with Compton YouthBuild staff               
                  </p>
                   <p>
                    <br>
         5.     Complete Mental Toughness Orientation (MTO)              
                  </p>
                                   
                  <p>
                    <br>
        6.     Final interview with a Director
                  
                  </p>
                
                <p>
                <br>  
          Once you complete the application process and have been <strong>accepted</strong> into Compton YouthBuild (CYB) as a member, you may enroll in the high school diploma program with our partner, YouthBuild Charter School of CA (YCSC).  Additionally, you may be co-enrolled in other community partner programs for additional benefits.
        <p>
          <br>
                  Compton YouthBuild in partnership with YouthBuild Charter School of CA does not charge for their educational services.  Compton YouthBuild has a required uniform policy, which involves a minimal cost.
    
        </p>
                 
                </p>
                
       
        </p>
             
             
           </div>



       
    </div> 
        </div>
    </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script src="<?php bloginfo('template_directory');?>/scripts/animatedModal.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/scripts/cyb.js"></script>
        
        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/node_modules/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <!-- Add fancyBox -->
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/node_modules/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/node_modules/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/node_modules/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        
        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/node_modules/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        
        <script type="text/javascript">
        	$(document).ready(function() {
        		$(".fancybox").fancybox();
        	});
        </script>
        
        
        <script type="text/javascript">
          $(document).ready(function() {
          	$(".fancybox-thumb").fancybox({
          		prevEffect	: 'none',
          		nextEffect	: 'none',
          		helpers	: {
          			title	: {
          				type: 'outside'
          			},
          			thumbs	: {
          				width	: 50,
          				height	: 50
          			}
          		}
          	});
          });
          </script>
    <?php wp_footer(); ?> 


  </body>
</html>