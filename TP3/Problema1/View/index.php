<?php include("../../../home/View/header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir Archivo al Servidor</title>
</head>

<body>

  <div class="container mt-5">
    <h2 class="text-center mb-4">Subir Archivo DOC o PDF al Servidor</h2>
    <form action="a_upload_form.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="archivo" class="form-label">Seleccionar Archivo</label>
        <input type="file" class="form-control" id="myFile" name="myFile">
      </div>
      <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
    </form>
  </div>

</body>

</html>