<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bordes.css">
    <title>Problema8</title>
</head>

<body>
    <?php include("../../../../header.php"); ?>

    <fieldset id="caja1" name="caja1">
        <legend>Precios de las entradas de Cinem@s</legend>
        <form action="../../Controller/tarifaEntrada.php" method="GET">
            <div>
                <label>Edad: </label>
                <input id="edad" name="edad" type="number"><br>
            </div>
            <div>
                <label>Eres estudiante: </label>
                <select id="estudiante" name="estudiante">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
            <input type="submit" value="Calcular">
        </form>
    </fieldset>
</body>

</html>