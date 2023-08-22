<?php
echo '<link href="../View/css/bootstrap5.3.1.min.css" rel="stylesheet">';

echo '<div class="container p-5">';

if ($_GET) {

    $num = $_GET['num'];
    switch ($num) {
        case 0:
            echo "<h1><strong>El número " . $num . " es cero</strong></h1>";
            break;
        case $num > 0:
            echo "<h1><strong>El número " . $num . " es positivo</strong></h1>";
            break;
        case $num < 0:
            echo "<h1><strong>El número " . $num . " es negativo</strong></h1>";
            break;
    }
} else {
    echo '<h1 style="color: red">No se ingreso ningun valor.</h1>';
}
echo '</div>';
