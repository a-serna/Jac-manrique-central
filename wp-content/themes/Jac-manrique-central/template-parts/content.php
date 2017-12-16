<h3 class="text-green"><?php the_title() ?></h3>
<small class="card-text">Publicado en <b><?php the_time( "Y-m-d" ) ?></b></small>
<small>Por: <b><?php the_author(); ?></b></small>
<div class="content">
	<?php the_content() ?>
</div>
