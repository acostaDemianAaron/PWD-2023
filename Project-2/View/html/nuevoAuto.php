<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");
?>

<head>
    <title>Agregar Auto</title>
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5">
                    <div class="bg-bg-dark pb-3">Agregar Auto</div>
                    <div class="card-body">
                        <form action="../Action/nuevoAuto.php" method="POST" id="form_control" name="form_control" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese la Patente </label><br>
                                    <input id="Patente" name="Patente" type="text" class="form-control" maxlength="7">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Marca </label><br>
                                    <input id="Marca" name="Marca" type="text" class="form-control" maxlength="25">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Modelo </label><br>
                                    <input id="Modelo" name="Modelo" type="text" class="form-control" maxlength="10">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">DNI del dueño </label><br>
                                    <input id="DniDuenio" name="DniDuenio" type="text" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Agregar Auto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/validateNewCar.js"></script>
</body>