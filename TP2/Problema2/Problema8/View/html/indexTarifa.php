<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../utils/css/estilos.css">

    <title>Problema8</title>
</head>

<body>
<?php include("../../../../../home/View/header.php"); ?>
    <main>
        <header style="height: 70px">
        </header>
        <div style="height: 30px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg p-3 mb-5 bg-white ">
                        <div class="card-header" style="color:white;">Precios de las entradas de Cinem@s</div>
                        <div class="card-body">
                            <form action="action/aTarifa.php" method="GET" id="form_control" name="form_control">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="edad">Ingrese la edad</label><br>
                                        <input id="edad" name="edad" type="number" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="col-3">
                                            <label for="form-select" class="form-label">¿Eres estudiante?</label>
                                            <select class="form-select" id="estudiante" name="estudiante">
                                                <option selected value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><br>
                                <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Calcular</button>
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