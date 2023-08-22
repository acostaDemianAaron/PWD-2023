<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap5.3.1.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Problema1</title>
</head>

<body>
    <div class="container p-2">
        <h1>Número positivo, negativo o cero</h1>
        <div class="row g-3 align-items-center">
            <form action="../../Controller/verNumero.php" method="GET">
                <!--Comprueba si el número ingresado es positivo, negativo o cero-->
                <div class="col-auto">
                    <label class="col-form-label">Ingrese un número: </label>
                    <input name="num" id="num" type="number" required>
                </div>
                <div class="col-auto pt-2">
                    <button name="enviar" id="enviar" type="submit" class="btn btn-light">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>