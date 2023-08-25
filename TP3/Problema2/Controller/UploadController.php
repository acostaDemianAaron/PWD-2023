<?php
include_once('File.php');

if ($_FILES['myFile']["error"] <= 0){
    if($_FILES['myFile']['type'] === "text/plain"){
        $file = new File();
        $file->upload($_FILES['myFile']['name'],$_FILES['myFile']['type'],($_FILES['myFile']["size"] / 1024),$_FILES['myFile']['tmp_name']);
        $res = $file->copiar();
        $texto = file_get_contents('../View/uploads/'.$file->getName());
    } else {
            $res = 'ERROR! Solo se admiten archivos .txt';
        }
}

?>