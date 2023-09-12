<?php

class Persona {
   private $nroDni;
   private $apellido;
   private $nombre;
   private $fechaNac;
   private $telefono;
   private $domicilio;
   private $mensaje;
   
   function __construct() {
      $this->nroDni = "";
      $this->apellido = "";
      $this->nombre = "";
      $this->fechaNac = "";
      $this->telefono = "";
      $this->domicilio = "";
      $this->mensaje = "";
   }
}