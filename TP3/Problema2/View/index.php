<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo de Texto</title>
</head>
<body>
    <h1>Subir Archivo de Texto</h1>
    <form action="procesar.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona un archivo de texto (txt):</label>
        <input type="file" name="archivo" id="archivo" accept=".txt" required>
        <button type="submit" name="subir">Subir</button>
    </form>

    <h2>Contenido del Archivo:</h2>
    <textarea id="contenido" name="contenido" rows="10" cols="40" readonly></textarea>
</body>
</html>
