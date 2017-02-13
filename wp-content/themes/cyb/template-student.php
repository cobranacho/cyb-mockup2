<?php /* Template name: Student */ ?>


<?php get_header(); ?>


    <div class="student-banner">
            <div class="container">
                <div class="row">
                     <div class="col-xs-10 col-sm-8 col-md-4 da col-centered">
                        
                        <form>
                             <p class="text-center">
                                <input type="text" name="id" id="id" placeholder="Student ID" class="student-login feedback-input" /></a>
                             </p>
    
                            <p class="text-center">
                                 <input type="password" name="Password" id="password" placeholder="Password" class="student-login feedback-input" /></a>               
                            </p>
                            
                       
                            <label class="switch ">
                              <input type="checkbox" id="remember">  .
                              <div class="slider round"></div>
                            </label>
                          <span id="label-rem">Remember me</span>
       
                          
                            <p class="text-center">
                                <button type="button" class="btn btn-info btn-block lower"><strong>Log in</strong></button>
                           </p>          
                           
             
                        </form>
                    </div>
                </div>
            </div>
   
    </div>

           


<?php get_footer(); ?>