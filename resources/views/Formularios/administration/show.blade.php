<?php
  if(isset($_REQUEST['id'])and isset($_REQUEST['borrar'])){
    $->id=$_REQUEST['id'];
    $resultado=$->read_by_id();
    $=$resultado[0];

?>
  <form class="p-4 needs-validation"  action="" method="get" novalidate>
    <input type="hidden" name="opcion" value="3">

    < <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="id_usuario">ID USUARIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="id_usuario" value="<?php echo $->id_usuario ?>" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="salario">SALARIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="salario" value="<?php echo $->salario ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

        <div class="col-md-3 mb-3">
          <label for="fecha_contratacion">FECHA DE CONTRATACION</label>
          <input type="date" class="form-control" id="validationCustom02" name="fecha_contratacion" value="<?php echo $->fecha_contratacion ?>" required>
          <div class="valid-feedback">Registro corecto</div>
          <div class="invalid-feedback">Hay un error revice por favor</div>
        </div>
      </div>

    <div class="col-md-3 mb-3">
      <button type="submit" class=" btn btn-primary w-100 fs-5">Borrar</button>
    </div>