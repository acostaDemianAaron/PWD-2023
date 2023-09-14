<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");
$data = data_submitted();
$AbmPersona = new AbmPersona;
$persona = $AbmPersona->loadObjId($data);
?>

<head>
    <title>Actualizar Persona</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5">
                    <div class="bg-bg-dark pb-3">Agregar Persona</div>
                    <div class="card-body">
                        <?php
                        if (isset($persona) && gettype($persona) != "boolean") {
                        ?>
                            <form action="../Action/actualizarPersona.php" method="POST" id="form_control" name="form_control" class="needs-validation">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2">Ingrese su nombre: </label><br>
                                        <input id="Nombre" name="Nombre" type="text" class="form-control" maxlength="25" value="<?= $persona->getNombre() ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2">Ingrese su apellido: </label><br>
                                        <input id="Apellido" name="Apellido" type="text" class="form-control" maxlength="25" value="<?= $persona->getApellido() ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2">Ingrese su documento: </label><br>
                                        <input id="NroDni" name="NroDni" type="text" class="form-control" maxlength="25" value="<?= $persona->getNroDni() ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2">Ingrese su domicilio: </label><br>
                                        <input id="Domicilio" name="Domicilio" type="text" class="form-control" maxlength="25" value="<?= $persona->getDomicilio() ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2">Ingrese su telefono: </label><br>
                                        <input id="Telefono" name="Telefono" type="text" class="form-control" maxlength="25" value="<?= $persona->getTelefono() ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 pb-2">
                                        <label class="mb-2">Ingrese su fecha de nacimiento: </label><br>
                                        <input id="fechaNac" name="fechaNac" type="date" class="form-control" value="<?= $persona->getFechaNac() ?>">
                                </div>
                            </div>
                            <button class=" btn btn-primary" type="submit" id="enviar" name="enviar">Actualizar</button>
                            </form>
                        <?php
                        } else {
                            echo '<div class="bg-bg-dark pb-3">Persona no encontrada</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/validateNewPerson.js"></script>
</body>

<?php
require_once("../Structure/footer.php");
?>