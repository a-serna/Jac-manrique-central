    <footer>
      <div class="row d-flex justify-content-center">
        <div class="col-sm-2">
          facebook
        </div>
        <div class="col-sm-2">
          Youtube
        </div>
      </div>
      <div class="row d-flex justify-content-end">
        <div class="col-sm-2">
          <a href="#home">arrow top</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center">Email: info@jacmanrique.org</p>
        <p class="text-center">Teléfono: </p>
        <p class="text-center">Dirección: </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <?php wp_nav_menu('Footer menu'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="text-center"><b>&copy;</b> <?php echo date('Y'); ?> <?php bloginfo(name) ?> | Desarrollado por: Brumker </p>
      </div>
    </div>
  </footer>

    <script type="text/javascript">
      var scroll = new SmoothScroll('a[href*="#"]', {
      	ignore: '[data-scroll-ignore]',
      	header: null,
      	speed: 1000,
      	offset: 0,
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
