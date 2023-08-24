<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>
    <h1>Subir Archivo</h1>
    <form action="action/upload_form.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona un archivo:</label>
        <input type="file" name="archivo" id="archivo" accept=".doc, .pdf" required>
        <p>Tamaño máximo: 2MB</p>
        <button type="submit" name="subir">Subir</button>
    </form>
</body>
</html>
