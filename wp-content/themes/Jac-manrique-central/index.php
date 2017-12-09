<?php get_header(); ?>

<div id="article">
   <h2 class="article-title"><?php the_title() ?></h2>
   <div class="article-content"><?php the_content() ?></div>
   <div class="article-meta">Published on <?php the_time( "Y-m-d" ) ?> by <?php the_author() ?></div>
</div>

<?php get_footer(); ?>
