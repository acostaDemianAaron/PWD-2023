<?php
class cVerNumero
{

    public function comprobarNumero($num)
    {
        switch ($num) {
            case 0:
                $res = 0;
                break;
            case $num > 0:
                $res = 1;
                break;
            case $num < 0:
                $res = -1;
                break;
        }
        return $res;
    }
}
