<?php
require_once("../../Config/configuracion.php");

new Header("Pagina Principal", $LIBS, $INICIO, $PRINCIPAL);
?>

<head>
    <title>Buscar Persona</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5">
                    <div class="bg-bg-dark pb-3">Buscar Persona</div>
                    <div class="card-body">
                        <form action="../Action/buscarPersona.php" method="POST" id="form_control" name="form_control" class="needs-validation">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="mb-2">Ingrese su documento: </label><br>
                                    <input id="NroDni" name="NroDni" type="text" class="form-control" maxlength="25">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Buscar Persona</button>
                        </form>
                        <script src="../js/validateSearchPerson.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
new Footer($INICIO);
?>