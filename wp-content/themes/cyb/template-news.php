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
        <section id="content" role = "main" class = "col-sm-8">
    
    <h1>About Us Page</h1>
    
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'entry' ); ?>
    
    <?php comments_template(); ?>
    
    <?php endwhile; endif; ?>
    


    <?php get_template_part( 'nav', 'below' ); ?>
</section>

    </div>
    
</div>


<?php get_footer(); ?>