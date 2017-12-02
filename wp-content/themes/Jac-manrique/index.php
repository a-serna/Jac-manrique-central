<?php get_header(); ?>

  <body data-spy="scroll" data-target="#navbarTogglerDemo02">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#home">
          <img src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" class="img-fluid float-left" alt="Responsive image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#nosotros"><p>Nosotros</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#comuna"><p>Mi comuna</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#maps"><p>Mapas</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog"><p>Blog</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto"><p>Contacto</p></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- aqui va la primera sección -->
    <article id="home" class="container">
      <div class="row card-deck">
        <div class="card col-sm-6 col-md-3 pl-0 pr-0">
          <!-- imagenes -->
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body bg-dark text-white">
            <h4 class="card-title text-center">Comuna</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="card col-sm-6 col-md-3 pl-0 pr-0">
          <!-- imagenes -->
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body bg-dark text-white">
            <h4 class="card-title text-center">Mapas</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="card col-sm-6 col-md-3 pl-0 pr-0">
          <!-- imagenes -->
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body bg-dark text-white">
            <h4 class="card-title text-center">Equipamiento</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="card col-sm-6 col-md-3 pl-0 pr-0">
          <!-- imagenes -->
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body bg-dark text-white">
            <h4 class="card-title text-center">Blog</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </article>

    <!-- <section id="nosotros">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>info de nosotros</h1>
          </div>
      </div>
    </section> -->

    <section id="comuna" class="container">
      <div class="row">
        <div class="col-sm">
          <h2 class="text-green">Mi comuna</h2>
          <p>La comuna 4 tiene una interesante geografía con una larga trayectoria historica y cultural.</p>
        </div>
      </div>
      <div class="row media">
        <div class="col-sm-12 col-lg-4">
        <!-- imagen aqui -->
        <img class="mr-3" src="..." alt="Generic placeholder image">
        </div>
        <div class="col-sm-12 col-lg-8">
          <div class="media-body">
            <h2 class="mt-0 text-green">Comuna 4</h2>
            <p><b class="text-green">Construcción:</b> su inicio fue en el año de 1.920 con la construcción del tranvía eléctrico
              se empezó a poblar y construir nuestra comuna.</p>
            <p><b class="text-green">Ubicación:</b> la comuna 4 Aranjuez está ubicada en la zona nororiental de la ciudad de
              Medellín, compuesta por 14 barrios y 17 equipamientos institucionales.</p>
            <p><b class="text-green">Límites:</b> la comuna 4 limita por el norte con las comunas 1 y 2 ( Popular y Santa Cruz )
              nos separa la quebrada la Rosa; por el sur con la comuna 10 ( la Candelaria ) calle 67
              Barranquilla; por el oriente con la comuna 3 ( Manrique ) carrera 45 avenida Carlos Gardel
              y por el occidente con el Rio Medellín.</p>
            <p><b class="text-green">Población:</b> el número de habitantes es de 170.000 de acuerdo con el censo realizado en
              el año 2.005.</p>
            <p><b class="text-green">Área:</b> el área de nuestro territorio tiene una extensión de 486,45 hectáreas que
              corresponden al 30.9% de la zona nororiental y al 4,7 del suelo urbano de Medellín.</p>
            <p><b class="text-green">Estratificación:</b> los estratos de la comuna 4 Aranjuez son el 1, 2 y 3.</p>
            <p><b class="text-green">Viviendas:</b> en nuestro territorio se encuentran 45.000 viviendas entre casas,
              apartamentos y locales comerciales.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          aqui insertamos un video
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          <h2 class="text-green">Movilidad</h2>
          <p>La comuna 4 cuenta con una alta variedad de rutas y medios de transporte para el servicio
            público de transporte, que atienden su población.</p>
        </div>
      </div>

      <div class="row media">

        <div class="my-border border rounded col-sm-12 col-lg-5 p-4 mb-3">
          <div class="row">
            <div class="col-sm-3">
              <img class="mr-3" src="..." alt="Generic placeholder image">
            </div>
            <div class="col-sm-9">
              <div class="media-body">
                <p>Las empresas de buses que recorren el territorio son: Aranjuez, Campo Valdés, Santa Cruz.
                  Combuses, Zamora, Bello y Coopetransa.</p>
              </div>
            </div>
          </div>
        </div>


        <div class="my-border border rounded col-sm-12 col-lg-5 offset-lg-2 p-4 mb-3">
          <div class="row">
            <div class="col-sm-3">
              <img class="mr-3" src="..." alt="Generic placeholder image">
            </div>
            <div class="col-sm-9">
              <div class="media-body">
                <p>El servicio de taxis que circulan en nuestras vías es muy eficiente.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="my-border border rounded col-sm-12 col-lg-5 p-4 mb-3">
          <div class="row">
            <div class="col-sm-3">
              <img class="mr-3" src="..." alt="Generic placeholder image">
            </div>
            <div class="col-sm-9">
              <div class="media-body">
                <p>El Metro de Medellín tiene cuatro estaciones en la comuna 4 Aranjuez que son: Estación
                  Hospital, Estación Universidad de Antioquia, Estación Terminal de Transporte y la Estación
                  Tricentenario.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="my-border border rounded col-sm-12 col-lg-5 offset-lg-2 p-4 mb-3">
          <div class="row">
            <div class="col-sm-3">
              <img class="mr-3" src="..." alt="Generic placeholder image">
            </div>
            <div class="col-sm-9">
              <div class="media-body">
                <p>El Metro Plus tiene siete estaciones que son: Estación Aranjuez, Estación Berlín, Estación
                  las Esmeraldas, Estación Manrique, Estación Gardel, Estación Palos Verdes y Estación
                  Hospital.
                  Es de resaltar que el Metro y el Metro Plus están articulados con el sistema de cables y el
                  tranvía de la ciudad.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="my-border border rounded col-sm-12 col-lg-12 p-4 mb-3">
          <div class="row">
            <div class="col-sm-3">
              <img class="mr-3" src="..." alt="Generic placeholder image">
            </div>
            <div class="col-sm-9">
              <div class="media-body">
                <p>Gran cantidad de habitantes de la comuna tienen vehículo particular o moto para su
                  movilidad.
                  La Movilidad en la comuna 4 Aranjuez es muy eficiente.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="maps">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h2 class="text-green">Mapas</h2>
            <p>En la comuna 4 Aranjuez existen 14 barrios.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <h1>aqui va el mapa</h1>
          </div>
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

    <section id="social-media">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>aqui va la api de fb</h1>
          </div>
      </div>
    </section>

    <section id="contacto">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h2 class="text-green">Contacto</h2>
            <p>Escríbenos y mándanos tus inquietudes, sugerencias o aportes, para que conectemos a nuestra comuna.</p>
          </div>
        </div>


        <form class="mt-5 p-5">
          <div class="form-row justify-content-md-center">
            <div class="margin-ajust col-sm-12 col-md-4 mr-5 mb-3">
              <input type="text" class="form-control border form-border rounded text-center" placeholder="Nombre">
            </div>
            <div class="margin-ajust col-sm-12 col-md-4 ml-5 mb-3">
              <input type="text" class="form-control border form-border rounded text-center" placeholder="Apellido">
            </div>
            <div class="margin-ajust col-sm-12 col-md-4 mr-5 mb-3">
              <input type="email" class="form-control border form-border rounded text-center" id="inputEmail4" placeholder="Email">
            </div>
            <div class="margin-ajust col-sm-12 col-md-4 ml-5 mb-3">
              <input type="tel" class="form-control border form-border rounded text-center" placeholder="Teléfono">
            </div>

            <textarea name="textarea" class="form-control border form-border rounded" length="400"></textarea>
          </div>

          <div class="row justify-content-md-center">
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"><h6>Acepto términos y condiciones</h6>
                </label>
              </div>
            </div>
          </div>
          <div class="row justify-content-sm-center mt-3">
            <div class="col-sm-3">
              <input class="my-btn btn btn-lg btn-block text-white" type="Submit" value="Enviar">
            </div>
          </div>

        </form>

      </div>
    </section>

    <!-- con esta etiqueta podes agregar iconos de material icon<i class="material-icons">code</i> -->

    <?php get_footer(); ?>
