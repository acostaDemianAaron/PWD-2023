<?php
// For now the include that works
require_once("../Config/configuracion.php");
require_once("../View/Structure/header.php");
?>

<head>
   <title>Pagina principal</title>
</head>

<body>
   <div class="container px-4 py-5">
      <h2 class="pb-2 border-bottom">Features with title</h2>

      <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
         <div class="col d-flex flex-column align-items-start gap-2">
            <h2 class="fw-bold text-body-emphasis">Trabajo Practico N4</h2>
            <p class="text-body-secondary">Texto descriptivo.
            <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis maiores molestiae enim eius beatae placeat nisi dignissimos, 
            quaerat iure architecto ipsam unde ex dicta! Accusantium iste repellendus fugit voluptatum modi!</p>
            <a href="./testPage.php" class="btn btn-primary btn-lg">Ir a opciones</a>
         </div>
      </div>
   </div>
</body>

<?php
require_once("../View/Structure/footer.php");
?>