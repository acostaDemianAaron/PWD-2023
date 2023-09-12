<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Action/nuevaPersona.php");
$persona = new AbmPersona;
$data = data_submitted();
?>


<head>
    <title>Agregar Persona</title>
</head>

<body>
    <?php
    if ($persona->Search($data['NroDni']) == null) {
        if ($persona->Add($data)) {
            echo "Se cargo la persona";
        } else {
            echo "No se pudo cargar el dato en la base de datos";
        }
    } else {
        echo "Ya existe una persona con ese DNI";
    }
    ?>
</body>