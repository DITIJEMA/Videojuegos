<?php
$ = $->read_all();
if (isset($_GET['estatus'])) {
  $estatus = $_GET['estatus'];
?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong><?php echo $estatus ?>!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
}
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID USUARIO</th>
      <th scope="col">SALARIO</th>
      <th scope="col">FECHA DE CONTRATACION</th>
    </tr>
  </thead>

  <tbody>

    <?php
    $ = $->read_all();
    foreach ($ as $) {
    ?>

  <tbody>
    <tr>
      <td><?php echo $->id_usuario; ?></td>
      <td><?php echo $->salario; ?></td>
      <td><?php echo $->fecha_contratacion; ?></td>
      <td><a href="index.php?editar&id=<?php echo $arc->id_usuario ?>">Editar</a></td>
      <td><a href="index.php?borrar&id=<?php echo $arc->id_usuario ?>">Borrar</a></td>
    </tr>
  <?php
    }
  ?>
  </tbody>
</table>