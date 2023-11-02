<?php

class AbmRol
{
    public function loadObj($array)
    {
        $rol = NULL;
        if (array_key_exists('idrol', $array) && array_key_exists('roldescripcion', $array)) {
            $rol = new Rol();
            $rol->setValues($array['idrol'], $array['roldescripcion']);
        }
        return $rol;
    }


    public function loadObjId($array)
    {
        $rol = NULL;
        if (isset($array['idrol'])) {
            $rol = new Rol();
            $rol->setIdRol($array['idrol']);
            if (!$rol->Load()) {
                $rol = NULL;
            }
        }
        return $rol;
    }


    public function Verify($array)
    {
        $res = FALSE;
        if (isset($array['idrol'])) {
            $res = TRUE;
        }
        return $res;
    }


    public function Add($array)
    {
        $res = FALSE;
        $rol = $this->loadObj($array);
        if ($rol != NULL && $rol->Insert()) {
            $res = TRUE;
        }
        return $res;
    }


    public function Delete($array)
    {
        $res = FALSE;
        if ($this->Verify($array)) {
            $rol = $this->loadObjId($array);
            if ($rol != NULL && $rol->Delete()) {
                $res = TRUE;
            }
        }
        return $res;
    }


    public function Edit($array)
    {
        $res = FALSE;
        if ($this->Verify($array)) {
            $rol = $this->loadObj($array);
            if ($rol != NULL && $rol->Modify()) {
                $res = TRUE;
            }
        }
        return $res;
    }


    public function Search($array = NULL)
    {
        $on = " true ";
        if ($array <> NULL) {
            if (isset($array['idrol']))
                $on .= " and idrol =" . $array['idrol'];
        }
        $rol = new Rol();
        $arrayList = $rol->List($on);
        return $arrayList;
    }
}
