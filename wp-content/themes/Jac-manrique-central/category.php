<?php get_header("blog"); ?>
    <article id="home">
      <div class="row mt-5 pl-5 pr-5 d-flex align-self-start">
        <div class="col-12">
          <h1 class="text-green mb-5"><?php single_cat_title(); ?></h1>
        </div>
        <!-- loop con filtro de categoria -->
        <?php if(have_posts() ) : ?>
          <?php while( have_posts() ) : the_post() ?>
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="card">
                <a class="text-white" href='<?php the_permalink() ?>'>
                  <?php if (has_post_thumbnail()){ the_post_thumbnail(); } ?>
                  <h4 class="card-header text-uppercase text-white"><?php the_title() ?></h4>
                </a>
              </div>
              <div class="content">
                <?php if( is_singular() ) : ?>
                  <p class="card-text"><?php the_content() ?></p>
                  <?php else : ?>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <small class="card-text">Publicado en <?php the_time( "Y-m-d" ) ?></small>
                    <small class="card-text"><?php the_tags(); ?></small>
                    <a class="text-muted" href='<?php the_permalink() ?>'><p>Ver más</p></a>
                    <div class="fb-like"
                      data-href="https://www.jacmanriquecentral.org/blog/"
                      data-layout="button"
                      data-action="like"
                      data-size="large"
                      data-show-faces="true"
                      data-share="true">
                    </div>
                <?php endif ?>
            </div>
      </div>
          <?php endwhile ?>
        <?php else : ?>
      <div class="row">
        <div class="col-12 mb-5 pb-5">
          <h1 class="text-center">Oops no tenemos publicaciones con esta categoría.</h1>
        </div>
      </div>
      <?php endif; wp_reset_postdata(); //reset del loop ?><!-- fin del loop -->
    </article>
    <main id="suscriptor">
    <?php get_template_part( 'template-parts/suscriptor', '' ); ?>
    </main>
<?php get_footer(); ?>
