<?php

$edad = $_GET['edad'];
$estudiante = $_GET['estudiante'];

switch ($estudiante) {
    case "Si":
        if ($edad >= 12) {
            echo "El precio es $180";
        } else {
            echo "El precio es $160";
        }
        break;
    case "No":
        if ($edad < 12) {
            echo "El precio es $160";
        } else {
            echo "El precio es $300";
        }
        break;
}
