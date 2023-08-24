<?php
include("../../Controller/UploadController.php");

if ($_POST['subir']) {
    $controller = new UploadController();
    $res = $controller->validarArchivo();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    echo $salida;
    ?>
</body>

</html>