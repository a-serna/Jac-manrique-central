<!-- aqui se manejara el blog -->

<?php get_header(); ?>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="wp-content/themes/Jac-manrique/img/logo-manrique.png" class="img-fluid float-left" alt="Responsive image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Comuna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mapas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm">
            <?php the_tittle(); ?>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
