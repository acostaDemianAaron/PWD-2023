<?php
require_once('../../Config/config.php');
require_once('../../vendor/autoload.php');
require_once('../Structure/header.php');
require_once('../../Controller/PDFGenerator.php');
require_once('../../Controller/JWT.php');

if(empty(data_submitted())){
    header('Location: ../../View/html/newPDF.php?error=bad-form');
    exit;
} else if(property_exists(generatePDF(data_submitted()), "message")){
    header('Location: ../../View/html/newPDF.php?error=no-jwt');
    exit;
}
?>

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
                                print_r($json);
                                // if ($json) {
                                //     if ($persona->Add($data)) {
                                //         echo '<h6 class="m-4">Se cargo la persona</h6>';
                                //     } else {
                                //         echo '<h6 class="m-4">No se pudo cargar el dato en la base de datos</h6>';
                                //     }
                                // } else {
                                //     echo '<h6 class="m-4">Ya existe una persona con ese DNI</h6>';
                                // }
                                ?>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>