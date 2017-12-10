<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php bloginfo(description); ?>">
    <!--verificación google analytics.. pendiente-->
    <meta name="google-site-verification" content="...."/>
    <!--colocar keywords-->
    <meta name="keywords" content="Gobierno, Medellín, Jac, comuna 4, Manrique central, calidad de vida, desarrollo integral, trabajo comunitario, gestión administrativa, salud pública,">
    <meta name=”robots” content=”index, follow”>
    <meta name="author" content="Brumker">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--css bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!--material icon-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--css-->
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>" >
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/jac.css" >
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:700|Source+Sans+Pro" rel="stylesheet">
    <!-- js smooth scroll -->
    <script src="<?php bloginfo(stylesheet_directory); ?>/js/smooth-scroll.min.js"></script>
    <!-- js -->
    <script src="<?php bloginfo(stylesheet_directory); ?>/js/jac.js"></script>
    <title><?php bloginfo(title); ?></title>
  </head>

  <body>

    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: rgba(255, 255, 255, 0.85);">
          <a data-scroll class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" class="img-fluid float-left" alt="Responsive image">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#historia"><p>Historia</p></a>
              </li>
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#misión-visión"><p>Misión/visión</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo get_page_link(11); ?>"><p>Comuna virtual</p></a>
              </li>
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#blog"><p>Blog</p></a>
              </li>
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#contacto"><p>Contacto</p></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
