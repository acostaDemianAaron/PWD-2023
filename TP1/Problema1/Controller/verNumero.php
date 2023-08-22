<?php
// Problema 1 del Trabajo Práctico Nº 1 de PHP
$num = $_GET['num'];
switch ($num) {
    case 0:
        echo "El número " . $num;
        break;
    case $num > 0:
        echo "El número " . $num . " es positivo";
        break;
    case $num < 0:
        echo "El número " . $num . " es negativo";
        break;
    default:
        echo "No se recibieron datos";
}

