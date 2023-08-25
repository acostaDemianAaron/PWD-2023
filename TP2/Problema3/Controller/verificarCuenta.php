<?php
class cuenta
{
    

    public function verificar($data)
    {
        $length = count($data);
        $i = 0;

        while ($i < $length) {
            if ($data[$i]["username"] == $_POST["username"]) {
                if ($data[$i]["password"] == $_POST["password"]) {

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
