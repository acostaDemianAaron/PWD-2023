<?php

class AbmAuto
{
    public function loadObj($array)
    {
        $auto = null;
        if (array_key_exists('NroDni', $array) && array_key_exists('Marca', $array) && array_key_exists('Modelo', $array) && array_key_exists('DniDuenio', $array)) {
            $persona = new Persona();
            $persona->setNroDni($array['DniDuenio']);
            if ($persona->Load()) {
                $auto = new Auto();
                $auto->setValues($array['Patente'], $array['Marca'], $array['Modelo'], $persona);
            } else {
                $auto = null;
            }
        }
    }

    public function loadObjId($array)
    {
        $auto = null;
        if ("" != $array['Patente']) {
            $auto = new Auto();
            $auto->setPatente($array['Patente']);
            if (!$auto->Load()) {
                $auto = null;
            }
        }
        return $auto;
    }

    public function Verify($array)
    {
        $resp = false;
        if (isset($array['Patente'])) {
            $resp = true;
        }
        return $resp;
    }



    public function Delete($array)
    {
        $resp = false;
        if ($this->Verify($array)) {
            $auto = $this->loadObjId($array);
            if ($auto != null and $auto->Delete()) {
                $resp = true;
            }
        }

        return $resp;
    }


    public function edit($array)
    {
        $resp = false;
        if ($this->Verify($array)) {
            $auto = $this->loadObjId($array);
            if ($auto != null && $auto->Modify()) {
                $resp = true;
            }
        }
        return $resp;
    }

    public function EditDuenio($array)
    {
        $resp = false;
        if ($this->Verify($array)) {
            $persona = new AbmPersona;
            $persona = $persona->loadObjId($array);
            
            $auto = $this->loadObjId($array);
            $auto->setObjDuenio($persona);
            $auto->setDniDuenio($persona->getNroDni());
            if ($auto != null && $auto->Modify()) {
                $resp = true;
            }
        }
        return $resp;
    }

    public function Search($array = null)
    {
        $on = " true ";
        if ($array <> null) {
            if (isset($array['Patente'])) {
                $on .= " and Patente ='" . $array['Patente'] . "'";
            }
        }
        $Auto = new Auto();
        $arrayAuto = $Auto->List($on);
        return $arrayAuto;
    }

    public function SearchD($array)
    {
        $arrayAuto = [];
        $on = " ";
        if (isset($array)) {
            $on = "DniDuenio = " . $array["NroDni"];
            $Auto = new Auto();
            $arrayAuto = $Auto->List($on);
        }
        return $arrayAuto;
    }

    public function Add($array)
    {
        $resp = false;
        $auto = $this->LoadObj($array);
        if ($auto != null) {
            if ($auto->Insert()) {
                $resp = true;
            }
        }
        return $resp;
    }


}
