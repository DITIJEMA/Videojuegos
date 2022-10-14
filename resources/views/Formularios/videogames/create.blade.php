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
        <label for="desarrolladora">DESARROLLADORA</label>
        <input type="text" class="form-control" id="validationCustom02" name="desarrolladora">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="publicadora">PUBLICADORA</label>
        <input type="text" class="form-control" id="validationCustom02" name="publicadora">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="fecha_estreno">FECHA DE ESTRENO</label>
        <input type="date" class="form-control" id="validationCustom02" name="fecha_estreno">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="descripcion">DESCRIPCION</label>
        <input type="text" class="form-control" id="validationCustom02" name="descripcion">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="codigo">CODIGO</label>
        <input type="number" class="form-control" id="validationCustom02" name="codigo">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="id_clasificacion">CLASIFICACION</label>
        <input type="text" class="form-control" id="validationCustom02" name="id_clasificacion">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="region">REGION</label>
        <input type="number" class="form-control" id="validationCustom02" name="region">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="genero">GENERO</label>
        <input type="number" class="form-control" id="validationCustom02" name="genero">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="consola">CONSOLA</label>
        <input type="number" class="form-control" id="validationCustom02" name="consola">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="stock">STOCK</label>
        <input type="number" class="form-control" id="validationCustom02" name="stock">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="precio">PRECIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="precio">
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