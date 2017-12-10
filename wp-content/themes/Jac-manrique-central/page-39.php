<?php get_header("blog") ?>

<article id="home">
    <div id="carouselExampleIndicators" class="carousel slide animated bounceInLeft" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" alt="1rst slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" alt="2nd slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" alt="3Th slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" alt="4th slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</article>

<section>
  <div class="row my-pt pl-5 pr-5 d-flex align-self-start">
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
               <h4 class="card-header text-green"><?php the_title() ?></h4>
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
</section>




<?php get_footer() ?>
