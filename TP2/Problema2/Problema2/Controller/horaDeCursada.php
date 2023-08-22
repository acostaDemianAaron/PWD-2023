<?php
//Problema 2 del Trabajo Práctico Nº 1 de PHP
//Array de las horas
$indices = [];
$horasCursadas = $_GET;


foreach ($horasCursadas as $horaDia) {
    if ($horaDia != null && $horaDia) {
        array_push($indices, $horaDia);
    }
}

if (count($indices) > 0) {
    $hsTotales = [0, 0];

    foreach ($indices as $indice) {
        // Divide un string en varios string
        // Array ( [0] => 01 [1] => 00 ) Array ( [0] => 02 [1] => 00 ) Array ( [0] => 03 [1] => 00 ) Array ( [0] => 04 [1] => 00 ) Array ( [0] => 05 [1] => 00 )
        $hora = explode(":", $indice);
        // print_r($hora);
        $hsTotales = [$hsTotales[0] + $hora[0], $hsTotales[1] + $hora[1]];
    }
    // Array ( [0] => 15 [1] => 0 )
    // print_r($hsTotales);

    $min = $hsTotales[1] % 60;
    $hs = $hsTotales[0] + (($hsTotales[1] - $min) / 60);
    echo "Las de la cursada por semana son: " . $hs . ":" . $min . " hs";
} else {
    echo "No se recibieron datos";
}
