<?php
echo '<link rel="stylesheet" href="../View/css/bootstrap5.3.1.min.css">';
echo '<link rel="stylesheet" href="../View/css/estilos.css">';




echo '<header style="height: 70px; background: linear-gradient(to right, #2B32B2, #1488CC);"></header>';

echo '
<main>
<div style="height: 30px;"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
            <div class="card-header">Formulario de prueba</div><br/>
                <div class="card-body">';

if ($_GET) {

    $num = $_GET['num'];
    switch ($num) {
        case 0:
            echo "<h3><strong>El número " . $num . " es cero</strong></h3>";
            break;
        case $num > 0:
            echo "<h3><strong>El número " . $num . " es positivo</strong></h3>";
            break;
        case $num < 0:
            echo "<h3><strong>El número " . $num . " es negativo</strong></h3>";
            break;
    }
} else {
    echo '<h3 style="color: red">No se ingreso ningun valor.</h3>';
}

echo '
    <br/>
    <form action="../View/html/verNumeroIndex.php">
        <button class="btn btn-primary" type="submit" name="submit">Volver</button>
    </form>
    </div>';
echo '</div>';

echo '
                </div>
            </div>
        </div>
    </div>
</div>
</main>';
