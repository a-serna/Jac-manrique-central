<?php get_header("blog"); ?>
    <article id="home">
      <div class="row pt-5 pl-5 pr-5">
      	<div class="col-sm-12">
      		<?php
      			if( have_posts() ) {
      				while( have_posts() ) {
      					the_post();
      					get_template_part( 'template-parts/content', '' );
      				}
      			}
      			else {
      				get_template_part( 'template-parts/content', 'none' );
      			}
      		?>
      	</div>
        <div class="fb-like" data-href="https://www.jacmanriquecentral.org/blog/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
      </div>
      <div class="row p-5">
        <div class="col-12">
          <?php comments_template(); ?>
        </div>
      </div>
      <div class="row pl-5 pr-5">
        <div class="col-12">
          <h2 class="text-green">Otras publicaciones</h2>
        </div>
        <?php
             $args = array ('posts_per_page' => 4, 'orderby' => 'rand' );
             $filter_posts = new WP_Query($args);
             if($filter_posts->have_posts() ) : ?>
                 <?php while( $filter_posts->have_posts() ) : $filter_posts->the_post() ?>
               <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="card">
                 <a class="text-success" href='<?php the_permalink() ?>'>
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
                       <?php endif ?>
                   </div>
             </div>
           <?php endwhile ?>
           <?php else : ?>
               <h1>Oops no tenemos publicaciones aún.</h1>
           <?php endif;
           wp_reset_postdata(); //reset del loop
            ?><!-- fin del loop -->
         </div>
      </div>
    </article>
  <main id="suscriptor">
    <?php get_template_part( 'template-parts/suscriptor', '' ); ?>
  </main>
<?php get_footer(); ?>
