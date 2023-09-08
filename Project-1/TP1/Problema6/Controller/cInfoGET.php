<?php



class cInfoGET
{

    public function validaEdad($edad)
    {
        switch ($edad) {
            case $edad >= 18:
                $resEdad = 0;
                break;
            case $edad < 18:
                $resEdad = 1;
        }
        return $resEdad;
    }

    public function validaEstudios($estudios)
    {
        switch ($estudios) {
            case 1:
                $resEstudios = 1;
                break;
            case 2:
                $resEstudios = 2;
                break;
            case 3:
                $resEstudios = 3;
                break;
        }
        return $resEstudios;
    }

    public function validaGenero($genero)
    {
        switch ($genero) {
            case 1:
                $resGenero = 1;
                break;
            case 2:
                $resGenero = 2;
                break;
            case 3:
                $resGenero = 3;
                break;
            case 4:
                $resGenero = 4;
                break;
        }
        return $resGenero;
    }

    public function cantidadDeDeportes($deporte)
    {
        $resDeporte = count($deporte);
        return $resDeporte;
    }

    public function textoFormado($resEdad, $resEstudios, $resGenero, $cantDeportes, $nombre, $apellido, $edad, $direccion)
    {
        if ($resEdad == 0) {
            if ($resEstudios == 1) {
                switch ($resGenero) {
                    case 1:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Femenino y mi nivel de estudios es: Sin estudios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 2:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Masculino y mi nivel de estudios es: Sin estudios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 3:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero No binario y mi nivel de estudios es: Sin estudios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 4:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Prefiero no especificar mi genero y mi nivel de estudios es: Sin estudios. Hago " . $cantDeportes . " deportes.";
                        break;
                }
            } else if ($resEstudios == 2) {
                switch ($resGenero) {
                    case 1:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Femenino y mi nivel de estudios es: Estudios Primarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 2:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Masculino y mi nivel de estudios es: Estudios Primarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 3:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero No binario y mi nivel de estudios es: Estudios Primarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 4:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Prefiero no especificar mi genero y mi nivel de estudios es: Estudios Primarios. Hago " . $cantDeportes . " deportes.";
                        break;
                }
            } else if ($resEstudios == 3) {
                switch ($resGenero) {
                    case 1:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Femenino y mi nivel de estudios es: Estudios Secundarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 2:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Masculino y mi nivel de estudios es: Estudios Secundarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 3:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero No binario y mi nivel de estudios es: Estudios Secundarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 4:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy mayor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Prefiero no especificar mi genero y mi nivel de estudios es: Estudios Secundarios. Hago " . $cantDeportes . " deportes.";
                        break;
                }
            }
        };

        if ($resEdad == 1) {
            if ($resEstudios == 1) {
                switch ($resGenero) {
                    case 1:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Femenino y mi nivel de estudios es: Sin estudios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 2:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Masculino y mi nivel de estudios es: Sin estudios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 3:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero No binario y mi nivel de estudios es: Sin estudios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 4:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Prefiero no especificar mi genero y mi nivel de estudios es: Sin estudios. Hago " . $cantDeportes . " deportes.";
                        break;
                }
            } else if ($resEstudios == 2) {
                switch ($resGenero) {
                    case 1:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Femenino y mi nivel de estudios es: Estudios Primarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 2:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Masculino y mi nivel de estudios es: Estudios Primarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 3:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero No binario y mi nivel de estudios es: Estudios Primarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 4:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Prefiero no especificar mi genero y mi nivel de estudios es: Estudios Primarios. Hago " . $cantDeportes . " deportes.";
                        break;
                }
            } else if ($resEstudios == 3) {
                switch ($resGenero) {
                    case 1:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Femenino y mi nivel de estudios es: Estudios Secundarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 2:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero Masculino y mi nivel de estudios es: Estudios Secundarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 3:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Me identifico con el genero No binario y mi nivel de estudios es: Estudios Secundarios. Hago " . $cantDeportes . " deportes.";
                        break;
                    case 4:
                        $respuesta = "Hola, yo soy " . $nombre . ", " . $apellido . ". Soy menor de edad, tengo " . $edad . " años y vivo en " . $direccion . ".\n Prefiero no especificar mi genero y mi nivel de estudios es: Estudios Secundarios. Hago " . $cantDeportes . " deportes.";
                        break;
                }
            }
        };

        return $respuesta;
    }
}
