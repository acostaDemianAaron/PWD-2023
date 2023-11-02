<?php
header('Content-Type: text/html; charset=utf-8;');
header("Cache-Control: no-cache, must-revalidate");

/////////////////////////////
// CONFIGURACION APP //
/////////////////////////////

// Si no funciona probar $PROYECTO = 'Project-4';
$PROYECTO ='PWD-2023/Project-4';
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECTO";

// Cargar funciones necesarias para forms y classes.
$FUNCIONES = $ROOT.'/Function/funciones.php';
require($FUNCIONES);

// Location of index
$INICIO = "http://". $_SERVER['HTTP_HOST'] . "/$PROYECTO/View/";

// Location of menu (repo index)
$PRINCIPAL = "http://". $_SERVER['HTTP_HOST'] . "/PWD-2023/";

// Location of Libraries.
$LIBS = "/$PROYECTO/View/Libs/";

$_SESSION['ROOT']=$ROOT;
?>