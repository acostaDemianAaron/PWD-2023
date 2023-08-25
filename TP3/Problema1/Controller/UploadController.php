<?php
include_once('File.php');

if ($_FILES['myFile']["error"] <= 0){
    if($_FILES['myFile']['type'] === "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $_FILES['myFile']['type'] === "application/pdf"){
        $file = new File();
        $file->upload($_FILES['myFile']['name'],$_FILES['myFile']['type'],($_FILES['myFile']["size"] / 1024),$_FILES['myFile']['tmp_name']);
        $res = $file->copiar();
    } else {
            $res = 'ERROR! Solo se admiten .pdf o .doc';
        }
}

?>