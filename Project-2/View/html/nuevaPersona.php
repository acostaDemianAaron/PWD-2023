<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");
?>

<head>
    <title>Agregar Persona</title>
</head>

<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg p-3 mb-5">
                        <div class="bg-bg-dark pb-3">Ingrese sus datos</div>
                        <div class="card-body">
                            <form action="../Action/nuevaPersona.php" method="POST" id="form_control" name="form_control">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="nombre">Ingrese su nombre: </label><br>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

