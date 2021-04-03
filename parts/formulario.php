<!--Comienzo Formulario-->
<section class="container-fluid p-5 black">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <h3 class="text-center mb-5 grisClaroColor">Formulario Contacto</h3>
          <form method="POST" action="">
              <div class="resFormulario col-lg-12">

              </div>
              <div class="form-group">
                <label class="labelConf">Nombre/s: </label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre Completo" required>
              </div>
              <div class="form-group">
                <label class="labelConf">Apellido/s: </label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese Nombre Completo" required>
              </div>
              <div class="form-group">
                <label class="labelConf">Email : </label>
                <input type="mail" class="form-control" name="email" id="email" placeholder="ejemplo@correro.com.ar" required>
              </div>
              <div class="form-group py-3">
                <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Realizar Comentario" required></textarea>
              </div>
              <button type="submit" class="btn btn-success btn-block p-3" id="buttonEnviar">Enviar</button>
          </form>
        </div>
  
      </div>
    </section>

    <!--Fin Formulario-->