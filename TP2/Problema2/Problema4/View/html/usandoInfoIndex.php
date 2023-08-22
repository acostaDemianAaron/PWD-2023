<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bordes.css">
    <title>Problema4</title>
</head>

<body>
    <!-- Problema 3 del Trabajo Práctico Nº 1 de PHP -->
    <!-- Formulario por metodo GET -->
    <form action="../../Controller/usandoInfo.php" method="GET">
        <label>Nombre: </label> <input name="nombre" id="nombre" type="text"><br>
        <label>Apellido: </label> <input name="apellido" id="apellido" type="text"><br>
        <label>Edad: </label> <input name="edad" id="edad" type="text"><br>
        <label>Direccion: </label> <input name="direccion" id="direccion" type="text"><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>