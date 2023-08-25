<?php
include("../../Controller/cHsCursadas.php");
if ($_GET) {
    $horasCursadas = $_GET;
    $obj = new cHsCursadas;
    $res = $obj->calcularHsSemanales($horasCursadas);
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
    <?php
    echo $res;
    ?>
</body>

</html>