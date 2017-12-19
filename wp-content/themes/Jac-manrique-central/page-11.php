<?php get_header(11); ?>
    <article id="home">
      <div id="comunavirtual" class="carousel slide animated bounceInLeft" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#comunavirtual" data-slide-to="0" class="active"></li>
          <li data-target="#comunavirtual" data-slide-to="1"></li>
          <li data-target="#comunavirtual" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/comuna-carrusel-1.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/comuna-carrusel-2.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/comuna-carrusel-3.jpg">
          </div>
        </div>
        <a class="carousel-control-prev" href="#comunavirtual" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="material-icons">chevron_left</i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#comunavirtual" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="material-icons">chevron_right</i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </article>
    <section id="comuna">
      <div class="row bg-purpura pl-5 pr-5 m-0">
        <div class="col-sm-12">
          <h2 class="text-white pt-5">Mi comuna</h2>
        </div>
        <div class="col-sm-12 col-md-6 float-left">
          <p class="text-white">La comuna 4 tiene una interesante geografía con una larga trayectoria historica y cultural.</p>
        </div>
      </div>
      <div class="row media mt-5 pl-5 pr-5 mb-5">
        <div class="col-sm-12 col-lg-5">
          <img class="ml-3 w-100 rounded pb-3" src="<?php bloginfo('template_url'); ?>/img/comuna-4.jpg">
        </div>
        <div class="col-sm-12 col-lg-7">
          <div class="media-body media-purpura">
            <h2 class="mt-0 text-purpura">Comuna 4</h2>
            <p><b class="text-purpura">Construcción:</b> su inicio fue en el año de 1.920 con la construcción del tranvía eléctrico
              se empezó a poblar y construir nuestra comuna.</p>
            <p><b class="text-purpura">Ubicación:</b> la comuna 4 Aranjuez está ubicada en la zona nororiental de la ciudad de
              Medellín, compuesta por 14 barrios y 17 equipamientos institucionales.</p>
            <p><b class="text-purpura">Límites:</b> la comuna 4 limita por el norte con las comunas 1 y 2 ( Popular y Santa Cruz )
              nos separa la quebrada la Rosa; por el sur con la comuna 10 ( la Candelaria ) calle 67
              Barranquilla; por el oriente con la comuna 3 ( Manrique ) carrera 45 avenida Carlos Gardel
              y por el occidente con el Rio Medellín.</p>
            <p><b class="text-purpura">Población:</b> el número de habitantes es de 170.000 de acuerdo con el censo realizado en
              el año 2.005.</p>
            <p><b class="text-purpura">Área:</b> el área de nuestro territorio tiene una extensión de 486,45 hectáreas que
              corresponden al 30.9% de la zona nororiental y al 4,7 del suelo urbano de Medellín.</p>
            <p><b class="text-purpura">Estratificación:</b> los estratos de la comuna 4 Aranjuez son el 1, 2 y 3.</p>
            <p><b class="text-purpura">Viviendas:</b> en nuestro territorio se encuentran 45.000 viviendas entre casas,
              apartamentos y locales comerciales.</p>
          </div>
        </div>
      </div>
      <div class="row pl-5 pr-5 mb-3">
        <div class="col-12">
          <h2 class="mt-0 text-purpura text-center">Sedes sociales</h2>
        </div>
      </div>
      <div class="row pl-5 pr-5 mb-5 d-flex justify-content-center">
          <!-- sede01 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede01">
                     <img src="<?php bloginfo('template_url'); ?>/img/Sede-Social-El-Bosque.jpg">
                     <div class="car-body">
                         <h5 class="card-header text-purpura">Sede social El Bosque</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="sede01" tabindex="-1" role="dialog" aria-labelledby="Sede social El Bosque" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title text-purpura">Sede social El Bosque</h5>
                        <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Sede-Social-El-Bosque.jpg">
                  <div class="modal-footer bg-light d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede13">
                          <i class="material-icons text-center text-purpura">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede02">
                          <i class="material-icons text-center text-purpura">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sede02 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede02">
                     <img src="<?php bloginfo('template_url'); ?>/img/Sede-Social-Campo-Valdes-Calvario.jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social Campo Valdés Calvario</h5>
                     </div>
                </a>
                <div class="modal fade" id="sede02" tabindex="-1" role="dialog" aria-labelledby="Sede social Campo Valdés Calvario" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-purpura">Sede social Campo Valdés Calvario</h5>
                            <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Sede-Social-Campo-Valdes-Calvario.jpg">
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede01">
                              <i class="material-icons text-center text-purpura">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede03">
                              <i class="material-icons text-center text-purpura">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- sede03 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede03">
                     <img src="<?php bloginfo('template_url'); ?>/img/Sede-Social-Alamos-(2).jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social Álamos</h5>
                     </div>
                </a>
                <div class="modal fade" id="sede03" tabindex="-1" role="dialog" aria-labelledby="Sede social Álamos" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-purpura">Sede social Álamos</h5>
                            <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Sede-Social-Alamos-(2).jpg">
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede02">
                              <i class="material-icons text-center text-purpura">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede04">
                              <i class="material-icons text-purpura text-center">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- sede04 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede04">
                     <img src="<?php bloginfo('template_url'); ?>/img/Sede-San-Pedro-(1).jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social San Pedro</h5>
                     </div>
                </a>
                <div class="modal fade" id="sede04" tabindex="-1" role="dialog" aria-labelledby="Sede social San Pedro" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-purpura">Sede social San Pedro</h5>
                            <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Sede-San-Pedro-(1).jpg">
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede03">
                              <i class="material-icons text-purpura text-center">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede05">
                              <i class="material-icons text-purpura text-center">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- sede05 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede05">
                     <img src="<?php bloginfo('template_url'); ?>/img/Sede-San-Cayetano-(1).jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social San Cayetano</h5>
                     </div>
                </a>
                <div class="modal fade" id="sede05" tabindex="-1" role="dialog" aria-labelledby="Sede social San Cayetano" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-purpura">Sede social San Cayetano</h5>
                            <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Sede-San-Cayetano-(1).jpg">
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede04">
                              <i class="material-icons text-purpura text-center">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede06">
                              <i class="material-icons text-purpura text-center">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- sede06 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede06">
                     <img src="<?php bloginfo('template_url'); ?>/img/sede-s-moravia-oriente-(1).jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social Moravia Oriente</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="sede06" tabindex="-1" role="dialog" aria-labelledby="Sede social Moravia Oriente" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-purpura">Sede social Moravia Oriente</h5>
                        <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/sede-s-moravia-oriente-(1).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede05">
                          <i class="material-icons text-center text-purpura">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede07">
                          <i class="material-icons text-center text-purpura">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sede07 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede07">
                     <img src="<?php bloginfo('template_url'); ?>/img/sede-s-miranda.jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social Miranda</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="sede07" tabindex="-1" role="dialog" aria-labelledby="Sede social Miranda" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-purpura">Sede social Miranda</h5>
                        <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/sede-s-miranda.jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede06">
                          <i class="material-icons text-center text-purpura">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede08">
                          <i class="material-icons text-center text-purpura">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sede08 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede08">
                     <img src="<?php bloginfo('template_url'); ?>/img/sede-s-brasilia.jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social Prado Brasilia</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="sede08" tabindex="-1" role="dialog" aria-labelledby="Sede social Prado Brasilia" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-purpura">Sede social Prado Brasilia</h5>
                        <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/sede-s-brasilia.jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede07">
                          <i class="material-icons text-center text-purpura">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede09">
                          <i class="material-icons text-center text-purpura">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sede09 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede09">
                     <img src="<?php bloginfo('template_url'); ?>/img/sede-s-berlin.jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social Berlín</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="sede09" tabindex="-1" role="dialog" aria-labelledby="Sede social Berlín" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-purpura">Sede social Berlín</h5>
                        <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/sede-s-berlin.jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede08">
                          <i class="material-icons text-center text-purpura">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede10">
                          <i class="material-icons text-center text-purpura">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sede10 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede10">
                     <img src="<?php bloginfo('template_url'); ?>/img/Sede-La-Pinuela-(3).jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social La Piñuela</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="sede10" tabindex="-1" role="dialog" aria-labelledby="Sede social La Piñuela" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-purpura">Sede social La Piñuela</h5>
                        <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Sede-La-Pinuela-(3).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede09">
                          <i class="material-icons text-center text-purpura">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede11">
                          <i class="material-icons text-center text-purpura">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sede11 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede11">
                     <img src="<?php bloginfo('template_url'); ?>/img/Sede-la-Maquinita-(3).jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social La Maquinita</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="sede11" tabindex="-1" role="dialog" aria-labelledby="Sede social La Maquinita" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-purpura">Sede social La Maquinita</h5>
                        <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Sede-la-Maquinita-(3).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede10">
                          <i class="material-icons text-center text-purpura">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede12">
                          <i class="material-icons text-center text-purpura">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sede12 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede12">
                     <img src="<?php bloginfo('template_url'); ?>/img/Sede-Social-San-isidro-(1).jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social San Isidro</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="sede12" tabindex="-1" role="dialog" aria-labelledby="Sede social San Isidro" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-purpura">Sede social San Isidro</h5>
                        <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Sede-Social-San-isidro-(1).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede11">
                          <i class="material-icons text-center text-purpura">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede13">
                          <i class="material-icons text-center text-purpura">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sede13 -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#sede13">
                     <img src="<?php bloginfo('template_url'); ?>/img/Sede-Social-San-Nicolas-(1).jpg">
                     <div class="car-body text-purpura">
                         <h5 class="card-header">Sede social San Nicolás</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="sede13" tabindex="-1" role="dialog" aria-labelledby="Sede social San Nicolás" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-purpura">Sede social San Nicolás</h5>
                        <button type="button" class="close text-purpura" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Sede-Social-San-Nicolas-(1).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede13">
                          <i class="material-icons text-center text-purpura">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#sede01">
                          <i class="material-icons text-center text-purpura">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <main class="mt-5 pt-3">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
      </div>
    </main>

    <section id="movilidad">
      <div class="row bg-naranja pl-5 pr-5 m-0">
        <div class="col-sm-12">
          <h2 class="text-white pt-5">Movilidad</h2>
        </div>
        <div class="col-sm-12 col-md-6">
          <p class="text-white">La comuna 4 cuenta con una alta variedad de rutas y medios de transporte para el servicio
            público de transporte, que atienden su población.</p>
        </div>
      </div>

      <div class="row media p-5 mt-5 d-flex justify-content-center">
        <div class="my-border border rounded col-sm-8 p-4 mb-3">
          <div class="row">
            <div class="col-sm-2">
              <img class="pr-3" src="<?php bloginfo('template_url'); ?>/img/bus-naranja-icon.png" alt="buses">
            </div>
            <div class="col-sm-10 d-flex align-items-center">
              <div class="media-body">
                <p>Las empresas de buses que recorren el territorio son: Aranjuez, Campo Valdés, Santa Cruz.
                  Combuses, Zamora, Bello y Coopetransa.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="my-border border rounded col-sm-8 p-4 mb-3">
          <div class="row">
            <div class="col-sm-2">
              <img class="pr-3" src="<?php bloginfo('template_url'); ?>/img/taxi-naranja.png" alt="Taxis">
            </div>
            <div class="col-sm-10 d-flex align-items-center">
              <div class="media-body">
                <p>El servicio de taxis que circulan en nuestras vías es muy eficiente.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="my-border border rounded col-sm-8 p-4 mb-3">
          <div class="row">
            <div class="col-sm-2">
              <img class="pr-3" src="<?php bloginfo('template_url'); ?>/img/metro-naranja-icon.png" alt="metro">
            </div>
            <div class="col-sm-10 d-flex align-items-center">
              <div class="media-body">
                <p>El Metro de Medellín tiene cuatro estaciones en la comuna 4 Aranjuez que son: Estación
                  Hospital, Estación Universidad de Antioquia, Estación Terminal de Transporte y la Estación
                  Tricentenario.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="my-border border rounded col-sm-8 p-4 mb-3">
          <div class="row">
            <div class="col-sm-2">
              <img class="pr-3" src="<?php bloginfo('template_url'); ?>/img/metroplus-naranja-icon.png" alt="metro plus">
            </div>
            <div class="col-sm-10 d-flex align-items-center">
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

        <div class="my-border border rounded col-sm-8 p-4 mb-3">
          <div class="row">
            <div class="col-sm-2">
              <img class="pr-3" src="<?php bloginfo('template_url'); ?>/img/carro-naranja-icon.png" alt="carro">
            </div>
            <div class="col-sm-10 d-flex align-items-center">
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

    <section id="quebradas" class="mt-5">
      <div class="row bg-cian pl-5 pr-5 m-0">
        <div class="col-sm-12">
          <h2 class="text-white pt-3">Quebradas</h2>
        </div>
        <div class="col-sm-12 col-md-6 float-left">
          <p class="text-white">En la comuna 4 Aranjuez de la Zona Nororiental hasta el río Medellín la recorren 8 Quebradas que son.</p>
        </div>
      </div>
      <div class="row media mt-5 pl-5 pr-5">
        <div class="col-sm-12 col-lg-5">
          <img class="ml-3 mr-5 w-100 rounded pb-3" src="<?php bloginfo('template_url'); ?>/img/quebradas.jpg">
        </div>
        <div class="col-sm-12 col-lg-7">
          <div class="media-body row d-flex justify-content-start">
            <div class="col-12 pl-5 pr-5">
              <p>
                <img src="<?php bloginfo('template_url'); ?>/img/quebradas-rios-icon.png" alt="quebradas-icon">
                <b class="text-cian"> El Ahorcado:</b>
                Recorre los siguientes barrios Manrique Central N°1, San Pedro, Sevilla y por la calle 67 Barranquilla llega al rio Medellín.
              </p>
            </div>
            <div class="col-12 pl-5 pr-5">
              <p>
                <img src="<?php bloginfo('template_url'); ?>/img/quebradas-rios-icon.png" alt="quebradas-icon">
                <b class="text-cian">La Honda:</b>
                Recorre los siguientes barrios Manrique Central n°1, San Pedro, en el Jardín Botánico se une la quebrada el molino.
              </p>
            </div>
            <div class="col-12 pl-5 pr-5">
              <p>
                <img src="<?php bloginfo('template_url'); ?>/img/quebradas-rios-icon.png" alt="quebradas-icon">
                <b class="text-cian">El Molino:</b>
                Recorre los siguientes barrios Manrique Central N°1, San Pedro, Moravia donde desemboca al río Medellín.
              </p>
            </div>
            <div class="col-12 pl-5 pr-5">
              <p>
                <img src="<?php bloginfo('template_url'); ?>/img/quebradas-rios-icon.png" alt="quebradas-icon">
                <b class="text-cian">El Remolino:</b>
                Recorre los siguientes barrios Campo Valdés y Brasilia donde se une a la quebrada Santa Inés.
              </p>
            </div>
            <div class="col-12 pl-5 pr-5">
              <p>
                <img src="<?php bloginfo('template_url'); ?>/img/quebradas-rios-icon.png" alt="quebradas-icon">
                <b class="text-cian">La Maquinita:</b>
                Recorre los siguientes barrios las Esmeraldas, Campo Valdés y Brasilia donde se une a la quebrada la Bermejala.
              </p>
            </div>
            <div class="col-12 pl-5 pr-5">
              <p>
                <img src="<?php bloginfo('template_url'); ?>/img/quebradas-rios-icon.png" alt="quebradas-icon">
                <b class="text-cian">La Santa Ines:</b>
                Recorre los siguientes barrios Campo Valdés, Brasilia donde se une a la quebrada el molino.
              </p>
            </div>
            <div class="col-12 pl-5 pr-5">
              <p>
                <img src="<?php bloginfo('template_url'); ?>/img/quebradas-rios-icon.png" alt="quebradas-icon">
                <b class="text-cian">La Bermejala:</b>
                Recorre los siguientes barrios las Esmeraldas, Berlín, la piñuela, Brasilia, Aranjuez, Miranda, los Álamos y Moravia donde desemboca al río Medellín.
              </p>
            </div>
            <div class="col-12 pl-5 pr-5">
              <p>
                <img src="<?php bloginfo('template_url'); ?>/img/quebradas-rios-icon.png" alt="quebradas-icon">
                <b class="text-cian">La Rosa:</b>
                Recorre los siguientes barrios Berlín, San Isidro y Palermo donde desemboca al río Medellín.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="deportivos" class="mt-5">
      <div class="row bg-verde pl-5 pr-5 m-0">
        <div class="col-sm-12">
          <h2 class="text-white pt-5">Escenarios deportivos</h2>
        </div>
        <div class="col-sm-12 col-md-6 float-left">
          <p class="text-white">La comuna 4 cuenta con 6 canchas sintéticas y 9 placas polideportivas.</p>
        </div>
      </div>
      <div id="deportesslider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#deportesslider" data-slide-to="0" class="active"></li>
          <li data-target="#deportesslider" data-slide-to="1"></li>
          <li data-target="#deportesslider" data-slide-to="2"></li>
          <li data-target="#deportesslider" data-slide-to="3"></li>
          <li data-target="#deportesslider" data-slide-to="4"></li>
          <li data-target="#deportesslider" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Placa-deportiva-Moravia-(1).jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Placa deportiva Moravia</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Placa-deportiva-San-Isidro-(1).jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Placa deportiva San Isidro</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Placa-deportiva-San-Isidro-(3).jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Placa deportiva San Isidro</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Parque-Skate-la-Piñuela-(1).jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Parque Skate La Piñuela</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Placa-deportiva-Brasilia-(1).jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Placa deportiva Brasilia</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Placa-deportiva-Palermo.jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Placa deportiva Palermo</h3>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#deportesslider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="material-icons">chevron_left</i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#deportesslider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="material-icons">chevron_right</i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section id="ciudad">
      <div class="row bg-violeta pl-5 mr-0 ml-0 mb-5">
        <div class="col-sm-12">
          <h2 class="text-white pt-5">Equipamientos de ciudad</h2>
        </div>
        <div class="col-sm-12 col-md-8 float-left">
          <p class="text-white">En la comuna 4 Aranjuez existen en su territorio 17 equipamientos de ciudad
            para visitar por todos los ciudadanos de Medellín, Antioquia, Colombia y ciudadanos extranjeros que nos visitan.</p>
        </div>
      </div>
      <div class="row pl-5 pr-5 mb-5 d-flex justify-content-center">
          <!-- ciudad01 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad01">
                    <img src="<?php bloginfo('template_url'); ?>/img/U-de-A-(2).jpg">
                     <div class="car-body">
                         <h5 class="card-header text-violeta">Universidad de Antioquia</h5>
                     </div>
                    <div class="card-footer text-dark">
                        <p class="card-text">Es la principal institución académica de Antioquia y una de las
                            mejores universidades de Colombia, gracias a sus logros investigativos, culturales y académicos.
                            <br>La ciudadela universitaria inicio funciones en octubre del año 1.968.
                        </p>
                    </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad01" tabindex="-1" role="dialog" aria-labelledby="Universidad de Antioquia" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title text-violeta">Universidad de Antioquia</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="udeaslider" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#udeaslider" data-slide-to="0" class="active"></li>
                        <li data-target="#udeaslider" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/U-de-A-(2).jpg">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/U-de-A-(3).jpg">
                        </div>
                      </div>
                    </div>
                  <div class="modal-footer bg-light d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad19">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad02">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad02 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad02">
                     <img src="<?php bloginfo('template_url'); ?>/img/Ruta-N-(3).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Ruta n</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Es el centro de innovación y negocios de Medellín,
                             una corporación creada por la Alcaldía de Medellín, Une y Epm para promover el desarrollo
                             de negocios innovadores basados en la tecnología que incrementan la competitividad de la ciudad y la región.
                             <br>Nace en el año 2009.
                         </p>
                     </div>
                </a>
                <div class="modal fade" id="ciudad02" tabindex="-1" role="dialog" aria-labelledby="Ruta n" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-violeta">Ruta n</h5>
                            <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div id="rutanslider" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#rutanslider" data-slide-to="0" class="active"></li>
                            <li data-target="#rutanslider" data-slide-to="1"></li>
                            <li data-target="#rutanslider" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Ruta-N-(3).jpg">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Ruta-N-(4).jpg">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Ruta-N-(9).jpg">
                            </div>
                          </div>
                        </div>
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad01">
                              <i class="material-icons text-center text-violeta">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad03">
                              <i class="material-icons text-center text-violeta">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- ciudad03 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad03">
                     <img src="<?php bloginfo('template_url'); ?>/img/Unidad-Permanente-de-Justicia.jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Unidad permanente de justicia</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Conocida como "la UPJ el Bosque". Es un centro de prestación de servicios de justicia formal e informal,
                             presta los servicios a la comunidad en justicia, oportuna y gratuita.
                         </p>
                     </div>
                </a>
                <div class="modal fade" id="ciudad03" tabindex="-1" role="dialog" aria-labelledby="Unidad permanente de justicia" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-violeta">Unidad permanente de justicia</h5>
                            <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Unidad-Permanente-de-Justicia.jpg">
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad02">
                              <i class="material-icons text-center text-violeta">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad04">
                              <i class="material-icons text-violeta text-center">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- ciudad04 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad04">
                     <img src="<?php bloginfo('template_url'); ?>/img/Planetario-(13).jpg" alt="planetario">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Planetario</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Ésta ubicado adyacente al Parque de los Deseos de Medellín,
                             inicia funciones en el mes de octubre del año 1984; cuenta con un Domo de proyecciones.
                             Un espacio para reuniones pedagógicas sobre el Universo y la Astronomía,
                             las diferentes programaciones se hacen bajo la cúpula de uno de los Domos más inclinados del mundo,
                             con unos 27 grados, es considerado como un museo.
                         </p>
                     </div>
                </a>
                <div class="modal fade" id="ciudad04" tabindex="-1" role="dialog" aria-labelledby="Planetario" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-violeta">Planetario</h5>
                            <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div id="planetarioslider" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#planetarioslider" data-slide-to="0" class="active"></li>
                            <li data-target="#planetarioslider" data-slide-to="1"></li>
                            <li data-target="#planetarioslider" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Planetario-(13).jpg">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Planetario-(14).jpg">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Planetario-(16).jpg">
                            </div>
                          </div>
                        </div>
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad03">
                              <i class="material-icons text-violeta text-center">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad05">
                              <i class="material-icons text-violeta text-center">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- ciudad05 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad05">
                     <img src="<?php bloginfo('template_url'); ?>/img/Jardín-Botanico-(1).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Jardín Botánico</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Fue construido en nombre del botánico Joaquín Antonio Uribe;
                             cuenta con un recinto llamado Orquideorama lugar para la exposición de flores,
                             alberga 1000 especies vivas; en el año 1985 fue declarado Patrimonio Cultural de Medellín.
                         </p>
                     </div>
                </a>
                <div class="modal fade" id="ciudad05" tabindex="-1" role="dialog" aria-labelledby="Jardín Botánico" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-violeta">Jardín Botánico</h5>
                            <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div id="jardinslider" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#jardinslider" data-slide-to="0" class="active"></li>
                            <li data-target="#jardinslider" data-slide-to="1"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Jardín-Botanico-(1).jpg">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Jardín-Botanico-(6).jpg">
                            </div>
                          </div>
                        </div>
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad04">
                              <i class="material-icons text-violeta text-center">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad06">
                              <i class="material-icons text-violeta text-center">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- ciudad06 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad06">
                     <img src="<?php bloginfo('template_url'); ?>/img/Explora-(2).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Parque Explora</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Es un museo interactivo para la apropiación y divulgación
                             de la ciencia y la tecnología. Fue abierto al público en el año de 2007.
                             Alberga más de 300 experiencias interactivas, un auditorio en 3D, una sala infantil,
                             sala de exposiciones temporales y el acuario de agua dulce más grande de Latinoamérica.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad06" tabindex="-1" role="dialog" aria-labelledby="Parque Explora" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Parque Explora</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Explora-(2).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad05">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad07">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad07 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad07">
                     <img src="<?php bloginfo('template_url'); ?>/img/Centro-Cultural-Moravia-(1).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Centro de desarrollo cultural de Moravia</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">La casa de todos es un espacio para los encuentros,
                             las Expresiones Artísticas, lo Cultural y lo Comunitario. Se fomenta la creación,
                             la comunicación, la cooperación, la cultura, lo lúdico, lo comunal, lo artístico,
                             la música, la danza, las artes plásticas y lo escénico.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad07" tabindex="-1" role="dialog" aria-labelledby="Centro de desarrollo cultural de Moravia" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Centro de desarrollo cultural de Moravia</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Centro-Cultural-Moravia-(1).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad06">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad08">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad08 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad08">
                     <img src="<?php bloginfo('template_url'); ?>/img/Museo-Pedro-Nel-Gomez-(6).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Museo Pedro Nel Gómez</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Fue inaugurado en el año de 1975, es un sitio cultural constituido
                             por el maestro Pedro Nel Gómez con el fin de conservar la casa, su acervo artístico,
                             bibliográfico y documental como patrimonio de la ciudad de Medellín.
                             Guarda cerca de 3.015 obras de arte entre dibujos, acuarelas y oleos.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad08" tabindex="-1" role="dialog" aria-labelledby="Museo Pedro Nel Gómez" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Museo Pedro Nel Gómez</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="pedroslider" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#pedroslider" data-slide-to="0" class="active"></li>
                        <li data-target="#pedroslider" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Museo-Pedro-Nel-Gomez-(6).jpg">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Museo-Pedro-Nel-Gomez-(7).jpg">
                        </div>
                      </div>
                    </div>
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad07">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad09">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad09 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad09">
                     <img src="<?php bloginfo('template_url'); ?>/img/parque-aranjuez.jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Parque de Aranjuez</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Ubicado en el barrio Berlín entre las calles 93 a la 94
                             y entre las carreras 46 a la 49ª; el punto de referencia es la iglesia de
                             San Nicolás de Tolentino, Tiene una placa polideportiva y la estación Aranjuez del Metro plus.
                             Los parques son escenarios para un sano esparcimiento de la comunidad que los visita.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad09" tabindex="-1" role="dialog" aria-labelledby="Parque de Aranjuez" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Parque de Aranjuez</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/parque-aranjuez.jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad08">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad10">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad10 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad10">
                     <img src="<?php bloginfo('template_url'); ?>/img/Buen-Comienzo-de-Moravia-(1).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Buen comienzo Moravia</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad10" tabindex="-1" role="dialog" aria-labelledby="Buen comienzo Moravia" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Buen comienzo Moravia</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Buen-Comienzo-de-Moravia-(1).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad09">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad11">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad11 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad11">
                     <img src="<?php bloginfo('template_url'); ?>/img/Casa-Gardeliana-(2).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Casa Gardeliana</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad11" tabindex="-1" role="dialog" aria-labelledby="Casa Gardeliana" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Casa Gardeliana</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="gardelslider" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#gardelslider" data-slide-to="0" class="active"></li>
                        <li data-target="#gardelslider" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Casa-Gardeliana-(2).jpg">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Casa-Gardeliana-(7).jpg">
                        </div>
                      </div>
                    </div>
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad10">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad12">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad12 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad12">
                     <img src="<?php bloginfo('template_url'); ?>/img/Hospital-de-los-Niños-(2).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Hospital de los niños</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad12" tabindex="-1" role="dialog" aria-labelledby="Hospital de los niños" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Hospital de los niños</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/Hospital-de-los-Niños-(2).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad11">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad13">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad13 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad13">
                     <img src="<?php bloginfo('template_url'); ?>/img/Leon-XIII-(2).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Hospital León XIII</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad13" tabindex="-1" role="dialog" aria-labelledby="Hospital León XIII" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Hospital León XIII</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="leonslider" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#leonslider" data-slide-to="0" class="active"></li>
                        <li data-target="#leonslider" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Leon-XIII-(2).jpg">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Leon-XIII-(6).jpg">
                        </div>
                      </div>
                    </div>
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad12">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad14">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad14 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad14">
                     <img src="<?php bloginfo('template_url'); ?>/img/Comfama-(1).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Comfama</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Sede del barrio Aranjuez. Tiene espacios para divertirte
                             como: piscina, gimnasio, turco, cancha de micro fútbol, biblioteca, parqueadero,
                             teatro y por supuesto los niños tienen sus espacios para aprender y recrearse.
                             En el pasado allí funcionaba el manicomio de la ciudad.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad14" tabindex="-1" role="dialog" aria-labelledby="Comfama" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Comfama</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Comfama-(1).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad13">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad15">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad16 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad16">
                     <img src="<?php bloginfo('template_url'); ?>/img/Plaza-de-Campo-Valdes-(1).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Plaza de Campo Valdés</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Inicio labores en el año de 1969.
                             Es un establecimiento de comercio mayorista de abarrotes,
                             cuenta con un amplio parqueadero de cargue y descargue.
                             <br>
                             Su slogan es "Plaza de Mercado, para Mercar y Regatear".
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad16" tabindex="-1" role="dialog" aria-labelledby="Plaza de Campo Valdés" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Plaza de Campo Valdés</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Plaza-de-Campo-Valdes-(1).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad15">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad17">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad17 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad17">
                     <img src="<?php bloginfo('template_url'); ?>/img/Parque-Norte-(2).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Parque Norte</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Son 160.000 metros cuadrados para el entretenimiento y la naturaleza.
                             El Parque Norte es un espacio de diversión, sana convivencia, cultura y recreación de
                             la ciudad de Medellín. Tiene el lago más grande de Latinoamérica.
                             <br>
                             Cuenta con 25 atracciones mecánicas para el disfrute de todos los grupos poblacionales que lo visitan.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad17" tabindex="-1" role="dialog" aria-labelledby="Parque Norte" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Parque Norte</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="norteslider" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#norteslider" data-slide-to="0" class="active"></li>
                        <li data-target="#norteslider" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Parque-Norte-(2).jpg">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Parque-Norte-(3).jpg">
                        </div>
                      </div>
                    </div>
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad16">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad18">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad18 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad18">
                     <img src="<?php bloginfo('template_url'); ?>/img/Cementerio-de-San-Pedro-(2).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Museo cementerio San Pedro</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Fue fundado en el año de 1842.
                             <br>En el Cementerio se encuentran inhumadas personas que fueron muy importantes
                             del país como los expresidentes Mariano Ospina Rodríguez, Carlos E. Restrepo y
                             Pedro Nel Ospina, escritores y artistas como María Cano, Jorge Isaac, Bernardo Vieco y Fidel Cano.
                             Declarado Monumento Nacional en el año de 1999.
                             Los mausoleos se destacan tanto por sus obras esculturales y arquitectónicas que son muy representativas del arte fúnebre.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad18" tabindex="-1" role="dialog" aria-labelledby="Museo cementerio San Pedro" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Museo cementerio San Pedro</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="cementerioslider" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#cementerioslider" data-slide-to="0" class="active"></li>
                        <li data-target="#cementerioslider" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Cementerio-de-San-Pedro-(2).jpg">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Cementerio-de-San-Pedro-(4).jpg">
                        </div>
                      </div>
                    </div>
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad17">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad19">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ciudad19 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#ciudad19">
                     <img src="<?php bloginfo('template_url'); ?>/img/biblioteca-piloto-(1).jpg">
                     <div class="car-body text-violeta">
                         <h5 class="card-header">Biblioteca Pública piloto Juan Zuleta Ferrer</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">Inicia servicios en el año de 1986 con el objetivo
                             de descentralizar la biblioteca Pública Piloto de la ciudad de Medellín.
                             Sus funciones básicas son: educar, informar, investigar, consultar,
                             culturalizar y recrear a la comunidad en general.
                             La filial lleva el nombre de Juan Zuleta Ferrer en homenaje al ilustre escritor y periodista Antiqueño.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="ciudad19" tabindex="-1" role="dialog" aria-labelledby="Biblioteca Pública piloto Juan Zuleta Ferrer" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-violeta">Biblioteca Pública piloto Juan Zuleta Ferrer</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/biblioteca-piloto-(1).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad18">
                          <i class="material-icons text-center text-violeta">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#ciudad01">
                          <i class="material-icons text-center text-violeta">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section id="instituciones">
      <div class="row bg-azul pl-5 pr-5 mb-5">
        <div class="col-sm-12">
          <h2 class="text-white pt-5">Instituciones Educativas</h2>
        </div>
      </div>

      <div class="row pl-5 pr-5 mb-5 d-flex justify-content-center">
          <!-- colegio01 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio01">
                    <img src="<?php bloginfo('template_url'); ?>/img/I.E-Alfonso-Mora-Naranjo.jpg">
                     <div class="car-body">
                         <h5 class="card-header text-azul">Institución Educativa Alfonso Mora Naranjo</h5>
                     </div>
                    <div class="card-footer text-dark">
                        <p class="card-text">Cr. 48A #77-68
                            <br>Barrio Campo Valdés.
                        </p>
                    </div>
                </a>
            </div>
            <div class="modal fade" id="colegio01" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa Alfonso Mora Naranjo" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title text-azul">Institución Educativa Alfonso Mora Naranjo</h5>
                        <button type="button" class="close text-azul" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/img/I.E-Alfonso-Mora-Naranjo.jpg">
                  <div class="modal-footer bg-light d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio12">
                          <i class="material-icons text-center text-azul">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio02">
                          <i class="material-icons text-center text-azul">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- colegio02 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio02">
                     <img src="<?php bloginfo('template_url'); ?>/img/I.E-Camilo-Torres-Restrepo.jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa Presbitero Camilo Torres Restrepo</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">
                             CR. 49 # 83-34
                             <br>Barrio Campo Valdés La Maquinita.
                         </p>
                     </div>
                </a>
                <div class="modal fade" id="colegio02" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa Presbitero Camilo Torres Restrepo" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-azul">Institución Educativa Presbitero Camilo Torres Restrepo</h5>
                            <button type="button" class="close text-azul" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/img/I.E-Camilo-Torres-Restrepo.jpg">
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio01">
                              <i class="material-icons text-center text-azul">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio03">
                              <i class="material-icons text-center text-azul">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- colegio03 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio03">
                     <img src="<?php bloginfo('template_url'); ?>/img/I.E-Campo-Valdes.jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa Campo Valdés</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">
                             Cl. 83 # 47-33
                             <br>Barrio Campo Valdés La Maquinita.
                         </p>
                     </div>
                </a>
                <div class="modal fade" id="colegio03" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa Campo Valdés" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-azul">Institución Educativa Campo Valdés</h5>
                            <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/img/I.E-Campo-Valdes.jpg">
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio02">
                              <i class="material-icons text-center text-azul">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio04">
                              <i class="material-icons text-azul text-center">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- colegio04 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio04">
                     <img src="<?php bloginfo('template_url'); ?>/img/I.E-Francisco-Miranda-(2).jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa Francisco Miranda</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">
                             Cr. 51C # 79-56
                             <br>Barrio Miranda.
                         </p>
                     </div>
                </a>
                <div class="modal fade" id="colegio04" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa Francisco Miranda" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-azul">Institución Educativa Francisco Miranda</h5>
                            <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/img/I.E-Francisco-Miranda-(2).jpg">
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio03">
                              <i class="material-icons text-azul text-center">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio05">
                              <i class="material-icons text-azul text-center">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- colegio05 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio05">
                     <img src="<?php bloginfo('template_url'); ?>/img/I.E-Hernan-Toro-(2).jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa Hernán Toro</h5>
                     </div>
                </a>
                <div class="modal fade" id="colegio05" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa Hernán Toro" aria-hidden="true">
                  <div class="modal-dialog modal-lg bg-light">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-violeta">Institución Educativa Hernán Toro</h5>
                            <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/img/I.E-Hernan-Toro-(2).jpg">
                      <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio04">
                              <i class="material-icons text-violeta text-center">chevron_left</i>
                          </button>
                          <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio06">
                              <i class="material-icons text-violeta text-center">chevron_right</i>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- colegio06 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio06">
                     <img src="<?php bloginfo('template_url'); ?>/img/I.E-Lorenza-Villegas-(3).jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa Lorenza Villegas</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">
                             Cr. 51 # 87-40
                             <br>Barrio Aranjuez.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="colegio06" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa Lorenza Villegas" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-azul">Institución Educativa Lorenza Villegas</h5>
                        <button type="button" class="close text-azul" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/img/I.E-Lorenza-Villegas-(3).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio05">
                          <i class="material-icons text-center text-azul">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio07">
                          <i class="material-icons text-center text-azul">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- colegio07 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio07">
                     <img src="<?php bloginfo('template_url'); ?>/img/I.E-San-Agustin-(1).jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa San Agustin</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">
                             Cl. 88 A # 51B-91
                             <br>Barrio San Cayetano.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="colegio07" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa San Agustin" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-azul">Institución Educativa San Agustin</h5>
                        <button type="button" class="close text-violeta" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/I.E-San-Agustin-(1).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio06">
                          <i class="material-icons text-center text-azul">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio08">
                          <i class="material-icons text-center text-azul">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- colegio08 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio08">
                     <img src="<?php bloginfo('template_url'); ?>/img/I.E-Tomas-Carrasquilla-(2).jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa Tomas Carrasquilla</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="colegio08" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa Tomas Carrasquilla" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-azul">Institución Educativa Tomas Carrasquilla</h5>
                        <button type="button" class="close text-azul" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/img/I.E-Tomas-Carrasquilla-(2).jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio07">
                          <i class="material-icons text-center text-azul">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio09">
                          <i class="material-icons text-center text-azul">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- colegio09 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio09">
                     <img src="<?php bloginfo('template_url'); ?>/img/ie-gilberto-alzate-avendaño.jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa Gilberto Alzate Avendaño</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">
                             CL. 92 # 51A-100
                             <br>Barrio San Cayetano.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="colegio09" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa Gilberto Alzate Avendaño" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-azul">Institución Educativa Gilberto Alzate Avendaño</h5>
                        <button type="button" class="close text-azul" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/img/ie-gilberto-alzate-avendaño.jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio08">
                          <i class="material-icons text-center text-azul">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio10">
                          <i class="material-icons text-center text-azul">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- colegio10 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio10">
                     <img src="<?php bloginfo('template_url'); ?>/img/i.e-juan-bosco.jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa San Juan Bosco</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">
                             Cl. 82 # 50 C-10
                             <br>Barrio Brasilia.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="colegio10" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa San Juan Bosco" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-azul">Institución Educativa San Juan Bosco</h5>
                        <button type="button" class="close text-azul" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/i.e-juan-bosco.jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio09">
                          <i class="material-icons text-center text-azul">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio11">
                          <i class="material-icons text-center text-azul">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- colegio11 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio11">
                     <img src="<?php bloginfo('template_url'); ?>/img/i.e-nuestra-señora-de-lourdes.jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Colegio Nuestra señora de Lourdes</h5>
                     </div>
                     <div class="card-footer text-dark">
                         <p class="card-text">
                             Calle 82 # 50BB-30
                             <br>Barrio Brasilia.
                         </p>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="colegio11" tabindex="-1" role="dialog" aria-labelledby="Colegio Nuestra señora de Lourdes" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-azul">Colegio Nuestra señora de Lourdes</h5>
                        <button type="button" class="close text-azul" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/img/i.e-nuestra-señora-de-lourdes.jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio10">
                          <i class="material-icons text-center text-azul">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio12">
                          <i class="material-icons text-center text-azul">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- colegio12 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card bg-light">
                <a data-toggle="modal" data-target="#colegio12">
                     <img src="<?php bloginfo('template_url'); ?>/img/I.E-Bravo-Marquez.jpg">
                     <div class="car-body text-azul">
                         <h5 class="card-header">Institución Educativa Bravo Marquez</h5>
                     </div>
                </a>
            </div>
            <div class="modal fade" id="colegio12" tabindex="-1" role="dialog" aria-labelledby="Institución Educativa Bravo Marquez" aria-hidden="true">
              <div class="modal-dialog modal-lg bg-light">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-azul">Institución Educativa Bravo Marquez</h5>
                        <button type="button" class="close text-azul" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/I.E-Bravo-Marquez.jpg">
                  <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio11">
                          <i class="material-icons text-center text-azul">chevron_left</i>
                      </button>
                      <button class="btn btn-light" data-toggle="modal" data-dismiss="modal" data-target="#colegio01">
                          <i class="material-icons text-center text-azul">chevron_right</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section id="iglesias" class="mt-5">
      <div class="row bg-café pl-5 pr-5 m-0">
        <div class="col-sm-12">
          <h2 class="text-white pt-5">Iglesias</h2>
        </div>
      </div>
      <div id="iglesiasslider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#iglesiasslider" data-slide-to="0" class="active"></li>
          <li data-target="#iglesiasslider" data-slide-to="1"></li>
          <li data-target="#iglesiasslider" data-slide-to="2"></li>
          <li data-target="#iglesiasslider" data-slide-to="3"></li>
          <li data-target="#iglesiasslider" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Iglesia-de-Manrique-(2).jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Iglesia de Manrique</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Iglesia-de-San-Nicolas-(5).jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Iglesia de San Nicolás</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Iglesia-el-Sagrario-(3).jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Iglesia el Sagrario</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/Iglesia-San-Cayetano-(1).jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Iglesia San Cayetano</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/iglesia-el-calvario.jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-shadow">Iglesia El Calvario</h3>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#iglesiasslider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="material-icons">chevron_left</i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#iglesiasslider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="material-icons">chevron_right</i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section id="mapas">
      <div class="row bg-rojo pl-5 pr-5 m-0">
        <div class="col-sm-12">
          <h2 class="text-white pt-5">Mapas</h2>
        </div>
        <div class="col-sm-12 col-md-6 float-left">
          <p class="text-white">En la comuna 4 existen 14 barrios, busca en el mapa para encontrar lugares de interés.</p>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/d/u/2/embed?mid=1KZS5v4zzAwi3O5jo40BwceS6TgTvDEK8" width="100%" height="640"></iframe>
    </section>
<?php get_footer(); ?>
