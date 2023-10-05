<?php
require_once('../../Config/config.php');
require_once('../../vendor/autoload.php');
createHeader("Generate PDF");
require_once("../../Controller/PDFControl.php");

if (empty(data_submitted())) {
    header('Location: ../../View/html/newPDF.php?error=bad-form');
    exit;
} else {
    $pdfObj = connectPDF($_SESSION['apiKey'],$_SESSION['workspaceID'],$_SESSION['secretKey'] );
    $response = createPDF($pdfObj, data_submitted());
    // if (is_object($response)) {
    //     if (property_exists($response, "message")) {
    //         header('Location: ../../View/html/newPDF.php?error=no-jwt');
    //         exit;
    //     }
    // } else {
    //     header('Location: ../../View/html/newPDF.php?error=bad-form&Puto=true' );
    //     exit;
    // }
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="m-2">Response</h6>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <h6 class="m-4">The PDF was created successfully</h6>
                                <a href="<?php echo $response->response ?>" target="_blank" class="btn btn-primary mx-4 mb-4" role="button">View PDF</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
createFooter();
?>