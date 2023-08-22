<?php

//Recibidos por metodo POST

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];

echo "Hola, yo soy " . $nombre . ", " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion;
