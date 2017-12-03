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
              <a class="nav-link" href="#historia"><p>Historia</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#misión-visión"><p>Misión/visión</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><p>Comuna virtual</p></a>
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

    <article>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" alt="1rst slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" alt="2nd slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" alt="3Th slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/logo-manrique.png" alt="4th slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </article>

    <!-- sección de historia -->
    <section id="historia">
      <div class="row">
        <div class="col-12">
          <div class="bg-1">
            ...<!-- imagen -->
          </div>
        </div>
        <div class="col-12">
          <h2 class="text-green text-pt ml-5">Historia</h2>
          <p class="text-left mt-5 pl-5 pr-5">En el año 2000 el señor <b>Fernando Arango</b>, apoyado por su señor padre <b>Gilberto Arango</b>,
            se dio a la tarea de crear la acción comunal del barrio; el señor Arango convocó a varias personas
            para que lo acompañaran en su objetivo encontrando apoyo en algunas personas entre ellas: los señores
            <b>Juan Raúl Díaz, Alberto Ochoa, José María Cardona, Oscar Ramiro Álzate,</b> y las señoras
            <b>Magda Ochoa, Luz Dary</b> entre otras.
            <br></br>
            A partir de ese momento se dieron a la tarea de consultar los límites geográficos del barrio en
            planeación municipal, que más tarde se convertirían, de acuerdo a la aprobación de la
            <b>Junta de Acción Comunal(JAC)</b> provisional en la jurisdicción de la organización:
            Por el sur la calle 66f hasta la carrera 48, baja por la calle 67 <b>&quot;barranquilla&quot;</b>
            hasta la carrera 49, por el norte con calle 76, por el oriente con la carrera 45
            <b>&quot;Avenida Carlos Gardel&quot;</b> y por el occidente con la carrera 49.
            Se aprobaron, además, los estatutos y se tomó el nombre de <b>JAC Manrique Central No 1</b>.
            <br></br>
            En el año 2001 reciben el reconocimiento y la personería jurídica 084 del 1°de junio de 2001 y el
            NIT N° 811.030.218-9, procediendo entonces a la elección de nueva JAC:
            <br></br>
            <b>Presidente:</b> Fernando Arango
            <br>
            <b>Vicepresidente:</b> Oscar Ramiro Álzate
            <br>
            <b>Tesorero:</b> Juan Raúl Díaz
            <br>
            <b>Secretaria:</b> Luz Dary
            <br></br>
            En los años 2002 y 2003 se eligieron nuevos miembros por motivos de retiro de algunos dignatarios.
            La JAC fomenta los ejercicios de discusión y representación frente a las diferentes problemáticas
            del barrio, nuestras acciones se han convertido en un ejercicio de representación política y
            comunitaria, velando por el mejoramiento de la calidad de vida de los habitantes del barrio.
            La JAC no posee sede, pero esto no impide realizar nuestro quehacer comunitario.</p>
        </div>
      </div>
      <div class="row my-pt">
        <div class="col-sm-12 col-md-6">
          <h2 class="text-green pl-5">En la actualidad</h2>
          <p class="text-left mt-5 pl-5 pr-5">En este momento la Junta directiva y comités,
            están orientados por personas con alto perfil de trabajo comunitario, sustentado
            en constantes procesos de formación y capacitación, donde prima como principio la
            construcción en pro del beneficio de los habitantes del barrio.</p>
        </div>
        <div class="col-sm-12 col-md-6 pr-5 pl-5">
          <img src="..." class="rounded float-left d-block img-thumb" alt="...">
        </div>
      </div>
    </section>

    <section id="misión-visión">
      <div class="row my-pt">
        <div class="col-12">
          <div class="bg-1">
            ...<!-- imagen -->
          </div>
        </div>
      </div>
      <div class="row my-pt">
        <div class="col-sm-12 col-md-6 pl-5 pr-5">
          <img src="..." class="rounded d-block img-thumb" alt="...">
        </div>
        <div class="col-sm-12 col-md-6">
          <h2 class="text-green mr-5 pl-5 mt-5">Objetivo:</h2>
          <p class="text-left mt-5 pr-5 pl-5">Poner en manos de la organización una herramienta práctica que
            facilite tomar conciencia sobre las responsabilidades que tienen los asociados y dignatarios,
            para lograr mayor beneficio y mejoramiento de la calidad de vida de la comunidad, que ayuden a la
            interpretación y comprensión de la normatividad contemplada en la legislación comunal vigente y en los estatutos.</p>
        </div>
        <div class="col-sm-12 col-md-6">
          <h2 class="text-green ml-5 mt-5">Misión:</h2>
          <p class="text-left mt-5 pl-5 pr-5">La JAC Manrique Central N° 1 es una organización civil, sin
            ánimo de lucro que busca elevar la calidad de vida de sus afiliados y desarrolla proyectos
            educativos ambientales, formando así ciudadanos solidarios, respetuosos, tolerantes, autónomos
            y responsables. Su propósito es promover un desarrollo integral sostenible y sustentable, construido
            a partir de la democracia participativa en la gestión del desarrollo de la comunidad. (ley 743 de 2002)</p>
        </div>
        <div class="col-sm-12 col-md-6 pr-5 pl-5 mt-5">
          <img src="..." class="rounded d-block img-thumb" alt="...">
        </div>
        <div class="col-sm-12 col-md-6 pl-5 pr-5 mt-5">
          <img src="..." class="rounded d-block img-thumb" alt="...">
        </div>
        <div class="col-sm-12 col-md-6 mt-5">
          <h2 class="text-green ml-5">Visión:</h2>
          <p class="text-left mt-5 pl-5 pr-5">La Junta de Acción Comunal espera que para el año 2020 sea reconocida
            como una organización honesta al servicio de la Comunidad por su gestión administrativa y política en el
            desarrollo de sus proyectos educativos ambientales y prevención en el campo de la salud pública.</p>
        </div>
      </div>
    </section>

    <!-- <section id="comuna" class="container">
      <div class="row">
        <div class="col-sm">
          <h2 class="text-green">Mi comuna</h2>
          <p>La comuna 4 tiene una interesante geografía con una larga trayectoria historica y cultural.</p>
        </div>
      </div>
      <div class="row media">
        <div class="col-sm-12 col-lg-4">

        <img class="mr-3" src="" alt="Generic placeholder image">
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
          <h2 class="text-green">Movilidad</h2>
          <p>La comuna 4 cuenta con una alta variedad de rutas y medios de transporte para el servicio
            público de transporte, que atienden su población.</p>
        </div>
      </div>

      <div class="row media">

        <div class="my-border border rounded col-sm-12 col-lg-5 p-4 mb-3">
          <div class="row">
            <div class="col-sm-3">
              <img class="mr-3" src="" alt="Generic placeholder image">
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
              <img class="mr-3" src="" alt="Generic placeholder image">
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
              <img class="mr-3" src="" alt="Generic placeholder image">
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
              <img class="mr-3" src="" alt="Generic placeholder image">
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
              <img class="mr-3" src="" alt="Generic placeholder image">
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
    </section> -->

    <section id="blog">
      <div class="row my-pt">
        <div class="col-12">
          <div class="bg-1">
            <div class="row my-pt">
              <div class="col-12 pt-5">
                <h2 class="text-white ml-5 mt-5 pt-1">Blog</h2>
              </div>
              <div class="col-8">
                <p class="text-white text-left mt-1 pl-5 pr-5">Suscribete y entérate de todo
                  lo que pasa en nuestra comuna y en tu barrio aquí en nuestro blog y en nuestra página de facebook.</p>
                <a class="nav-link text-right text-success" href="#">Ir al blog</a>
              </div>
            </div>
            <!-- imagen -->
          </div>
        </div>
      </div>
      <div class="row my-pt pl-5 pr-5">
        <div class="col">
          entrada 1
        </div>
        <div class="col">
          entrada 2
        </div>
        <div class="col">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </section>

    <section id="social-media">
      <div class="row">
        <div class="col-sm">
          <h1>aqui va la api de fb</h1>
        </div>
      </div>
    </section>

    <section id="contacto" class="mt-5">
      <div class="row my-pt">
        <div class="col-12">
          <div class="bg-1">
            <div class="row my-pt">
              <div class="col-12 pt-5">
                <h2 class="text-white ml-5 mt-5 pt-1">Contacto</h2>
              </div>
              <div class="col-8">
                <p class="text-white text-left mt-1 pl-5 pr-5">Escribenos y mandanos
                  tus inquietudes, sugerencias o aportes.</p>
              </div>
            </div>
            <!-- imagen -->
          </div>
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
    </section>

    <?php get_footer(); ?>
