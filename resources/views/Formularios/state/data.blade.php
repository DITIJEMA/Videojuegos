<?php
$registros = $->read_all();
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
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      </tr>
  </thead>

  <tbody>

    <?php
    $registros = $->read_all();
    foreach ($registros as $) {
    ?>

  <tbody>
    <tr>
      <td><?php echo $->id; ?></td>
      <td><?php echo $->nombre; ?></td>
      <td><a href="index.php?editar&id=<?php echo $->id ?>">Editar</a></td>
      <td><a href="index.php?borrar&id=<?php echo $->id ?>">Borrar</a></td>
    </tr>
  <?php
    }
  ?>
  </tbody>
</table>