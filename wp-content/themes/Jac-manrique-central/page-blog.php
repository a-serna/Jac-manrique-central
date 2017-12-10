<?php get_header("pages") ?>

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
  <div class="row">
     <div class="col-12">
         <?php
           if ( have_posts() ) {
               while (have_posts()) {
                   the_post();
                   ?>
                   <h2><?php the_title(); ?></h2>
                   <p><?php the_excerpt(); ?></p>
               <?php
               }
           }
          ?>
     </div>
  </div>
</section>




<?php get_footer() ?>
