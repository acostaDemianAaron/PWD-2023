<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../utils/css/estilos.css">
    <link rel="stylesheet" href="../../../utils/css/estilos.css">

    <title>Problema4</title>
</head>

<body>

    <main>
    <?php include("../../../../../home/View/header.php"); ?>
        <header style="height: 70px">
        </header>
        <div style="height: 30px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg p-3 mb-5 bg-white ">
                        <div class="card-header" style="color:white;">Ingrese sus datos</div>
                        <div class="card-body">
                            <form action="action/aInfoGET.php" method="GET" id="form_control" name="form_control">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="nombre">Ingrese su nombre: </label><br>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="apellido">Ingrese su apellido: </label><br>
                                        <input id="apellido" name="apellido" type="text" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="edad">Ingrese su edad: </label><br>
                                        <input id="edad" name="edad" type="number" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="direccion">Ingrese su direccion: </label><br>
                                        <input id="direccion" name="direccion" type="text" class="form-control" value="" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/formValidation.js"></script>
</body>

</html>