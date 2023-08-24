<?php
include("../../Controller/UploadController.php");

if ($_POST['subir']) {
    $controller = new UploadController();
    $res = $controller->validarArchivo();

    if($res == 1){
        $salida = "El archivo se subió correctamente.";
    } else if($res == 0){
        $salida = "El archivo no se pudo subir.";
    } else if($res == -1){
        $salida = "El archivo no es de tipo PDF o DOC o supera los 2MB.";
    }
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