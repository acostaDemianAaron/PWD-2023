<?php

class AbmUsuarioRol
{
    public function loadObj($array)
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


    public function loadObjId($array)
    {
        $usuarioRol = NULL;
        if(isset($array['idusuario'])) {
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
        // $res = FALSE;
        // if(isset($array['idusuario'] ))
    }
}
