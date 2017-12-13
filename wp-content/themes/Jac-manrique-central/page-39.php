<?php get_header("blog") ?>

<article id="home">
  <div class="row pt-5 pl-5 pr-5 d-flex align-self-start">
         <div class="col-lg-3 col-md-6 col-xs-12 pb-3">
             <?php get_sidebar(); ?>
         </div>
         <!-- loop con excerpt -->
         <?php
         $args = array ('posts_per_page' => 7 );
         $filter_posts = new WP_Query($args);
         if($filter_posts->have_posts() ) : ?>
             <?php while( $filter_posts->have_posts() ) : $filter_posts->the_post() ?>
           <div class="col-lg-3 col-md-6 col-xs-12 order-first">
           <div class="card">
             <a class="text-white" href='<?php the_permalink() ?>'>
               <?php
                  if (has_post_thumbnail()){

                  the_post_thumbnail();
                  }
                ?>
               <h4 class="card-header text-uppercase text-white"><?php the_title() ?></h4>
             </a>
           </div>
           <div class="content">
             <?php if( is_singular() ) : ?>
               <p class="card-text"><?php the_excerpt() ?></p>
               <small class="card-text">Publicado en <?php the_time( "Y-m-d" ) ?></small>
               <small class="card-text"><?php the_tags(); ?></small>
               <a class="text-muted" href='<?php the_permalink() ?>'><p>Ver más</p></a>
             <?php else : ?>
               <p>no hay contenido en esta entrada</p>
                   <?php endif ?>
               </div>
         </div>
       <?php endwhile ?>
       <?php else : ?>
           <h1>Oops no tenemos publicaciones aún.</h1>
       <?php endif;
       wp_reset_postdata(); //reset del loop
        ?>
       <!-- fin del loop -->
     </div>
</article>

<section>
  <p>colocar la paginación del blog</p>
</section>




<?php get_footer() ?>
