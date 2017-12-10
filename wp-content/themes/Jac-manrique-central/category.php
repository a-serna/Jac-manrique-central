<?php get_header("pages"); ?>

<article id="home">
  <div class="row mt-5 pl-5 pr-5 d-flex align-self-start">
    <div class="col-12">
      <h1 class="text-green mb-5"><?php single_cat_title(); ?></h1>
    </div>
         <!-- loop con filtro de categoria -->
         <?php
         if(have_posts() ) : ?>
             <?php while( have_posts() ) : the_post() ?>
           <div class="col-lg-3 col-md-6 col-xs-12">
           <div class="card bg-dark text-white">
             <img class="card-img" src="<?php the_post_thumbnail(); ?>">
             <a class="text-white" href='<?php the_permalink() ?>'>
               <div class="card-img-overlay pl-0 pr-0 pb-0">
                 <div class="bg-tittle p-auto animated bounce">
                   <h4 class="card-title"><?php the_title() ?></h4>
                 </div>
               </div>
             </a>
           </div>
           <div class="content">
             <?php if( is_singular() ) : ?>
               <p class="card-text"><?php the_content() ?></p>
             <?php else : ?>
                       <p class="card-text"><?php the_excerpt() ?></p>
               <small class="card-text">Publicado en <?php the_time( "Y-m-d" ) ?></small>
               <small class="card-text"><?php the_tags(); ?></small>
               <a class="text-green" href='<?php the_permalink() ?>'><p>Ver más</p></a>
                   <?php endif ?>
               </div>
         </div>
       <?php endwhile ?>
       <?php else : ?>
         <div class="col-12 mb-5 pb-5">
           <h1 class="text-center">Oops no tenemos publicaciones con esta categoría.</h1>
         </div>
       <?php endif;
       wp_reset_postdata(); //reset del loop
        ?>
       <!-- fin del loop -->
     </div>

</article>

<?php get_footer(); ?>
