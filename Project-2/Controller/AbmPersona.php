<?php
class AbmPersona
{
    public function LoadObj($array)
    {
        $persona = null;
        if($this->Verify($array)){
            $persona = new Persona();
            if (array_key_exists('Apellido', $array) && array_key_exists('Nombre', $array) && array_key_exists('fechaNac', $array) && array_key_exists('Telefono', $array) && array_key_exists('Domicilio', $array)) {
                $persona->setValues($array['NroDni'], $array['Apellido'], $array['Nombre'], $array['fechaNac'], $array['Telefono'], $array['Domicilio']);
            } else {
                $persona->setNroDni($array['NroDni']);
                if (!$persona->Load()) {
                    $persona = null;
                }
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
            $persona = $this->LoadObj($array);
            
            $abmAuto = new AbmAuto;
            $autos = $abmAuto->Search($array);

            if(count($autos) > 0){
                foreach($autos as $auto){
                    $auto->Delete();
                }
            }

            if ($persona != null && $persona->Delete()) {
                $resp = true;
            }
        }

        return $resp;
    }

    public function Edit($array)
    {
        $resp = false;
        if ($this->Verify($array)) {
            $persona = $this->loadObj($array);
            if ($persona != null && $persona->Modify()) {
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
                    case 'NroDni'; $on .= " and NroDni ='" . $value . "'"; break;
                    case 'Nombre'; $on .= " and Nombre ='" . $value . "'"; break;
                    case 'Apellido'; $on .= " and Apellido ='" . $value . "'"; break;
                    case 'fechaNac'; $on .= " and fechaNac ='" . $value . "'"; break;
                    case 'Telefono'; $on .= " and Telefono ='" . $value . "'"; break;
                    case 'Domicilio'; $on .= " and Domicilio ='" . $value . "'"; break;
                }
            }
        }
        $persona = new Persona();
        $arrayList = $persona->List($on);

        return $arrayList;
    }

    public function Add($array)
    {
        $resp = false;
        $persona = $this->loadObj($array);
        if ($persona != null && $persona->Insert()) {
            $resp = true;
        }

        return $resp;
    }
}