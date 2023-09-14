<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");

$data = data_submitted();
$autos = new AbmAuto();
$autos = $autos->SearchD($data);
?>

<head>
    <title>Autos de Persona</title>
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <?php
            if ($autos != null) {
            ?>
                <div class="row">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <?php
                        echo '<h1 class="h2">' . $autos[0]->getObjDuenio()->getNombre() . " " . $autos[0]->getObjDuenio()->getApellido() . '</h1>';
                        ?>
                    </div>
                    <div class="card shadow-lg p-3 mb-5">
                        <div class="card-body">
                            <h2 class="pb-3 fs-1 fw-bolder border-bottom">Autos</h2>
                            <div class="table-responsive small">
                                <form action="../Action/autosPersona.php" method="POST">
                                    <table class="table table-striped table-sm fs-4">
                                        <thead id="table-header">
                                            <tr>
                                                <th scope="col">Patente</th>
                                                <th scope="col">Marca</th>
                                                <th scope="col">Modelo</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body">
                                            <?php
                                            foreach ($autos as $auto) {
                                                echo "
                                    <tr '>
                                    <td>{$auto->getPatente()}</td>
                                    <td>{$auto->getMarca()}</td>
                                    <td>{$auto->getModelo()}</td>
                                    </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="m-2"> </h6>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                            <?php
                            echo '<h6 class="m-4">No tiene autos a su nombre</h6>';
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