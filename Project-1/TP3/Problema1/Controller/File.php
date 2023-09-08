<?php
class File{
    private $name; 
    private $type;
    private $size;
    private $tempDirection;

    public function upload($name,$type,$size,$tempDirection){
        $this->name = $name;
        $this->type = $type;
        $this->size = $size;
        $this->tempDirection = $tempDirection;
    }

    public function setName($nuevoNombre){
        $this->name = $nuevoNombre;
    }
    public function getName(){
        return $this->name;
    }
    public function setType($nuevoTipo){
        $this->type = $nuevoTipo;
    }
    public function getType(){
        return $this->type;
    }
    public function setSize($newSize){
        $this->size = $newSize;
    }
    public function getSize(){
        return $this->size;
    }
    public function setTempDirection($newTempDirection){
        $this->tempDirection = $newTempDirection;
    }
    public function getTempDirection(){
        return $this->tempDirection;
    }

    public function copiar(){
        if (!copy($this->getTempDirection(), 'uploads/'.$this->getName())) {
            $res= 'ERROR: No se pudo cargar el archivo ';
        }else{
            $res ='El archivo '.$this->getName().' se ha copiado con Éxito <br />';
           }
        return $res;
    }
}
?>