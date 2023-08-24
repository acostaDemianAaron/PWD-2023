<?php
//Este archivo contendrá la lógica del controlador para manejar la subida de archivos. 
//Deberá procesar la subida del archivo, realizar las validaciones y proporcionar una respuesta al usuario.

class UploadController {
    public function validarArchivo() {
        $salida = "";
        if (isset($_POST['subir'])) {
            $nombreArchivo = $_FILES['archivo']['name'];
            $tipoArchivo = $_FILES['archivo']['type'];
            $tamanoArchivo = $_FILES['archivo']['size'];

            // Ruta donde se guardará el archivo enviado
            $ruta = "../uploads/" . $nombreArchivo;

            if (($tipoArchivo == "application/msword" || $tipoArchivo == "application/pdf") && $tamanoArchivo <= 2097152) {
                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta)) {
                    $salida = "El archivo se subió correctamente. Puedes <a href='$ruta' target='_blank'>descargarlo aquí</a>.";
                } else {
                    $salida = "Hubo un error al subir el archivo.";
                }
            } else {
                $salida = "El archivo no cumple con los requisitos de tipo o tamaño.";
            }
        }
        return $salida;
    }
}

?>