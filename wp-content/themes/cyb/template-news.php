<?php /* Template name: News */ ?>


<?php get_header(); ?>

<div class="jumbotron">
    News & Announcements
</div>

<div class="container-fluid news-content">
    <div class="row">
         <div class="col-sm-4">
             
             <img class="text-center news-img" src="http://placehold.it/200x160">
             <p class="text-left news-heading">
                 Fresh Tracks Kickoff
                 </br>
                 Event & Press Conference
             </p>
             
             <p class="text-left">
                 Fresh Tracks Leadership Expeditions is a partnership between IslandWood, Sierra Club, Children & Nature Network's Natural Leaders, REI, and Zumiezwas and is inspired by the Obama Administration's commitment to connecting more young Americans to the outdoors and in support of the goals of the My Brother's Keeper Initiative.
                 <a href="#"> read more</a>
             </p>
             
        </div>
         <div class="col-sm-4">
             
             <img class="text-center news-img" src="http://placehold.it/200x160">
             <p class="text-left news-heading">
                 Fresh Tracks Kickoff
                 </br>
                 Event & Press Conference
             </p>
             
             <p class="text-left">
                 Fresh Tracks Leadership Expeditions is a partnership between IslandWood, Sierra Club, Children & Nature Network's Natural Leaders, REI, and Zumiezwas and is inspired by the Obama Administration's commitment to connecting more young Americans to the outdoors and in support of the goals of the My Brother's Keeper Initiative.
                 <a href="#"> read more</a>
             </p>
             
        </div>
         <div class="col-sm-4">
             
             <img class="text-center news-img" src="http://placehold.it/200x160">
             <p class="text-left news-heading">
                 Fresh Tracks Kickoff
                 </br>
                 Event & Press Conference
             </p>
             
             <p class="text-left">
                 Fresh Tracks Leadership Expeditions is a partnership between IslandWood, Sierra Club, Children & Nature Network's Natural Leaders, REI, and Zumiezwas and is inspired by the Obama Administration's commitment to connecting more young Americans to the outdoors and in support of the goals of the My Brother's Keeper Initiative.
                 <a href="#"> read more</a>
             </p>
             
        </div>
    </div>

   <div class="row">
         <div class="col-sm-4">
             
             <img class="text-center news-img" src="http://placehold.it/200x160">
             <p class="text-left news-heading">
                 Fresh Tracks Kickoff
                 </br>
                 Event & Press Conference
             </p>
             
             <p class="text-left">
                 Fresh Tracks Leadership Expeditions is a partnership between IslandWood, Sierra Club, Children & Nature Network's Natural Leaders, REI, and Zumiezwas and is inspired by the Obama Administration's commitment to connecting more young Americans to the outdoors and in support of the goals of the My Brother's Keeper Initiative.
                 <a href="#"> read more</a>
             </p>
             
        </div>
         <div class="col-sm-4">
             
             <img class="text-center news-img" src="http://placehold.it/200x160">
             <p class="text-left news-heading">
                 Fresh Tracks Kickoff
                 </br>
                 Event & Press Conference
             </p>
             
             <p class="text-left">
                 Fresh Tracks Leadership Expeditions is a partnership between IslandWood, Sierra Club, Children & Nature Network's Natural Leaders, REI, and Zumiezwas and is inspired by the Obama Administration's commitment to connecting more young Americans to the outdoors and in support of the goals of the My Brother's Keeper Initiative.
                 <a href="#"> read more</a>
             </p>
             
        </div>
         <div class="col-sm-4">
             
             <img class="text-center news-img" src="http://placehold.it/200x160">
             <p class="text-left news-heading">
                 Fresh Tracks Kickoff
                 </br>
                 Event & Press Conference
             </p>
             
             <p class="text-left">
                 Fresh Tracks Leadership Expeditions is a partnership between IslandWood, Sierra Club, Children & Nature Network's Natural Leaders, REI, and Zumiezwas and is inspired by the Obama Administration's commitment to connecting more young Americans to the outdoors and in support of the goals of the My Brother's Keeper Initiative.
                 <a href="#"> read more</a>
             </p>
             
        </div>
    </div>
    
    <div class="row">
        <section id="content" role = "main" class = "col-xs-12 col-sm-10 col-sm-offset-1">
            <?php $query = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => '4') ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <div class="col-sm-3 text-center">
                    <?php get_template_part( 'entry-team' ); ?>
                </div>  
    
            <?php endwhile; endif; ?>
        </section>
    </div>
    
    
</div>


<?php get_footer(); ?>