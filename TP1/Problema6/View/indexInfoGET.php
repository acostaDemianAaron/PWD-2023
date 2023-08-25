<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../utils/css/estilos.css">

    <link rel="stylesheet" href="../../../home/libs/Bootstrap5.3.1/css/bootstrap.min.css">

    <title>Problema6</title>
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
                        <div class="card-header" style="color:white;">Ingrese sus datos</div>
                        <div class="card-body">
                            <form action="action/aInfoGET.php" method="GET" class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="nombre">Ingrese su nombre: </label><br>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="" required>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">Complete el campo.</div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="apellido">Ingrese su apellido: </label><br>
                                        <input id="apellido" name="apellido" type="text" class="form-control" value="" required>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">Complete el campo.</div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="edad">Ingrese su edad: </label><br>
                                        <input id="edad" name="edad" type="number" class="form-control" value="" required>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">Complete el campo.</div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="mb-2" for="direccion">Ingrese su direccion: </label><br>
                                        <input id="direccion" name="direccion" type="text" class="form-control" value="" required>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">Complete el campo.</div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="col-3">
                                            <label for="form-select" class="form-label">Genero</label>
                                            <select class="form-select" id="genero" name="genero">
                                                <option selected value="1">Femenimo</option>
                                                <option value="2">Masculino</option>
                                                <option value="3">No binario</option>
                                                <option value="4">Sin especificar</option>
                                            </select>
                                        </div>
                                    </div><br>

                                    <div class="form-row">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="estudio" id="estudio" value="1" checked>
                                            <label class="form-check-label" for="estudio">No tiene estudios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="estudio" id="estudio" value="2">
                                            <label class="form-check-label" for="estudio">Estudios primarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="estudio" id="estudio" value="3">
                                            <label class="form-check-label" for="estudio">Estudios secundarios</label>
                                        </div>
                                    </div><br>

                                    <div class="form-row">
                                        <fieldset id="caja3" name="caja3">
                                            <legend>Seleccione los deportes que realiza</legend>
                                            <div>
                                                <div>
                                                    <input class="form-check-input" id="deporte[]" name="deporte[]" value="Futbol" type="checkbox" />
                                                    <label class="form-check-label">Futbol</label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" id="deporte[]" name="deporte[]" value="Basket" type="checkbox" />
                                                    <label class="form-check-label">Basket</label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" id="deporte[]" name="deporte[]" value="Tennis" type="checkbox" />
                                                    <label class="form-check-label">Tennis</label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" id="deporte[]" name="deporte[]" value="Voley" type="checkbox" />
                                                    <label class="form-check-label">Voley</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div><br>




                                    <button class="btn btn-primary" type="submit">Enviar</button>
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