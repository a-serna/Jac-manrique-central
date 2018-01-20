<div id="site-sidebar" role="complementary">
	<div class="row">
		<div class="col-12">
			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
			  <div>
			    <label class="screen-reader-text" for="s"></label>
			    <input type="text" value="" name="s" id="s" />
			    <input class="btn my-btn text-white" type="submit" id="searchsubmit" value="Buscar" />
			  </div>
			</form>
		</div>
		<?php dynamic_sidebar( 'mat-sidebar' ); ?>
		<div class="col-12">
			<h2 class="widget-title">Administrador</h2>
			<ul>
				<li><a href="<?php echo wp_login_url( $redirect ); ?>" title="Iniciar sesión">Iniciar sesión</a></li>
				<li><a href="<?php echo wp_logout_url( $redirect ); ?>" title="Cerrar sesión">Cerrar sesión</a></li>
			</ul>
		</div>
	</div>
</div>
