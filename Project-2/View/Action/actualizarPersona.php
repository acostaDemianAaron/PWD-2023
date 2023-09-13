<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");
$persona = new AbmPersona;
$data = data_submitted();
?>

<head>
    <title>Persona Actualizada</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="m-2">Respuesta del servidor</h6>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <?php

                                if ($persona->Search($data) != null) {
                                    if ($persona->Edit($data)) {
                                        echo '<h6 class="m-4">La persona se a modificado correctamente</h6>';
                                    } else {
                                        echo '<h6 class="m-4">No se pudo cargar el dato en la base de datos</h6>';
                                    }
                                }
                                ?>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>