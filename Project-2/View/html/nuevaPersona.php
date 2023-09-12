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
                    <div class="bg-bg-dark pb-3">Agregar Persona</div>
                    <div class="card-body">
                        <form action="../Action/nuevaPersona.php" method="POST" id="form_control" name="form_control" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2" for="nombre">Ingrese su nombre: </label><br>
                                    <input id="nombre" name="nombre" type="text" class="form-control" maxlength="25" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su apellido: </label><br>
                                    <input id="apellido" name="apellido" type="text" class="form-control" maxlength="25" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su documento: </label><br>
                                    <input id="nroDni" name="nroDni" type="number" class="form-control" placeholder="EJ: 11.222.333" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su domicilio: </label><br>
                                    <input id="domicilio" name="domicilio" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su telefono: </label><br>
                                    <input id="telefono" name="telefono" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3 pb-2">
                                    <label class="mb-2">Ingrese su fecha de nacimiento: </label><br>
                                    <input id="fechaNac" name="fechaNac" type="date" class="form-control" required>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Agregar Persona</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/validateNewPerson.js"></script>
</body>