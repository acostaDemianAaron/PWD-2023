<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap5.3.1.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Problema1</title>
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
                        <div class="card-header">Formulario de prueba</div>
                        <div class="card-body">
                            <form action="../../Controller/verNumero.php" method="GET" class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="num">Ingrese un número: </label>
                                        <input id="num" name="num" type="number" class="form-control" placeholder="Ej: -1, 0, 1" value="" required>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">Complete el campo.</div>
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
    <script src="../js/campoVacio.js"></script>
</body>

</html>