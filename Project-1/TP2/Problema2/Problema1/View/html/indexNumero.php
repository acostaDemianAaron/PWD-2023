<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../utils/css/estilos.css">

    <title>Problema1</title>
</head>

<body>
    <?php include("../../../../../home/View/header.php"); ?>
    <div>
        <div style="height: 30px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg p-3 mb-5 bg-white ">
                        <div class="card-header" style="color:white;">Positivo, negativo o cero</div>
                        <div class="card-body">
                            <form action="action/aVerNumero.php" method="GET" id="form_control" name="form_control">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="num">Ingrese un número: </label><br>
                                        <input id="num" name="num" type="number" class="form-control m-2" placeholder="Ej: -1, 0, 1" value="">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/formValidation.js"></script>

</body>

</html>