<?php
include_once('File.php');

$uploadDirectory = "uploads/"; // Directorio donde se guardarán los archivos subidos

if ($_FILES['myFile']["error"] <= 0){
    if($_FILES['myFile']['type'] === "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $_FILES['myFile']['type'] === "application/pdf"){
        $file = new File();
        $file->upload($_FILES['myFile']['name'], $_FILES['myFile']['type'], ($_FILES['myFile']["size"] / 1024), $_FILES['myFile']['tmp_name']);

        // Generamos un nombre de archivo único para evitar colisiones
        $uniqueFileName = uniqid() . "_" . $_FILES['myFile']['name'];
        $filePath = $uploadDirectory . $uniqueFileName;

        if (move_uploaded_file($_FILES['myFile']['tmp_name'], $filePath)) {
            $res = 'Archivo subido con éxito.';
            $file->setName($uniqueFileName); // Actualizamos el nombre del archivo en el objeto File
        } else {
            $res = 'ERROR al subir el archivo.';
        }
    } else {
        $res = 'ERROR! Solo se admiten archivos .pdf o .doc';
    }
}
?>
