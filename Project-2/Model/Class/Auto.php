<?php

class Auto
{
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;




    //Magic Methods
    private function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->dniDuenio = "";
    }




    //Setters
    private function setPatente($patente)
    {
        $this->patente = $patente;
    }

    private function setMarca($marca)
    {
        $this->marca = $marca;
    }

    private function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    private function setDniDuenio($dniDuenio)
    {
        $this->dniDuenio = $dniDuenio;
    }




    //Getters
    private function getPatente()
    {
        return $this->patente;
    }

    private function getMarca()
    {
        return $this->marca;
    }

    private function getModelo()
    {
        return $this->modelo;
    }

    private function getDniDuenio()
    {
        return $this->dniDuenio;
    }




    //Methods
    public function setValues($patente, $marca, $modelo, $dniDuenio)
    {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDniDuenio($dniDuenio);
    }


    public function load()
    {
        $res = false;
        $baseDatos = new BaseDatos();
        $query = "SELECT * FROM auto WHERE Patente = '" . $this->getPatente() . "'";

        if($baseDatos->Start())     {
            $start = $baseDatos->Execute($query);
            if($start > -1 && $start >0)    {
                $row = $baseDatos
            }
        }
    }
}
