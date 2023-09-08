<?php

class cHsCursadas
{

    public function calcularHsSemanales($datos)
    {
        $indices = [];
        foreach ($datos as $horaDia) {
            if ($horaDia != null && $horaDia) {
                array_push($indices, $horaDia);
            }
        }

        if (count($indices) > 0) {
            $hsTotales = [0, 0];

            foreach ($indices as $indice) {
                $hora = explode(":", $indice);
                $hsTotales = [$hsTotales[0] + $hora[0], $hsTotales[1] + $hora[1]];
            }

            $min = $hsTotales[1] % 60;
            $hs = $hsTotales[0] + (($hsTotales[1] - $min) / 60);
        }
        return "Las de la cursada por semana son: " . $hs . ":" . $min . " hs";
    }
}
