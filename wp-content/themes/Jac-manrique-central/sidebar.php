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
						<li class="navbar-item"><a href="<?php echo get_page_link(11); ?>"><h5>Comuna Virtual</h5></a></li>
					</ul>
				</li>
				<!-- aqui van las entradas -->
				<li class="nav-item"><h2>Publicaciones</h2>
					<ul>
						<?php if( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post() ?>
							<li><a href='<?php the_permalink() ?>'><h5><?php the_title() ?></h5></a></li>
						<?php endwhile ?>
						<?php else : ?>
							<p>Oops no tenemos publicaciones aún.</p>
						<?php endif ?>
					</ul>
				</li>
				<li class="categories nav-item"><h2>Categorías</h2>
					<ul>
						<!-- pendiente -->
						<li class="cat-item cat-item-1"><a href="http://localhost/Jac-manrique-central/category/sin-categoria/" >Sin categoría</a> (1)
						</li>
					</ul>
				</li>
				<li class="nav-item"><h2>Administrador</h2>
					<ul>
						<li><a href="<?php echo wp_login_url( $redirect ); ?>" title="Iniciar sesión">Iniciar sesión</a></li>
						<!-- <li><a href="<?php echo wp_logout_url( $redirect ); ?>" title="Cerrar sesión">Cerrar sesión</a></li> -->
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
