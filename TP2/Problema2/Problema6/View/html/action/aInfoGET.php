<?php
include("../../../Controller/cInfoGET.php");
if ($_GET) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion'];
    $estudio = $_GET['estudio'];
    $genero = $_GET['genero'];
    $deporte = $_GET['deporte'];


    $obj = new cInfoGET;
    $resEdad = $obj->validaEdad($edad);
    $resEstudios = $obj->validaEstudios($estudio);
    $resGenero = $obj->validaGenero($genero);
    $cantDeportes = $obj->cantidadDeDeportes($deporte);
    $respuesta = $obj->textoFormado($resEdad, $resEstudios, $resGenero, $cantDeportes, $nombre, $apellido, $edad, $direccion);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../../utils/css/estilos.css">
    <link rel="stylesheet" href="../../../../../../home/libs/Bootstrap5.3.1/css/bootstrap.min.css">

    <title>Respuesta6</title>
</head>

<body>
    <main>
        <header style="height: 70px">
        </header>
        <div style="height: 30px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg p-3 mb-5 bg-white ">
                        <div class="card-body">

                            <?php
                            echo $respuesta;
                            ?>
                            <br>

                            <form action="../indexInfoGET.php">
                                <br>
                                <button class="btn btn-primary" type="submit">Volver</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>