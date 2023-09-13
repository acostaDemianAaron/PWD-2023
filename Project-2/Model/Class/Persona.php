<?php
class Persona {
   private $nroDni;
   private $apellido;
   private $nombre;
   private $fechaNac;
   private $telefono;
   private $domicilio;
   private $mensaje;

   /**
     * Construct Function.
     * Initializes empty object.
     */
   public function __construct() {
      $this->nroDni = "";
      $this->apellido = "";
      $this->nombre = "";
      $this->fechaNac = "";
      $this->telefono = "";
      $this->domicilio = "";
      $this->mensaje = "";
   }

   /**
     * Load Function.
     * Loads values to each attribute of the class.
     * @param string $patente
     * @param string $marca
     * @param string $modelo
     * @param int $duenio
     */
   public function setValues($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio){
      $this->setNroDni($nroDni);
      $this->setApellido($apellido);
      $this->setNombre($nombre);
      $this->setFechaNac($fechaNac);
      $this->setTelefono($telefono);
      $this->setDomicilio($domicilio);
   }

   // Setters
   public function setNroDni($nroDni){
      $this->nroDni = $nroDni;
   }

   private function setApellido($apellido){
      $this->apellido = $apellido;
   }

   private function setNombre($nombre){
      $this->nombre = $nombre;
   }

   private function setFechaNac($fechaNac){
      $this->fechaNac = $fechaNac;
   }

   private function setTelefono($telefono){
      $this->telefono = $telefono;
   }

   private function setDomicilio($domicilio){
      $this->domicilio = $domicilio;
   }

   private function setMensaje($mensaje){
      $this->mensaje = $mensaje;
   }

   // Getters
   public function getNroDni(){
      return $this->nroDni;
   }

   public function getApellido(){
      return $this->apellido;
   }

   public function getNombre(){
      return $this->nombre;
   }

   public function getFechaNac(){
      return $this->fechaNac;
   }

   public function getTelefono(){
      return $this->telefono;
   }

   public function getDomicilio(){
      return $this->domicilio;
   }
   
   public function getMensaje(){
      $this->mensaje;
   }

   // Methods
   /**
    * Loads object if NroDni is set and has a row in table.
    */
   public function Load(){
      $res = false;
      $database = new Database();
      $query = "SELECT * FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";

      if($database->Start()){
         $status = $database->Execute($query);
         if($status > 0){
            $row = $database->Register();
            $this->setValues($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
            $res = true;
         }
      } else {
         $this->setMensaje("Persona no pudo ser cargada. Error: " . $database->getError());
      }

      return $res;
   }

   /**
    * Add a row to the table.
    */
   public function Insert(){
      $res = false;
      $database = new Database();
      $query = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES('" .
      $this->getNroDni() . "', '" .
      $this->getApellido() . "', '" .
      $this->getNombre() . "', '" .
      $this->getFechaNac() . "', '" .
      $this->getTelefono() . "', '"  .
      $this->getDomicilio() . "')";

      if ($database->Start()) {
         if ($database->Execute($query)) {
            $res = true;
         } else {
            $this->setMensaje("Persona->Insert: " . $database->getError());
         }
      } else {
         $this->setMensaje("Persona->Insert: " . $database->getError());
      }

     return $res;
   }

   /**
    * Modify the row of the table.
    */
   public function Modify(){
      $res = false;
      $database = new Database();
      
      $query = "UPDATE persona SET 
      Apellido = '" . $this->getApellido() . "', 
      Nombre = '" . $this->getNombre() . "', 
      fechaNac = '" . $this->getFechaNac() . "', 
      Telefono = '" . $this->getTelefono() . "', 
      Domicilio = '" . $this->getDomicilio() . "' 
      WHERE NroDni = '" . $this->getNroDni() . "'";
      if ($database->Start()) {
         if ($database->Execute($query) > -1) {
             $res = true;
         } else {
             $this->setMensaje("Persona->Modify: " . $database->getError());
         }
      } else {
            $this->setMensaje("Persona->Modify: " . $database->getError());
      }

     return $res;
   }

   /**
    * Delete a row in the table.
    */
   public function Delete(){
      $res = false;
      $database = new Database();
      $query = "DELETE FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";

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

   /**
    * List row or rows of table.
    */
   public function List($condition = ""){
      $array = array();
      $database = new Database();
      $query = "SELECT * FROM persona ";
      if($condition != ""){
         $query .= "WHERE " . $condition;
      }
      $res = $database->Execute($query);
      if($res > 0){
         while($row = $database->Register()){
            $obj = new Persona();
            $obj->setValues(
               $row['NroDni'],
               $row['Apellido'],
               $row['Nombre'],
               $row['fechaNac'],
               $row['Telefono'],
               $row['Domicilio']
            );
            array_push($array, $obj);
         }
      } else {
         $this->setMensaje("Persona->List: " . $database->getError());
      }

      return $array;
   }

   /**
    * To string function for showing a simpler string of data.
    */
   public function __toStrings(){
      return "Person {$this->getNombre()} {$this->getApellido()}
      \n\tDNI: {$this->getNroDni()}
      \n\tFecha Nacimiento: {$this->getFechaNac()}
      \n\tTelefono: {$this->getTelefono()}
      \n\tDomicilio: {$this->getDomicilio()}\n";
   }
}