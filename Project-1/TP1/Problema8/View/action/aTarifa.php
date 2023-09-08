<?php
include("../../Controller/cTarifa.php");

$res = "";
if ($_GET) {
    $edad = $_GET['edad'];
    $estudiante = $_GET['estudiante'];

    $obj = new cTarifa;
    $res = $obj->calcularEdad($edad, $estudiante);
    $respuesta = "El precio de la entrada es de " . $res;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../utils/css/estilos.css">
    <link rel="stylesheet" href="../../../../home/libs/Bootstrap5.3.1/css/bootstrap.min.css">
    <title>Respuesta8</title>
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

                            <form action="../indexTarifa.php">
                                <br><button class="btn btn-primary" type="submit">Volver</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>