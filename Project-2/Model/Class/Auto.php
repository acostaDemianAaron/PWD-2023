<?php

class Auto
{
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;
    private $mensaje;




    //Magic Methods
    private function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->dniDuenio = "";
    }




    //Setters
    public function setPatente($patente)
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

    private function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
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

    public function getMensaje()
    {
        return $this->mensaje;
    }




    //Methods
    public function setValues($patente, $marca, $modelo, $dniDuenio)
    {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDniDuenio($dniDuenio);
    }


    public function Load()
    {
        $res = false;
        $database = new Database();
        $query = "SELECT * FROM auto WHERE Patente = '" . $this->getPatente() . "'";

        if ($database->Start()) {
            $start = $database->Execute($query);
            if ($start > -1 && $start > 0) {
                $row = $database->Register();

                $objDuenio = new Persona();
                $objDuenio->setNroDni($row['DniDuenio']);
                $objDuenio->Load();

                $this->setValues(
                    $row['Patente'],
                    $row['Marca'],
                    $row['Modelo'],
                    $objDuenio
                );
                $res = true;
            }
        } else {
            $this->setMensaje("Auto->load: " . $database->getError());
        }
        return $res;
    }


    public function Insert()
    {
        $res = false;
        $database = new Database();
        $query = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES ('" .
            $this->getPatente() . "', '" .
            $this->getMarca() . "', '" .
            $this->getModelo() . "', '" .
            $this->getDniDuenio()->getNroDni() . "');";

        if ($database->Start()) {
            if ($database->Execute($query)) {
                $res = true;
            } else {
                $this->setMensaje("Auto->Insert: " . $database->getError());
            }
        } else {
            $this->setMensaje("Auto->Insert: " . $database->getError());
        }
        return $res;
    }


    public function Modify()
    {
        $res = false;
        $database = new Database();
        $query = "UPDATE auto SET
        Marca = '" . $this->getMarca() . "',
        Modelo = '" . $this->getModelo() . "',
        DniDuenio = '" . $this->getDniDuenio()->getNroDni() . "'
        WHERE Patente = '" . $this->getPatente() . "'";

        if ($database->Start()) {
            if ($database->Execute($query)) {
                $res = true;
            } else {
                $this->setMensaje("Auto->Modify: " . $database->getError());
            }
        } else {
            $this->setMensaje("Auto->Modify: " . $database->getError());
        }
        return $res;
    }


    public function Delete()
    {
        $res = false;
        $database = new Database;
        $query = "DELETE FROM auto WHERE Patente = " . $this->getPatente();

        if ($database->Start()) {
            if ($database->Execute($query)) {
                $res = true;
            } else {
                $this->setMensaje("Persona->Delete: " . $database->getError());
            }
        } else {
            $this->setMensaje("Persona->Delete: " . $database->getError());
        }
        return $res;
    }


    public function List($condicion = "")
    {
        $array = array();
        $database = new Database;
        $query = "SELECT * FROM auto ";
        if ($condicion != "") {
            $query .= "WHERE " . $condicion;
        }

        $res = $database->Execute($query);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $database->Register()) {
                    $objAuto = new Auto();
                    $objDuenio = new Persona();
                    $objDuenio->setNroDni($row['DniDuenio']);
                    $objDuenio->Load();

                    $objAuto->setValues(
                        $row['Patente'],
                        $row['Marca'],
                        $row['Modelo'],
                        $objDuenio
                    );
                    array_push($array, $objAuto);
                }
            }
        } else {
            $this->setMensaje("Auto->List: " . $database->getError());
        }
        return $array;
    }


    public function __toString()
    {
        return "Auto: " .
            "\n\tPatente: " . $this->getPatente() .
            "\n\tMarca: " . $this->getMarca() .
            "\n\tModelo: " . $this->getModelo() .
            "\n\tDueño: " . $this->getDniDuenio() . "\n";
    }
}
