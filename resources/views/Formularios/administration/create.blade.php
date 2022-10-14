<?php
if (!isset($_REQUEST['editar'])  and !isset($_REQUEST['borrar'])) {
?>

  <form method="get" action="" class="row g-3 needs-validation" novalidate>
    <input type="hidden" value="1" name="opcion">

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="id_usuario">ID USUARIO</label>
        <input type="text" class="form-control" id="validationCustom02" name="id_usuario" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="salario">SALARIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="salario">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

        <div class="col-md-3 mb-3">
          <label for="fecha_contratacion">FECHA DE CONTRATACION</label>
          <input type="date" class="form-control" id="validationCustom02" name="fecha_contratacion" required>
          <div class="valid-feedback">Registro corecto</div>
          <div class="invalid-feedback">Hay un error revice por favor</div>
        </div>
      </div>
   

      <div class="col-md-3 mb-3">
        <button type="submit" class=" btn btn-primary w-100 fs-5">Registrar</button>
      </div>
  </form>
<?php
}
?>