<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");
?>

<head>
    <title>Buscar auto</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5">
                    <div class="bg-bg-dark pb-3">Buscar por patente</div>
                    <div class="card-body">
                        <form action="../Action/cambioDuenio.php" method="POST" id="cambio-duenio" name="cambio-duenio" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese la patente: </label><br>
                                    <input id="Patente" name="Patente" type="text" class="form-control" maxlength="7">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese el DNI del nuevo dueño: </label><br>
                                    <input id="NroDni" name="NroDni" type="text" class="form-control" maxlength="8">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="enviar">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/validateChangeDuenio.js"></script>
</body>