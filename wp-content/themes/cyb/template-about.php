<?php /* Template name: About us */ ?>


<?php get_header(); ?>

    <div class="container-fluid full">

    <div class="about-us-banner">
        <h1 id="about-us" class="text-center">
          <span class="white-font slo">About Us</span> 
        </h1>


        <div class="text-center">
            <span class="glyphicon glyphicon-menu-down icon-size lower animated slo" id="click"></span>
        </div>
    </div>
            
    </div>
     <div id="main">
         
  
        <div class="container-fluid">
            <div class="row" id="about-content">
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                    </br>
                    <h1 class="text-center">Our Mission</h1>
                    <p>
                        </br>

                        The mission of Compton YouthBuild (CYB) is to provide rigorous educational and vocational opportunities for at-promise people ages 16-24 who are invested in creating a sustainable future for themselves, their families and communities. As an affiliate of YouthBuild USA, Compton YouthBuild is sponsored and operated by EntreNous Youth Empowerment Services Inc., a 501(c) 3 non-profit organization. Donations are welcomed and tax deductible to the full extent of the law. 
                        <p>
                         <br/>
                             Our program provides opportunities in Community Advocacy/Leadership Development, Career Pathways, Counseling, Construction/Vocational training and the ability to obtain a High School Diploma through our educational partnership with YouthBuild Charter School of California (YCSC). 
                        </p>
                        <br>
      
          
                        <p>
                         <em>Our three program values are:</em>
                         </p>
                            <ul>
                                <li>
                                        <em>Respect</em> – We develop an understanding of one another by respecting each other’s beliefs, culture and space.
                                </li>
                        
                                <li>
                                         <em>Care</em> – We care for each other by providing a safe place that allows young people to feel comfortable, confident and cared for.      
                                <li>
                                        <em>Compassion</em> – We are compassionate towards each other by having a system of boundaries, high expectations, support and consistency to allow young people the opportunity to reach their goals while overcoming the challenges they face in their day lives.
                                </li>
                            </ul>
                    
                            <p>
                                <br/>
                                 <em>
                                     Our program goals are:
                                 </em>
                                 
                                 <ul>
                                   <li>
                                           Engage young people in meaningful learning opportunities that expand their understanding of the community and world they live in.
                                   </li>  
                                   <li>
                                       Offer educational, vocational and post-secondary readiness preparation that lead to a sustainable life for themselves and their families.               
                                   </li>
                                   <li>
                                         Support young people as they face a myriad of obstacles in society.              
                                   </li>
                                   <li>
                                        Engage in active, authentic and meaningful dialog on community issues.               
                                   </li>
                                    <li>
                                          Promote cross-cultural leadership by appreciating and respecting each other's beliefs, culture and space.  
                                    </li>
                                    
                                    <li>
                                           Provide young people with a deeper understanding of leadership capacities. 
                                    </li>
                                    
                                    <li>
                                            Develop leaders who are confident in their skills and abilities to identify, act on and improve challenges in their communities.
                                    </li>
                                    
                                </ul>
                            </p>
                    </div>
                 </div> <!-- end of about-content -->
           
                
                
                    <div class="row">
                        <div id="team-content" role = "team-profiles" class = "col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                            <h1>Our Team</h1>
    
                                    <?php $query = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => '4') ); ?>
                                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    
                                    <div class="col-xs-6 col-sm-3">
                                        <?php get_template_part( 'entry-summary' ); ?>
                                    </div>  
        
                                    <?php endwhile; endif; ?>
                         </div>
                    </div>
                
                    <div class="row">
                        <div class="bar center"></div>
                    </div>
            
        
                <div class="row">

                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                
                        <h1>Our Partners</h1>
                              <p class="text-center">
                                 Our YouthBuild program fulfill an urgent need.  Many young people have the energy, talent, and intelligence that are being wasted solely for the lack of opportunity.
                              </p>
                     
                        <div class="row col-xs-10 col-xs-offset-1">
                            <div class="row partner-logos">
                                 <div class="col-xs-4  text-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/partner1.png" class="img-responsive">
                                </div>
                                <div class="col-xs-4 text-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/partner5.png" class="img-responsive">
                                </div>
                                <div class="col-xs-4 text-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/partner7.png" class="img-responsive">
                                </div>                                
                            </div>
                   
                            <div class="row partner-logos">
                                <div class="col-xs-4  text-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/partner10.png" class="img-responsive">
                                </div>
                                <div class="col-xs-4 text-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/partner4.png" class="img-responsive">
                                </div>
                                <div class="col-xs-4 text-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/partner6.jpg" class="img-responsive">
                                </div>
                            </div>
                        
                             <div class="row partner-logos">
                                <div class="col-xs-4 text-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/partner8.png" class="img-responsive">
                                </div>
                                  <div class="col-xs-4 text-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/partner9.png" class="img-responsive">
                                </div>
                                 <div class="col-xs-4 text-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/partner3.png" class="img-responsive">
                                </div>
                            </div>
                        </div> <!-- end of row -->
                    </div> <!-- end of class -->
                </div> <!-- end or row -->

               
             
         
    
        </div>  <!-- end of container --> 
                
</div> <!-- end of main -->
           


<?php get_footer(); ?>