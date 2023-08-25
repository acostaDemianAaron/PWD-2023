<?php
include_once('../Controller/UploadController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container-fluid h-100 d-flex flex-column justify-content-center align-items-center">
        <h2 class="mb-4 text-center"><?php echo $resultado?></h2>
        <h4 class="text-center">Texto contenido en el TXT</h4>
        <div class="w-100 text-center">
            <textarea class="form-control" rows="10"><?php echo $texto?></textarea>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
