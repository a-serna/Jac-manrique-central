delete info
 aqui va la info del Blog

 <div id="article">
   <h2 class="article-title"><?php the_title() ?></h2>
   <div class="article-content"><p><?php the_content() ?></p></div>
   <div class="article-meta">Published on <?php the_time( "Y-m-d" ) ?> by <?php the_author() ?></div>
 </div>
