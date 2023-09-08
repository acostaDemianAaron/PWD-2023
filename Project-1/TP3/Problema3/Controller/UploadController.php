<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = $_POST;
    $imagen = $_FILES['imagen'];
    $directorio = "uploads/";
    $nombreImagen = uniqid() . "_" . $imagen['name'];
    $ruta = $directorio . $nombreImagen;
    move_uploaded_file($imagen['tmp_name'], $ruta);
}
?>
