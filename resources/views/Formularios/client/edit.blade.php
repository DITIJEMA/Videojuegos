<?php
if (isset($_REQUEST['id']) and isset($_REQUEST['editar'])) {
  $->id_usuario= $_REQUEST['id'];
  $resultado = $->read_by_id();
  $ = $resultado[0];

?>
  <form class="p-4 needs-validation" action="" method="get" novalidate>
    <input type="hidden" name="opcion" value="2">
    <input type="hidden" name="id" value="<?php echo $->id_usuario ?>">

    < <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="id_usuario">ID USUARIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="id" value="<?php echo $->id_usuario ?>" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="nombre">DINERO</label>
        <input type="number" class="form-control" id="validationCustom02" name="nombre" value="<?php echo $->dinero ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

    <div class="col-md-3 mb-3">
      <button type="submit" class=" btn btn-primary w-100 fs-5">Editar</button>
    </div>
  </form>
<?php
}
?>