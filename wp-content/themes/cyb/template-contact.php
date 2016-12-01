<?php /* Template name: Contact */ ?>


<?php get_header(); ?>
<div class="container-fluid">
    <div class="google-maps">
    


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.74193815794!2d-118.2204668848521!3d33.89629948064861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2cb6f663a9073%3A0x4f174e84c16e76d6!2s477+E+Compton+Blvd%2C+Compton%2C+CA+90221!5e0!3m2!1sen!2sus!4v1480547666001" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
</div>



<div class="container" id="contact-us">
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <form>
                
                <p class="text-right">
                    <input type="text" name="name" id="name" placeholder="Name" class="feedback-input" /></a>
                </p>

                <p class="text-right">
                     <input type="email" name="email" id="email" placeholder="Email" class="feedback-input" /></a>               
                </p>

                <p class="text-right">
                    <textarea name="text" name="message" id="message" placeholder="Message" class="feedback-input"></textarea></a>                    
                </p>

                <p class="text-right">
                    <button type="button" class="btn btn-info btn-sm send-btn"><strong>Send</strong></button>
              </p>
              

            </form>
        </div>
        
             <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                 <div class="text-left" id="contact-address">
                     
                 477 E. Compton Blvd.
              </br>
              Compton CA, 90221
              </br></br>
              (310) 631-2000
              </br>(310) 631-2036
                 </div>

            </div>
    </div>
</div>

<?php get_footer(); ?>