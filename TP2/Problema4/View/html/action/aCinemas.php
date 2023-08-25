<?php
include("../../../Controller/cCinemas.php");
require("../../../../../home/View/header.php");

$control = new cinemas_control();
$datos = $control->datos();
if ($datos == null) {
    echo '
    <!-- Error jumbotron -->
    <div class="my-5">
        <div class="p-5 text-center bg-body-tertiary">
            <div class="container py-5">
                <h1 class="text-body-emphasis">Algo salio mal :&#x28;</h1>
                <p class="col-lg-8 mx-auto lead">
                    Intentelo nuevamente
                </p>

                <a class="btn btn-primary" href="../cinemas.php">Volver</a>
            </div>
        </div>
    </div>
    ';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis text-start">La pelicula introducida es</h1>
            <p class="lead text-start">
                Titulo: <?php echo $datos["inputTitulo"]; ?> <br>
                Actores: <?php echo $datos["inputActores"]; ?> <br>
                Director: <?php echo $datos["inputDirector"]; ?> <br>
                Guion: <?php echo $datos["inputGuion"]; ?> <br>
                Produccion: <?php echo $datos["inputProduccion"]; ?> <br>
                Año: <?php echo $datos["inputAno"]; ?> <br>
                Nacionalidad: <?php echo $datos["inputNacionalidad"]; ?> <br>
                Genero: <?php echo $datos["inputGenero"]; ?> <br>
                Duracion: <?php echo $datos["inputDuracion"]; ?> <br>
                Restricciones de edad: <?php echo $datos["inputRestriccion"];
                                        ?>
            </p>

            <a class="btn btn-primary" href="../cinemas.php">Volver</a>
        </div>
    </div>
</body>

</html>