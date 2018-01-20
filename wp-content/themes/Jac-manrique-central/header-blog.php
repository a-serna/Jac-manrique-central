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
    <meta name="description" content="Entra e informate de las noticias, eventos y demás, de nuestra Junta de acción comunal Manrique Central N°1.">
    <meta name="keywords" content="Gobierno, Medellín, Jac, comuna 4, Manrique central, calidad de vida, desarrollo integral, trabajo comunitario, gestión administrativa, salud pública,">
    <meta name=”robots” content=”index, follow”>
    <meta name="author" content="Brumker">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/jac.css" >
    <meta property="og:url"           content="https://www.jacmanriquecentral.org/blog/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php bloginfo(title); ?>" />
    <meta property="og:description"   content="<?php bloginfo(description); ?>" />
    <meta property="og:image"         content="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" />
    <link rel="shortcut icon" href="<?php bloginfo(stylesheet_directory); ?>/img/jac-icon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo(stylesheet_directory); ?>/img/jac-icon.ico" type="image/x-icon">
    <title>Blog Jac Manrique central</title>
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
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
                                    'container' => 'nav',
                                    'menu-class' => 'nav_list',));
          ?>
        </div>
      </nav>
    </header>
