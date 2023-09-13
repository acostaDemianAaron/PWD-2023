<?php
class AbmPersona
{
    public function loadObj($array)
    {
        $Persona = null;
        if (array_key_exists('NroDni', $array) and array_key_exists('Apellido', $array) and array_key_exists('Nombre', $array) and array_key_exists('fechaNac', $array) and array_key_exists('Telefono', $array) and array_key_exists('Domicilio', $array)) {
            $Persona = new Persona();
            $Persona->setValues($array['NroDni'], $array['Apellido'], $array['Nombre'], $array['fechaNac'], $array['Telefono'], $array['Domicilio']);
        }
        return $Persona;
    }

    public function loadObjId()
    {
            $persona = null;
            if (isset($array['NroDni'])) {
                $persona = new Persona();
                $persona->setNroDni($array['NroDni']);
                if (!$persona->Load()) {
                    $persona = null;
                }
            }
            return $persona;
    }

    public function Verify($array)
    {
        $resp = false;
        if (isset($array['NroDni'])) {
            $resp = true;
        }
        return $resp;
    }

    public function Delete($array)
    {
        $resp = false;
        if ($this->Verify($array)) {
            $persona = $this->loadObjId($array);
            if ($persona != null and $persona->Delete()) {
                $resp = true;
            }
        }
        return $resp;
    }

    public function Edit($array)
    {
        $resp = false;
        if ($this->Verify($array)) {
            $persona = $this->loadObjId($array);
            if ($persona != null and $persona->Modify()) {
                $resp = true;
            }
        }
        return $resp;
    }

    public function Search($array = null)
    {
        $on = " true ";
        if ($array <> NULL) {
            if (isset($array['NroDni']))
                $on .= " and NroDni =" . $array['NroDni'];
        }
        $persona = new persona();
        $arrayList = $persona->List($on);
        return $arrayList;
    }

    public function Add($array)
    {
        $resp = false;
        $persona = $this->loadObj($array);
        if ($persona != null and $persona->Insert()) {
            $resp = true;
        }
        return $resp;
    }
}



?>