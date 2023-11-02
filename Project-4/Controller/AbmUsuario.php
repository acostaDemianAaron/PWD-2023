<?php

class AbmUsuario
{
    public function loadObj($array)
    {
        $usuario = NULL;
        if (array_key_exists('idusuario', $array) && array_key_exists('usnombre', $array) && array_key_exists('uspass', $array) && array_key_exists('usmail', $array) && array_key_exists('usdeshabilitado', $array)) {
            $usuario = new Usuario();
            $usuario->setValues($array['idusuario'], $array['usnombre'], $array['uspass'], $array['usmail'], $array['usdeshabilitado']);
        }
        return $usuario;
    }


    public function loadObjId($array)
    {
    }
}
