  <footer class="pl-5 pr-5 mt-5">
    <div class="d-flex justify-content-center pt-4 pb-3 mt-4">
      <a target="_blank" href="https://www.facebook.com/JUNTA-DE-ACCION-COMUNAL-MANRIQUE-CENTRAL-1-230459925838/"><img class="pt-5 pl-5 pr-5" src="<?php bloginfo('template_url'); ?>/img/facebook-blanco.png" alt="facebook"></a>
      <a target="_blank" href="#"><img class="pt-5 pl-5 pr-5" src="<?php bloginfo('template_url'); ?>/img/youtube-blanco.png" alt="youtube"></a>
    </div>
    <div class="float-right mt-3 pt-3 d-none d-sm-block">
      <a href="#home"><img  class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/arriba-icon-blanco.png" alt="arriba"></a>
      <p class="text-center"><small>Arriba</small></p>
    </div>
    <div class="row d-flex justify-content-center mt-sm-0 mt-md-3 pt-sm-3 pt-md-5">
      <div class="col-xs-12 col-sm-6">
        <p class="text-center"><i class="material-icons">email</i> info@jacmanriquecentral.org</p>
        <p class="text-center"><i class="material-icons">phone</i> +57(4) 314 646 75 63 Presidencia</p>
      </div>
    </div>
    <div class="row mt-sm-0 mt-md-2 pt-sm-2">
      <div class="col-12">
        <?php wp_nav_menu('Footer menu'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center"><b>&copy;</b> <?php echo date('Y'); ?> <?php bloginfo(name) ?> | Desarrollado por: <a target="_blank" href="http://www.brumker.com/"><img src="<?php bloginfo('template_url'); ?>/img/brumker-logo-blanco.png" alt="Brumker studios"></a></p>
      </div>
    </div>
  </footer>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11';
    fjs.parentNode.insertBefore(js, fjs);}
    (document, 'script', 'facebook-jssdk'));
  </script>
  <script type="text/javascript">
    var scroll = new SmoothScroll('a[href*="#"]', {
    	ignore: '[data-scroll-ignore]',
    	header: null,
    	speed: 1000,
    	offset: 80,
    	easing: 'easeInOutCubic',
    	customEasing: function (time) {},
    	before: function () {},
    	after: function () {}
    });
  </script>
  <!--js bootstrap-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
