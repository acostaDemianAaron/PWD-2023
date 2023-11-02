<?php

class AbmUsuario
{
    public function LoadObj($array)
    {
        $usuario = NULL;
        if (array_key_exists('idusuario', $array) && array_key_exists('usnombre', $array) && array_key_exists('uspass', $array) && array_key_exists('usmail', $array) && array_key_exists('usdeshabilitado', $array)) {
            $usuario = new Usuario();
            $usuario->setValues($array['idusuario'], $array['usnombre'], $array['uspass'], $array['usmail'], $array['usdeshabilitado']);
        }
        return $usuario;
    }


    public function LoadObjId($array)
    {
        $usuario = NULL;
        if (isset($array['idusuario'])) {
            $usuario = new Usuario();
            $usuario->setIdUsuario($array['idusuario']);
            if (!$usuario->Load()) {
                $usuario = NULL;
            }
        }
        return $usuario;
    }


    public function Verify($array)
    {
        $res = FALSE;
        if (isset($array['idusuario'])) {
            $res = TRUE;
        }
        return $res;
    }


    public function Add($array)
    {
        $res = FALSE;
        $usuario = $this->LoadObj($array);
        if ($usuario != NULL && $usuario->Insert()) {
            $res = TRUE;
        }
        return $res;
    }


    public function Delete($array)
    {
        $res = FALSE;
        if ($this->Verify($array)) {
            $usuario = $this->LoadObjId($array);
            if ($usuario != NULL && $usuario->Delete()) {
                $res =  TRUE;
            }
        }
        return $res;
    }


    public function Edit($array)
    {
        $res = FALSE;
        if ($this->Verify($array)) {
            $usuario = $this->Search($array);
            $usuario = $this->LoadObj($array);
            if ($usuario != NULL && $usuario->Modify()) {
                $res = TRUE;
            }
        }
        return $res;
    }


    public function Search($array = NULL)
    {
        $on = " true ";
        if ($array <> NULL) {
            if (isset($array['idusuario']))
                $on .= " and idusuario =" . $array['idusuario'];
            if (isset($array['usnombre']))
                $on .= " and usnombre =" . $array['usnombre'];
            if (isset($array['uspass']))
                $on .= " and uspass =" . $array['uspass'];
            if (isset($array['usmail']))
                $on .= " and usmail =" . $array['usmail'];
            if (isset($array['usdeshabilitado']))
                $on .= " and usdeshabilitado =" . $array['usdeshabilitado'];
        }
        $usuario = new Usuario();
        $arrayList = $usuario->List($on);
        return $arrayList;
    }
}
