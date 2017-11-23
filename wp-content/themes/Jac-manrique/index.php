<?php get_header(); ?>

  <body data-spy="scroll" data-target="#navbarTogglerDemo02">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#home">
          <img src="wp-content/themes/Jac-manrique/img/logo-manrique.png" class="img-fluid float-left" alt="Responsive image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#comuna">Comuna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#maps">Mapas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto">Contacto</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- aqui va la primera sección -->
    <article id="home">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm">
            <h1>columna</h1>
          </div>
          <div class="col-sm">
            <h1>columna</h1>
          </div>
          <div class="col-sm">
            <h1>columna</h1>
          </div>
          <div class="col-sm">
            <h1>columna</h1>
          </div>
        </div>
      </div>
    </article>

    <section id="nosotros">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>info de nosotros</h1>
          </div>
      </div>
    </section>

    <section id="comuna">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>comuna</h1>
          </div>
      </div>
    </section>

    <section id="maps">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>aqui va el mapa</h1>
          </div>
      </div>
    </section>

    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>el blog</h1>
          </div>
      </div>
    </section>

    <section id="contacto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm">
            <h1>contacto</h1>
          </div>
      </div>
    </section>

    <!-- con esta etiqueta podes agregar iconos de material icon<i class="material-icons">code</i> -->

    <?php get_footer(); ?>
