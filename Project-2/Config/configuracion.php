<?php header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP //
/////////////////////////////

// Multiples formas de hacer funcionar la variable PROYECTO.
// $PROYECTO = 'Project-2';
$PROYECTO ='';
$ROOT = $_SERVER['DOCUMENT_ROOT'].$PROYECTO;
$view = "View/";

$FUNCIONES = $ROOT.'/Function/funciones.php';

require($FUNCIONES);
// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://". $_SERVER['HTTP_HOST'] . "/$PROYECTO/View/index.php";

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://". $_SERVER['HTTP_HOST'] . "/$PROYECTO/View/index.php";

$_SESSION['ROOT']=$ROOT;
// Debug every variable on screen.
// print_r("Getting PROYECTO: $PROYECTO <br>Getting ROOT: $ROOT <br>Getting INICIO: $INICIO <br>Getting PRINCIPAL: $PRINCIPAL <br>Getting functions: $FUNCIONES");
?>