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
        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="./testPage.php" class="btn btn-primary btn-lg">Ir a opciones</a>
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <i class="fa-brands fa-square-github"></i>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Aaron Acosta</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
               <i class="fa-brands fa-square-github"></i>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Alan Vera</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <i class="fa-brands fa-square-github"></i>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Santiago Yaitul</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <i class="fa-brands fa-square-github"></i>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Mauricio Sawicki</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>