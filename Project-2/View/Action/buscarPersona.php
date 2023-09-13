<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");

$data = data_submitted();
$persona = new AbmPersona();
$datosDePersona = $persona->Search($data);
?>

<head>
    <title>Buscar Persona</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5">
                    <div class="bg-bg-dark pb-3">Agregar Persona</div>
                    <div class="card-body">
                        <?php
                        if (!empty($datosDePersona)) {
                            echo '
        <form action="../Action/nuevaPersona.php" method="POST" id="form_control" name="form_control" class="needs-validation">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su nombre: </label><br>
                                    <input id="Nombre" name="Nombre" type="text" class="form-control" maxlength="25">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su apellido: </label><br>
                                    <input id="Apellido" name="Apellido" type="text" class="form-control" maxlength="25">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2" disabled>DNI: (No se puede modificar)</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su domicilio: </label><br>
                                    <input id="Domicilio" name="Domicilio" type="text" class="form-control" maxlength="25">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su telefono: </label><br>
                                    <input id="Telefono" name="Telefono" type="text" class="form-control" maxlength="25">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3 pb-2">
                                    <label class="mb-2">Ingrese su fecha de nacimiento: </label><br>
                                    <input id="fechaNac" name="fechaNac" type="date" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Agregar Persona</button>
                        </form>
        ';
                        } else {
                            echo "<p>La persona no existe en la base da datos.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>