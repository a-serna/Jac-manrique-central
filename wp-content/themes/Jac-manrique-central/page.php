<?php get_header("pages") ?>
    <article id="home">
        <?php  if(have_posts()) :
          while(have_posts()) :
            the_post();
              ?>
              <div class="row pl-5 pr-5 pt-5 mt-5">
                <?php the_content(); ?>
              </div>
          <?php endwhile ?>
        <?php endif; wp_reset_postdata(); ?>
    </article>
<?php get_footer() ?>
