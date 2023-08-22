<?php

//Recibidos por metodo GET

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];
$direccion = $_GET['direccion'];


echo "Hola, yo soy " . $nombre . ", " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion;
