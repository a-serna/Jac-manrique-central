    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm">
            footer
            <small>footer content</small>
          </div>
        </div>
      </div>
    </footer>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm">
            info 01
          </div>
          <div class="col-sm">
            <h2>Contacto</h2>
            <ul>
              <li><i class="material-icons">email</i> ---</li>
              <li><i class="material-icons">smartphone</i> tel</li>
              <li><i class="material-icons">place</i> dirección</li>
            </ul>
          </div>
          <div class="col-sm">
            <h2>Siguenos en:</h2>
            <ul>
              <li><a target="_blank" href="#"></a></li>
              <li><a target="_blank" href="#"></a></li>
              <li><a target="_blank" href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.carousel').carousel({
          interval: 2000,
        }),
      $('body').scrollspy({target: "#navbarTogglerDemo02", offset: 50});
      // Add smooth scrolling on all links inside the navbar
      $("a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        }  // End if
      });
    });
    </script>

    <!--js bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
