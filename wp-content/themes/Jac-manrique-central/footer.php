  <footer class="pl-5 pr-5 mt-5">
    <div class="d-flex justify-content-center pt-5 pb-5 mt-5">
      <a target="_blank" href="https://www.facebook.com/JUNTA-DE-ACCION-COMUNAL-MANRIQUE-CENTRAL-1-230459925838/"><img class="pt-5 pl-5 pr-5" src="<?php bloginfo('template_url'); ?>/img/facebook-blanco.png" alt="facebook"></a>
      <a target="_blank" href="#"><img class="pt-5 pl-5 pr-5" src="<?php bloginfo('template_url'); ?>/img/youtube-blanco.png" alt="youtube"></a>
    </div>
    <div class="float-right mt-3 pt-5">
      <a href="#home"><img src="<?php bloginfo('template_url'); ?>/img/arriba-icon-blanco.png" alt="arriba"></a>
      <p class="text-center"><small>Arriba</small></p>
    </div>
    <div class="d-flex justify-content-center mt-3 pt-5">
      <div>
        <p class="text-center"><i class="material-icons">email</i> info@jacmanriquecentral.org</p>
        <p class="text-center"><i class="material-icons">phone</i> +57(4) 314 646 75 63 Presidencia</p>
      </div>
    </div>
    <div class="row mt-2 pt-2">
      <div class="col">
        <?php wp_nav_menu('Footer menu'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="text-center"><b>&copy;</b> <?php echo date('Y'); ?> <?php bloginfo(name) ?> | Desarrollado por: <a target="_blank" href="http://www.brumker.com/"><img src="<?php bloginfo('template_url'); ?>/img/brumker-logo-blanco.png" alt="Brumker studios"></a></p>
      </div>
    </div>
  </footer>

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
    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!--js bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
