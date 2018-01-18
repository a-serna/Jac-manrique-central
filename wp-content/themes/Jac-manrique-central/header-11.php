<!DOCTYPE html>
<html>
  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112676078-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-112676078-1');
    </script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="Una plataforma digital en la que vos y tu comunidad pueden acceder a contenidos de la Comuna 4.">
    <meta name=”robots” content=”index, follow”>
    <meta name="author" content="Brumker">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--css bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!--material icon-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--css-->
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>" >
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/comuna.css" >
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:700|Source+Sans+Pro" rel="stylesheet">
    <!-- js smooth scroll -->
    <script src="<?php bloginfo(stylesheet_directory); ?>/js/smooth-scroll.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php bloginfo(stylesheet_directory); ?>/img/comuna-icon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo(stylesheet_directory); ?>/img/comuna-icon.ico" type="image/x-icon">
    <title><?php the_title(); ?></title>
  </head>

  <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgba(255, 255, 255, 0.85);">
          <a data-scroll class="navbar-brand" href="#home">
            <img src="<?php bloginfo('template_url'); ?>/img/comunavirtual-logo.png" class="img-fluid float-left" alt="logo comuna">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#comuna"><p>Comuna 4</p></a>
              </li>
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#movilidad"><p>Movilidad</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#quebradas"><p>Quebradas</p></a>
              </li>
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#deportivos"><p>Escenarios deportivos</p></a>
              </li>
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#ciudad"><p>Equipamientos de ciudad</p></a>
              </li>
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#instituciones"><p>Instituciones Educativas</p></a>
              </li>
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#iglesias"><p>Iglesias</p></a>
              </li>
              <li class="nav-item">
                <a data-scroll class="nav-link" href="#mapas"><p>Mapas</p></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
