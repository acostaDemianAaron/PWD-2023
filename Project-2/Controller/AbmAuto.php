<?php

class AbmAuto
{
    public function LoadObj($array)
    {
        $auto = null;
        if($this->Verify($array)) {
            $auto = new Auto();
            if (array_key_exists('Marca', $array) && array_key_exists('Modelo', $array) && array_key_exists('DniDuenio', $array)) {
                $persona = new Persona();
                $persona->setNroDni($array['DniDuenio']);
                if ($persona->Load()) {
                    $auto->setValues($array['Patente'], $array['Marca'], $array['Modelo'], $persona);
                } else {
                    $auto = null;
                }
            } else {
                $auto->setPatente($array['Patente']);
                if (!$auto->Load()) $auto = null;
            }
        }

        return $auto;
    }

    public function Verify($array)
    {
        $resp = false;
        if (array_key_exists('Patente', $array)) {
            $resp = true;
        }

        return $resp;
    }

    public function Delete($array)
    {
        $resp = false;
        if ($this->Verify($array)) {
            $auto = $this->LoadObj($array);
            if ($auto != null and $auto->Delete()) {
                $resp = true;
            }
        }

        return $resp;
    }


    public function Edit($array)
    {
        $resp = false;
        if ($this->Verify($array)) {
            $auto = $this->LoadObj($array);
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
            $persona = $persona->LoadObj($array);
            
            $auto = $this->LoadObj($array);
            $auto->setObjDuenio($persona);
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
            foreach($array as $key => $value){
                switch($key){
                    case 'Patente'; $on .= " and Patente ='" . $value . "'"; break;
                    case 'Marca'; $on .= " and Marca ='" . $value . "'"; break;
                    case 'Modelo'; $on .= " and Modelo ='" . $value . "'"; break;
                    case 'DniDuenio'; $on .= " and DniDuenio ='" . $value . "'"; break;
                }
            }
        }
        $Auto = new Auto();
        $arrayAuto = $Auto->List($on);

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