

<?php wp_footer(); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js" type="text/javascript"></script>
  


    <!-- FullPage js -->

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/fullpage/jquery.fullpage.js" ></script>

    <script>
        $(document).ready(function() {
            $('#fullpage').fullpage({
            sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#ccddff'],
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 1000,
            
            afterLoad: function(anchorLink, index) {
                var loadedSection = $(this);

                //using index
                if(index == 3) {
                                    
                   // alert("Section 3 ended loading");
                }

                //using anchorLink
                if(anchorLink == 'secondPage') {
                    $("#move").animate({left: '500px'}, "slow");
                }
            },
            
            onLeave: function(index, nextIndex, direction) {
                var leavingSection = $(this);
    
                //after leaving section 2
                if(index == 2 && direction =='down') {
                    $('#main-nav').fadeOut(600);
                    $('#main-nav').fadeIn(600);
                }
    
                else if(index == 3 && direction == 'up') {
                    $('#main-nav').fadeOut(600);
                    $('#main-nav').fadeIn(600);
                }
            }
                

            });
        });        
    </script>
    
    <script>
      $(".toggle-icon").click(function() {
        $('#nav-container').toggleClass("pushed");
      });
    </script>

</body>
</html>