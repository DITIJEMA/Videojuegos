<?php
if (!isset($_REQUEST['editar'])  and !isset($_REQUEST['borrar'])) {
?>

  <form method="get" action="" class="row g-3 needs-validation" novalidate>
    <input type="hidden" value="1" name="opcion">

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="id">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="id" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="validationCustom02" name="nombre">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="apellido_p">APELLIDO PATERNO</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido_p">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="apellido_m">APELLIDO MATERNO</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido_m">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="id_tipo_usuario">TIPO USUARIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="id_tipo_usuario">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="fecha_creacion">FECHA DE CREACION</label>
        <input type="date" class="form-control" id="validationCustom02" name="fecha_creacion">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="direccion">DIRECCION</label>
        <input type="text" class="form-control" id="validationCustom02" name="direccion">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="id_estado">ESTADO</label>
        <input type="number" class="form-control" id="validationCustom02" name="id_estado">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="id_estatus">ESTATUS</label>
        <input type="number" class="form-control" id="validationCustom02" name="id_estatus">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="email">EMAIL</label>
        <input type="email" class="form-control" id="validationCustom02" name="email">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="contrasena">CONTRASEÑA</label>
        <input type="password" class="form-control" id="validationCustom02" name="contrasena">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="telefono">TELEFONO</label>
        <input type="tel" class="form-control" id="validationCustom02" name="telefono">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <button type="submit" class=" btn btn-primary w-100 fs-5">Registrar</button>
      </div>
  </form>
<?php
}
?>