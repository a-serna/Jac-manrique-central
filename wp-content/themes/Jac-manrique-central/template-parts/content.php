<h2 class="text-green text-uppercase"><?php the_title() ?></h2>
<small class="card-text">Publicado en <b><?php the_time( "Y-m-d" ) ?></b></small>
<small>Por: <b><?php the_author(); ?></b></small>
<div class="content">
	<?php the_content() ?>
</div>
