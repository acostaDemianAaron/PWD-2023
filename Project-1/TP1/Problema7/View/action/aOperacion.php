<?php
include("../../Controller/cOperacion.php");
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operacion = $_GET['operacion'];

$obj = new cOperacion;
$res = $obj->operar($operacion, $num1, $num2);

switch ($operacion) {
    case 1:
        $respuesta = "El resultado de sumar el " . $num1 . " con " . $num2 . " da como resultado: " . $res . ".";
        break;
    case 2:
        $respuesta = "El resultado de restar el " . $num1 . " con " . $num2 . " da como resultado: " . $res . ".";
        break;
    case 3:
        $respuesta = "El resultado de multiplicar el " . $num1 . " con " . $num2 . " da como resultado: " . $res . ".";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../utils/css/estilos.css">
    <link rel="stylesheet" href="../../../../home/libs/Bootstrap5.3.1/css/bootstrap.min.css">
    <title>Respuesta7</title>
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

                            <form action="../operacionIndex.php">
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