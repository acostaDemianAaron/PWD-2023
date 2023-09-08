<?php



class cOperacion
{

    public function operar($operacion, $num1, $num2)
    {
        switch ($operacion) {
            case 1:
                $resultado = $num1 + $num2;
                break;
            case 2:
                $resultado = $num1 - $num2;
                break;
            case 3:
                $resultado = $num1 * $num2;
                break;
        }
        return $resultado;
    }
}
