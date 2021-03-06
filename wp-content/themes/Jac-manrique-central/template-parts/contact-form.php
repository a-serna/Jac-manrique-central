<div class="row pt-5">
    <div class="col-12">
      <div class="bg-1 pt-5 pb-2">
        <h2 class="text-white pt-5 pl-5 pb-3">Contacto</h2>
        <div class="col-sm-12 col-md-8">
          <p class="text-white text-left mt-1 pl-5 pr-5">Escríbenos y mándanos
            tus inquietudes, sugerencias o aportes.</p>
        </div>
      </div>
    </div>
</div>
<form class="mt-5 p-5" class="was-validated" method="post" action="contacto.php">
  <div class="form">
      <div class="row d-flex justify-content-center">
          <div class="col-sm-12 col-md-4 mb-3" for="validationDefault01">
            <input name="Nombre" type="text" class="form-control border form-border rounded text-center" id="validationDefault01" placeholder="Nombre" required>
          </div>
          <div class="col-sm-12 col-md-4 mb-3" for="validationDefault02">
            <input name="Apellido" type="text" class="form-control border form-border rounded text-center" id="validationDefault02" placeholder="Apellido" required>
          </div>
      </div>
      <div class="row d-flex justify-content-center">
          <div class="col-sm-12 col-md-4 mb-3" for="validationDefault03">
            <input name="Email" type="email" class="form-control border form-border rounded text-center" id="validationDefault03" placeholder="Email" required>
          </div>
          <div class="col-sm-12 col-md-4 mb-3" for="validationDefault04">
            <input name="Tel" type="tel" class="form-control border form-border rounded text-center" id="validationDefault04" placeholder="Teléfono">
          </div>
      </div>
      <textarea name="Mensaje" class="form-control border form-border rounded" length="400" required></textarea>
  </div>
  <div class="row d-flex justify-content-md-center mt-3">
      <div class="form-check">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" required><h6>Acepto términos y condiciones</h6>
          </label>
      </div>
  </div>
  <div class="row justify-content-sm-center mt-3">
    <div class="col-sm-3">
      <a href="<?php bloginfo('template_url'); ?>/template-parts/contacto.php"><input class="my-btn btn btn-lg btn-block text-white" type="Submit" value="Enviar"></a>
    </div>
  </div>
</form>
