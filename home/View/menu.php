<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPs</title>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container">
        <div class="accordion accordion-flush" id="accordion-menu">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        TP 1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordion-menu">
                    <div class="accordion-body">
                        <!-- Ejercicios del TP 1 -->
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP1/Problema1/View/indexNumero.php'">EJ1</button>
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP1/Problema2/View/indexHsCursadas.php'">EJ2</button>
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP1/Problema3/View/indexInfoGET.php'">EJ3 GET</button>
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP1/Problema3/View/indexInfoPOST.php'">EJ3 POST</button>
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP1/Problema4/View/indexInfoGET.php'">EJ4</button>
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP1/Problema5/View/indexInfoGET.php'">EJ5</button>
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP1/Problema6/View/indexInfoGET.php'">EJ6</button>
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP1/Problema7/View/operacionIndex.php'">EJ7</button>
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP1/Problema8/View/indexTarifa.php'">EJ8</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        TP 2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-menu">
                    <div class="accordion-body">
                        <div class="accordion-item mb-3">
                            <div id="flush-collapseTwo" class="accordion-collapse" data-bs-parent="#accordion-menu">
                                <div class="accordion-body">
                                    <h5 class="card-title">EJ 2</h5>
                                    <!-- Ejercicios del ejercicio 2 del TP 2 -->
                                    <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema2/Problema1/View/html/indexNumero.php'">EJ1</button>
                                    <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema2/Problema2/View/html/indexHsCursadas.php'">EJ2</button>
                                    <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema2/Problema3/View/html/indexInfoGET.php'">EJ3 GET</button>
                                    <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema2/Problema3/View/html/indexInfoPOST.php'">EJ3 POST</button>
                                    <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema2/Problema4/View/html/indexInfoGET.php'">EJ4</button>
                                    <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema2/Problema5/View/html/indexInfoGET.php'">EJ5</button>
                                    <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema2/Problema6/View/html/indexInfoGET.php'">EJ6</button>
                                    <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema2/Problema7/View/html/operacionIndex.php'">EJ7</button>
                                    <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema2/Problema8/View/html/indexTarifa.php'">EJ8</button>
                                </div>
                            </div>
                        </div>
                        <!-- Ejercicio 3 y 4 del TP 2 -->
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema3/view/login.php'">EJ3</button>
                        <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP2/Problema4/View/html/cinemas.php'">EJ4</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        TP 3
                    </button>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-menu">
                        <div class="accordion-body">
                            <div class="accordion-item">
                                <!-- Ejercicios del TP 3 -->
                                <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP3/Problema1/View/'">EJ1</button>
                                <button type="button" class="btn btn-primary redirect-button" onclick="location.href='../../TP3/Problema2/View/'">EJ2</button>
                            </div>
                        </div>
                    </div>
                </h2>

            </div>
        </div>
</body>

</html>