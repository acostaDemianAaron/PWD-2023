<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema1</title>
</head>

<body>
    <!-- Problema 1 del Trabajo Práctico Nº 1 de PHP -->
    <form name="formNum" id="formNum" action="../../Controller/verNumero.php" method="GET">
        <!--Comprueba si el número ingresado es positivo, negativo o cero-->
        <h2>Número positivo, negativo o cero</h2>
        Ingrese un número: <input name="num" id="num" type="number"> <br>
        <input name="enviar" id="enviar" type="submit" value="Comprobar">
    </form>
</body>

</html>