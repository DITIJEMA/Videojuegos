<?php

include_once 'Modelo';

$= new ();
$registros = $->read_all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
    ?>
    <title>USUARIO</title>
</head>

<body>

    <?php
    include "header.php";
    ?>
    <div class="container-fluid">
        <div class="row">

            <?php
            include "navbar.php";
            ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <?php
                if (isset($_GET['estatus'])) {
                    $estatus = $_GET['estatus']; ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><?php echo $estatus ?>!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                }
                ?>

                <div class="container  border-top border-primary "  id="contenedor-formulario">
                    <div class="text-center mb-4" id="titulo-formulario">
                        <div><img src="" alt="" class="img-fluid ps-5"></div>
                        <h2>USUARIO</h2>
                        <p class="fs-5">COMPLETA EL FORMULARIO</p>
                    </div>

                    <?php
                    include "create.php";
                    
                    include "edit.php";

                    include "show.php";

                    include "data.php";
                    ?>
            </main>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>
</body>

</html>