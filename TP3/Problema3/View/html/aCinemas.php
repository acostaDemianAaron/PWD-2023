<?php
require("../../../../home/View/header.php");
include_once('../../Controller/UploadController.php');
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
                Restricciones de edad: <?php echo $datos["inputRestriccion"];?> <br>
                Sinopsis: <?php echo $datos["inputSinopsis"]; ?> <br>
                Poster de la pelicula: <br>
                <?php echo "<img src='$ruta' alt='Imagen de la Película' style='width: 200px; height: auto;'>"; ?>
            </p>

            <a class="btn btn-primary" href="cinemas.php">Volver</a>
        </div>
    </div>
</body>

</html>