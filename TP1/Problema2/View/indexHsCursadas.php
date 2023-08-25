<?php include("../../../home/View/header.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../utils/css/estilos.css">

    <link rel="stylesheet" href="../../../home/libs/Bootstrap5.3.1/css/bootstrap.min.css">>
    <title>Problema2</title>
</head>

<body>

    <main>
        <header style="height: 70px">
        </header>
        <div style="height: 30px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg p-3 mb-5 bg-white ">
                        <div class="card-header" style="color:white;">Ingresa las horas cursadas de la semana:</div>
                        <div class="card-body">
                            <form action="action/aHsCursadas.php" method="GET" class="needs-validation" novalidate>
                                <div class="form-row">

                                    <div class="mb-3">

                                        <div class="mb-3" style="color:black;">Lunes</div>
                                        <input id="lunes" name="lunes" type="time" class="form-control" value="" required>

                                        <div class="mb-3" style="color:black;">Martes</div>
                                        <input id="martes" name="martes" type="time" class="form-control" value="" required>

                                        <div class="mb-3" style="color:black;">Miercoles</div>
                                        <input id="miercoles" name="miercoles" type="time" class="form-control" value="" required>

                                        <div class="mb-3" style="color:black;">Jueves</div>
                                        <input id="jueves" name="jueves" type="time" class="form-control" value="" required>

                                        <div class="mb-3" style="color:black;">Viernes</div>
                                        <input id="viernes" name="viernes" type="time" class="form-control" value="" required>

                                    </div>
                                    <button class="btn btn-primary" type="submit">Calcular</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../../utils/js/campoVacio.js"></script>
</body>

</html>