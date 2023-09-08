<?php

class cTarifa
{

    public function calcularEdad($edad, $estudiante)
    {
        $res = 0;
        switch ($estudiante) {
            case "Si":
                if ($edad >= 12) {
                    $res = 180;
                } else {
                    $res = 160;
                }
                break;
            case "No":
                if ($edad < 12) {
                    $res = 160;
                } else {
                    $res = 300;
                }
                break;
        }
        return $res;
    }
}
