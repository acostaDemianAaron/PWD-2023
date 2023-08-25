<?php

class cInfoGET
{

    public function validaEdad($edad)
    {
        switch ($edad) {
            case $edad >= 18:
                $salida = 0;
                break;
            case $edad < 18:
                $salida = 1;
        }
        return $salida;
    }
}
