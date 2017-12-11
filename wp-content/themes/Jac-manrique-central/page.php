<?php get_header("pages") ?>

<article id="home">
    <div class="row pl-5 pr-5 pt-5">
    <?php  if(have_posts()) :
        while(have_posts()) :
          the_post();
       ?>
      <div class="col-12">
        <h1 class="text-green"><?php the_title(); ?></h1>
      </div>
      <div class="col-12">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile ?>
  <?php  else:  ?>
   <div class="col-12">
     <h1 class="text-green">OOps aún no tenemos contenido para está página</h1>
   </div>
   <?php endif;
 wp_reset_postdata();
    ?>
</article>

<section>
  <div class="row my-pt pl-5 pr-5 d-flex align-self-start">

  </div>
</section>

<?php get_footer() ?>
