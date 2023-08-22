<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema2</title>
</head>

<body>
    <!-- Problema 2 del Trabajo Práctico Nº 1 de PHP -->
    <form action="../../Controller/horaDeCursada.php" method="GET">

        <label>Lunes: </label> <input name="lunes" id="lunes" type="time"><br>
        <label>Martes: </label> <input name="martes" id="martes" type="time"><br>
        <label>Miercoles: </label> <input name="miercoles" id="miercoles" type="time"><br>
        <label>Jueves: </label><input name="jueves" id="jueves" type="time"><br>
        <label>Viernes: </label> <input name="viernes" id="viernes" type="time"><br>
        <input type="submit" value="Calcular">

    </form>
</body>

</html>