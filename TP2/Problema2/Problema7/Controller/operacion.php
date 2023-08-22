<?php

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$operacion = $_GET['operacion'];

$resultado = 0;
switch ($operacion) {
    case "Suma":
        $resultado = $valor1 + $valor2;
        break;
    case "Resta":
        $resultado = $valor1 - $valor2;
        break;
    case "Multiplicacion":
        $resultado = $valor1 * $valor2;
        break;
}

echo "El resultado de " . $operacion . " " . $valor1 . " con " . $valor2 . " da como resultado: " . $resultado . ".";
