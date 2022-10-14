<?php
if (isset($_REQUEST['id']) and isset($_REQUEST['editar'])) {
  $->id= $_REQUEST['id'];
  $resultado = $->read_by_id();
  $ = $resultado[0];

?>
  <form class="p-4 needs-validation" action="" method="get" novalidate>
    <input type="hidden" name="opcion" value="2">
    <input type="hidden" name="id" value="<?php echo $->id ?>">

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="id">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="id" value="<?php echo $->id ?>"readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="desarrolladora">DESARROLLADORA</label>
        <input type="text" class="form-control" id="validationCustom02" name="desarrolladora" value="<?php echo $->desarrolladora ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="publicadora">PUBLICADORA</label>
        <input type="text" class="form-control" id="validationCustom02" name="publicadora" value="<?php echo $->publicadora ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="fecha_estreno">FECHA DE ESTRENO</label>
        <input type="date" class="form-control" id="validationCustom02" name="fecha_estreno" value="<?php echo $->fecha_estreno ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="descripcion">DESCRIPCION</label>
        <input type="text" class="form-control" id="validationCustom02" name="descripcion" value="<?php echo $->descripcion ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="codigo">CODIGO</label>
        <input type="number" class="form-control" id="validationCustom02" name="codigo" value="<?php echo $->codigo ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="id_clasificacion">CLASIFICACION</label>
        <input type="text" class="form-control" id="validationCustom02" name="id_clasificacion" value="<?php echo $->clasificacion ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="region">REGION</label>
        <input type="number" class="form-control" id="validationCustom02" name="region" value="<?php echo $->region ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="genero">GENERO</label>
        <input type="number" class="form-control" id="validationCustom02" name="genero" value="<?php echo $->genero ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="consola">CONSOLA</label>
        <input type="number" class="form-control" id="validationCustom02" name="consola" value="<?php echo $->consola ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="stock">STOCK</label>
        <input type="number" class="form-control" id="validationCustom02" name="stock" value="<?php echo $->stock ?>">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="precio">PRECIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="precio" value="<?php echo $->precio ?>">
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