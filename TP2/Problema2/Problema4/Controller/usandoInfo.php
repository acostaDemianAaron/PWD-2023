<?php

//Recibidos por metodo GET

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];
$direccion = $_GET['direccion'];

//Comprueba si es mayor de 18 o menor de 18. Devuelve el dato correspondiente a la edad.
switch ($edad) {
    case $edad >= 18:
        echo "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion;
        break;
    case $edad < 18:
        echo "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion;
}
