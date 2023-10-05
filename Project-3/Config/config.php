<?php
header('Content-Type: text/html; charset=utf-8;');
header ("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP //
/////////////////////////////

// Si no funciona probar $PROYECTO = 'Project-3';
$PROYECTO ='';
$ROOT = $_SERVER['DOCUMENT_ROOT'].$PROYECTO;

$FUNCIONES = $ROOT.'/Function/functions.php';

require($FUNCIONES);
// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://". $_SERVER['HTTP_HOST'] . "/$PROYECTO/View/index.php";

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://". $_SERVER['HTTP_HOST'] . "/$PROYECTO/View/index.php";

$_SESSION['ROOT']=$ROOT;

// Setting keys on browser's session, so it can be deleted after closing it.
$_SESSION['apiKey'] = "660e9c4863d6c4a18c66f56f8b783ec0df9853fc4176971f70a6fb3f0ed4c0e8";
$_SESSION['workspaceID'] = "alan.vera@est.fi.uncoma.edu.ar";
$_SESSION['secretKey'] = "";
// Debug every variable on screen.
// print_r("Getting PROYECTO: $PROYECTO <br>Getting ROOT: $ROOT <br>Getting INICIO: $INICIO <br>Getting PRINCIPAL: $PRINCIPAL <br>Getting functions: $FUNCIONES");
?>
