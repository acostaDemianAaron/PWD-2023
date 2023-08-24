<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bordes.css">
    <title>Problema7</title>
</head>

<body>
    <?php include("../../../../header.php"); ?>

    <form action="../../Controller/operacion.php" method="GET">
        <fieldset id="caja1" name="caja1">
            <legend>Seleccione los deportes que realiza</legend>
            <div>
                <label>Ingrese el primer valor: </label><input name="valor1" id="valor1" type="number"><br>
                <label>Ingrese el segundo valor: </label><input name="valor2" id="valor2" type="number"><br>
            </div>
            <div>
                <br><label>Seleccione la operacion: </label>
                <select name="operacion" id="operacion">
                    <option value="Suma">Suma</option>
                    <option value="Resta">Resta</option>
                    <option value="Multiplicacion">Multiplicion</option>
                </select><br>
            </div>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>

</html>