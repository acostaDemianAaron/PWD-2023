<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");
$AbmPersona = new AbmPersona;
$personas = $AbmPersona->Search();
//print_r($personas);
?>


<head>
    <title>Lista de Personas</title>
</head>


<body>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Datos en la base de datos</h1>
                </div>
                <div class="by-2 py-2"></div>

                <div class="card shadow-lg p-3 mb-5">
                    <div class="card-body">
                        <h2 class="pb-3 fs-1 fw-bolder border-bottom">Tabla de personas</h2>
                        <div class="table-responsive small">
                            <table class="table table-striped table-sm fs-4">
                                <thead id="table-header">
                                    <tr>
                                        <th scope="col">DNI</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Fecha Nacimiento</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Domicilio</th>
                                        <th scope="col">Lista de Autos</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    <?php
                                    foreach($personas as $persona){
                                        echo "
                                    <tr '>
                                    <td>{$persona->getNroDni()}</td>
                                    <td>{$persona->getApellido()}</td>
                                    <td>{$persona->getNombre()}</td>
                                    <td>{$persona->getFechaNac()}</td>
                                    <td>{$persona->getTelefono()}</td>
                                    <td>{$persona->getDomicilio()}</td>
                                    <td style='text-align: center'><li class='btn btn-secondary'><a href='../Action/autosPersona.php' class='nav-link active'>Ver autos</a></li></td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>