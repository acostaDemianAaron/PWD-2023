<?php
include("../../../../home/View/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinem@s</title>
</head>

<body>
    <div class="container">
        <form id="form-peliculas" name="form-peliculas" action="POST">
            <div class="fs-2">Cinem@s</div>
            <!-- Table for inputs -->
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 form-inputs">
                        <label for="inputTitulo" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="inputTitulo">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="inputActores" class="form-label">Actores</label>
                        <input type="text" class="form-control" id="inputActores">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="inputDirector" class="form-label">Director</label>
                        <input type="text" class="form-control" id="inputDirector">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="inputGuion" class="form-label">Guion</label>
                        <input type="text" class="form-control" id="inputGuion">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="inputProduccion" class="form-label">Produccion</label>
                        <input type="text" class="form-control" id="inputProduccion">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 col-2">
                        <label for="inputAno" class="form-label">Año</label>
                        <input type="number" class="form-control" id="inputAno">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 col-4">
                        <label for="inputNacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" class="form-control" id="inputNacionalidad">
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-3">
                        <label for="form-select" class="form-label">Genero</label>
                        <select class="form-select" id="form-select">
                            <option selected value="Comedia">Comedia</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 col-2">
                        <label for="inputDuracion" class="form-label">Duracion</label>
                        <input type="number" class="form-control" id="inputDuracion">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Todo los publicos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Mayores de 7 años</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">Mayores de 18 años</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 col-8">
                            <label for="formControlTextarea" class="form-label">Sinopsis</label>
                            <textarea class="form-control" id="formControlTextarea" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-primary" id="enviar" name="enviar">Enviar Datos</button>
                </div>
                <div class="col">
                    <input type="reset" class="btn btn-primary" value="Limpiar">
                </div>
            </div>
        </form>
    </div>

    <script src="../js/validarFormulario.js"></script>
</body>

</html>