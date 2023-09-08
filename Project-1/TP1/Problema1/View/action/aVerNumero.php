<?php
include("../../Controller/cVerNumero.php");
if ($_GET) {
    $num = $_GET['num'];
    $obj = new cVerNumero();

    $res = $obj->comprobarNumero($num);


    switch ($res) {
        case 0:
            $respuesta = "<h3><strong>El número " . $num . " es cero</strong></h3>";
            break;
        case $res > 0:
            $respuesta = "<h3><strong>El número " . $num . " es positivo</strong></h3>";
            break;
        case $res < 0:
            $respuesta = "<h3><strong>El número " . $num . " es negativo</strong></h3>";
            break;
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../utils/css/estilos.css">
    <link rel="stylesheet" href="../../../../home/libs/Bootstrap5.3.1/css/bootstrap.min.css">
    <title>Respuesta1</title>
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

                            <form action="../indexNumero.php">
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