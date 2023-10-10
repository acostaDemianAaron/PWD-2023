<?php
require_once("../../Config/configuracion.php");

new Header("Pagina Principal", $LIBS, $INICIO, $PRINCIPAL);
$data = data_submitted();
$autoObj = new AbmAuto();
?>


<head>
    <title>Agregar Auto</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="m-2">Respuesta del servidor</h6>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <?php
                                $data['Patente'] = strtoupper($data['Patente']);
                                if ($autoObj->Search($data) == null) {
                                    if ($autoObj->Add($data)) {
                                        echo "<p>El auto a sido agregado</p>";
                                    } else {
                                        echo "<p>El auto no se pudo agregar, porque no existe el dueño en BD</p>";
                                    }
                                } else {
                                    echo "<p>El auto ya existe en la BD</p>";
                                }
                                ?>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
new Footer($INICIO);
?>