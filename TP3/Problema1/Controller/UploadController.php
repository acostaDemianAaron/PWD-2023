<?php
//Este archivo contendrá la lógica del controlador para manejar la subida de archivos. 
//Deberá procesar la subida del archivo, realizar las validaciones y proporcionar una respuesta al usuario.

class UploadController {
    public function validarArchivo() {
        $res = "";
        if (isset($_POST['subir'])) {
            $nombreArchivo = $_FILES['archivo']['name'];
            $tipoArchivo = $_FILES['archivo']['type'];
            $tamanoArchivo = $_FILES['archivo']['size'];

            // Ruta donde se guardará el archivo enviado
            $ruta = "../uploads/" . $nombreArchivo;

            if (($tipoArchivo == "application/msword" || $tipoArchivo == "application/pdf") && $tamanoArchivo <= 2097152) {
                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta)) {
                    $res = 1;
                } else {
                    $res = 0;
                }
            } else {
                $res = -1;
            }
        }
        return $res;
    }
}

?>