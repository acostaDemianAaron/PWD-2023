<?php
class cuenta
{


    public function verificar($cuentas, $username, $password)
    {
        $length = count($cuentas);
        $i = 0;

        while ($i < $length) {
            if ($cuentas[$i]["username"] == $username) {
                if ($cuentas[$i]["password"] == $password) {

                    $resp = 1;
                    //Respuesta a
                } else {
                    $resp = 2;
                    //Respuesta a Contraseña incorrecta
                }
            } else if ($i == $length - 1) {
                $resp = 0;
                //Respuesta a usuario no existe.
            }
            $i++;
        }

        return $resp;
    }
}

?>