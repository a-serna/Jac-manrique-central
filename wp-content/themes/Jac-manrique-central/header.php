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
    <meta name="description" content="<?php bloginfo(description); ?>">
    <meta name="keywords" content="Gobierno, Medellín, Jac, comuna 4, Manrique central, calidad de vida, desarrollo integral, trabajo comunitario, gestión administrativa, salud pública,">
    <meta name=”robots” content=”index, follow”>
    <meta name="author" content="Brumker">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--css bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/jac.css">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:700|Source+Sans+Pro" rel="stylesheet">
    <!-- js smooth scroll -->
    <script src="<?php bloginfo(stylesheet_directory); ?>/js/smooth-scroll.min.js"></script>
    <!-- fb metas -->
    <meta property="og:url"           content="https://www.jacmanriquecentral.org" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php bloginfo(title); ?>" />
    <meta property="og:description"   content="<?php bloginfo(description); ?>" />
    <meta property="og:image"         content="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php bloginfo(stylesheet_directory); ?>/img/jac-icon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo(stylesheet_directory); ?>/img/jac-icon.ico" type="image/x-icon">
    <!-- MailChimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
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
          <ul class="navbar-nav">
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#historia"><p>Historia</p></a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#misión-visión"><p>Misión/visión</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="<?php echo get_page_link(11); ?>"><p>Comuna virtual</p></a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="<?php echo get_page_link(39); ?>"><p>Blog</p></a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#contacto"><p>Contacto</p></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
