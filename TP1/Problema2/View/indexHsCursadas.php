<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../libs/Bootstrap5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Problema2</title>
</head>

<body>
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