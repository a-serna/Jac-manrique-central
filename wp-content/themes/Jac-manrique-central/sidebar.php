<div id="sidebar" role="complementary">
	<div class="row">
		<div class="col-12">
			<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/Jac-manrique-central/">
				<div>
					<label class="screen-reader-text" for="s"></label>
					<input type="text" value="" name="s" id="s" />
					<input class="btn btn-secondary" type="submit" id="searchsubmit" value="Buscar" />
				</div>
			</form>
		</div>
		<div class="col-12">
			<h2>Autor</h2>
			<p>Descripción del Autor</p>
		</div>
		<div class="col-12">
			<ul role="navigation" class="nav flex-column">
				<li class="pagenav nav-item"><h2>Páginas</h2>
					<ul>
						<li class="page_item page-item-5"><a href="http://localhost/Jac-manrique-central/blog/">Blog</a></li>
						<li class="page_item page-item-11"><a href="http://localhost/Jac-manrique-central/comuna-virtual/">Comuna_Virtual</a></li>
					</ul>
				</li>
				<!-- aqui van las entradas -->
				<li class="nav-item"><h2>Publicaciones</h2>
					<ul>
						<?php if( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post() ?>
							<li><a href='<?php the_permalink() ?>'><?php the_title() ?></a></li>
						<?php endwhile ?>
						<?php else : ?>
							<p>Oh No, there are no posts!</p>
						<?php endif ?>
					</ul>
				</li>
				<li class="categories nav-item"><h2>Categorías</h2>
					<ul>
						<li class="cat-item cat-item-1"><a href="http://localhost/Jac-manrique-central/category/sin-categoria/" >Sin categoría</a> (1)
						</li>
					</ul>
				</li>
				<li class="nav-item"><h2>Meta</h2>
					<ul>
						<li><a href="http://localhost/Jac-manrique-central/wp-admin/">Administrador del sitio</a></li>
						<!-- <li><a href="http://localhost/Jac-manrique-central/wp-login.php?action=logout&#038;_wpnonce=2925da6b7c">Desconectar</a></li> -->
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
