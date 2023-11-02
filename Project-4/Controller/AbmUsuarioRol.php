<?php

class AbmUsuarioRol
{
    public function LoadObj($array)
    {
        $usuarioRol = NULL;
        $usuario = NULL;
        $rol = NULL;
        if (array_key_exists('idusuario', $array) && $array['idusuario'] != NULL) {
            $usuario = new Usuario();
            $usuario->setIdUsuario($array['idusuario']);
            $usuario->Load();
        }
        if (array_key_exists('idrol', $array) && $array['idrol'] != NULL) {
            $rol = new Rol();
            $rol->setIdRol($array['idrol']);
            $rol->Load();
        }

        $usuarioRol = new UsuarioRol();
        $usuarioRol->setValues($rol, $usuario);
        return $usuarioRol;
    }


    public function LoadObjId($array)
    {
        $usuarioRol = NULL;
        if (isset($array['idusuario'])) {
            $usuario = new Usuario();
            $usuario->setIdUsuario($array['idusuario']);
            $usuarioRol = new UsuarioRol();
            $usuarioRol->setObjUsuario($usuario);
            $usuarioRol->Load();
        }
        return $usuarioRol;
    }


    public function Verify($array)
    {
        $res = FALSE;
        if (isset($array['idusuario']) && isset($array['idrol'])) {
            $res = TRUE;
        }
        return $res;
    }


    public function Add($array)
    {
        $res = FALSE;
        $usuarioRol = $this->LoadObj($array);
        if ($usuarioRol != NULL && $usuarioRol->Insert()) {
            $res = TRUE;
        }
        return $res;
    }


    public function Delete($array)
    {
        $res = FALSE;
        if ($this->Verify($array)) {
            $usuarioRol = $this->LoadObj($array);
            if ($usuarioRol != NULL && $usuarioRol->Delete()) {
                $res = TRUE;
            }
        }
        return $res;
    }



    public function Edit($array)
    {
        $res = FALSE;
        if ($this->Verify($array)) {
            $usuarioRol = $this->Search($array);
            $usuarioRol = $this->LoadObj($array);
            if ($usuarioRol != NULL && $usuarioRol->Modify()) {
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
                $on .= " and idusuario" . $array['idusuario'];
            if (isset($array['idrol']))
                $on .= " and idrol" . $array['idrol'];
        }
        $usuarioRol = new UsuarioRol();
        $arrayList = $usuarioRol->List($on);
        return $arrayList;
    }
}
