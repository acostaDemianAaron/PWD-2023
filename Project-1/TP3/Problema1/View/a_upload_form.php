<?php
include_once('../Controller/UploadController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../home/libs/Bootstrap5.3.1/css/bootstrap.min.css">
    <title>Resultado</title>
</head>

<body>
    <?php
    ?>
    <main>
        <header style="height: 70px">
        </header>
        <div style="height: 30px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg p-3 mb-5 bg-white ">
                        <div class="card-body">

                            <div class="container">
                                <h2 class="text-center my-4"><?php echo $res ?></h2>
                                <?php if (isset($file) && !empty($file->getName())) : ?>
                                    <p class="text-center">Descarga tu archivo subido: <a href="<?php echo 'uploads/' . $file->getName(); ?>" download><?php echo $file->getName(); ?></a></p>
                                <?php endif; ?>
                            </div>
                            <br>

                            <form action="index.php">
                                <button class="btn btn-primary" type="submit">Volver</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>