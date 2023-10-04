<?php
require_once('../../Config/config.php');
require_once('../Structure/header.php');

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5">
                    <div class="bg-bg-dark pb-3">Agregar Persona</div>
                    <div class="card-body">
                     <!-- Action in other page -->
                        <form action="../../Controller/PDFGenerator.php" method="POST" id="form_control" name="form_control" class="needs-validation">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su nombre: </label><br>
                                    <input id="name" name="name" type="text" class="form-control" maxlength="25">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su apellido: </label><br>
                                    <input id="surname" name="surname" type="text" class="form-control" maxlength="25">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese nombre del documento: </label><br>
                                    <input id="documentName" name="documentName" type="text" class="form-control" maxlength="25">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Agregar Persona</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
