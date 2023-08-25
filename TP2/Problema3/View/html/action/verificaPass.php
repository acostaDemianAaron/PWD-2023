<?php
include ("../../../Controller/verificarCuenta.php");
$cuentas = [
    [
        "username" => "Usuario",
        "password" => "ABCD1234"
    ],
    [
        "username" => "admin",
        "password" => "admin123"
    ]
];

$obj = new cuenta();
$username = $_POST['username'];
$password = $_POST['password'];
$resp = $obj->verificar($cuentas, $username, $password);

switch($resp){

case 1:
    $salida = "<h1><strong>Bienvenido " . $_POST["username"] .".</strong></h1>";
    break;
case 2:
    $salida = "<h1><strong>Contraseña Incorrecta.</strong></h1>";
    break;
case 0:
    $salida = "<h1><strong>Usuario no existe.</strong></h1>";
    break;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../../home/libs/Bootstrap5.3.1/css/bootstrap.min.css">
    <script src="../../../../../home/libs/Bootstrap5.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <title>Bienvenido</title>
</head>

<body>
    <?php
    echo $salida;
    ?>

<div class="col-auto pt-2">
        <form action="../login.php">
            <button type="submit" class="btn btn-primary">Unlog</button>
        </form>
    </div>
</body>

</html>




