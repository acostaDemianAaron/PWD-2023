<?php

//Recibidos por metodo GET

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$estudios = $_POST['estudios'];
$genero = $_POST['genero'];


//Comprueba si es mayor de 18 o menor de 18. Devuelve el dato correspondiente a la edad.
switch ($edad) {
    case $edad >= 18:
        echo "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n";
        echo "Me identifico con el genero " . $genero . " y mi nivel de estudios es: " . $estudios . ".\n";
        break;
    case $edad < 18:
        echo "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n";
        echo "Me identifico con el genero " . $genero . " y mi nivel de estudios: " . $estudios . ".\n";
        break;
}

if (key_exists('deportes', $_POST)) {
    echo "Hago " . count($_POST['deportes']) . " deportes";
} else {
    echo "No hago ningun deportes";
}
