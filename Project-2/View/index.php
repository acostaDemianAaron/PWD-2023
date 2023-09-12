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

         <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 g-4">
               <div class="col d-flex flex-column gap-2 align-items-center">
                  <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-1 rounded-3 w-25">
                     <a href="https://github.com/acostaDemianAaron"><i class="fa-brands fa-square-github"></i></a>
                  </div>
                  <h4 class="fw-semibold mb-0 text-body-emphasis"><a href="https://github.com/acostaDemianAaron">Aaron Acosta</a></h4>
               </div>

               <div class="col d-flex flex-column gap-2 align-items-center">
                  <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-1 rounded-3 w-25">
                     <a href="https://github.com/veraAlan"><i class="fa-brands fa-square-github"></i></a>
                  </div>
                  <h4 class="fw-semibold mb-0 text-body-emphasis"><a href="https://github.com/veraAlan">Alan Vera </a></h4>
               </div>

               <div class="col d-flex flex-column gap-2 align-items-center">
                  <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-1 rounded-3 w-25">
                     <a href="https://github.com/santiagoYaitul"><i class="fa-brands fa-square-github"></i></a>
                  </div>
                  <h4 class="fw-semibold mb-0 text-body-emphasis"><a href="https://github.com/santiagoYaitul">Santiago Yaitul</a></h4>
               </div>

               <div class="col d-flex flex-column gap-2 align-items-center">
                  <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-1 rounded-3 w-25">
                     <a href="https://github.com/mausawicki7"><i class="fa-brands fa-square-github"></i></a>
                  </div>
                  <h4 class="fw-semibold mb-0 text-body-emphasis"><a href="https://github.com/mausawicki7">Mauricio Sawicki</a></h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>