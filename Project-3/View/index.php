<?php
require_once('../Config/config.php');
createHeader("Menu");
?>
<body>
   <div class="container mt-5">
      <div class="row">
         <!-- View PDFs saved -->
         <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/viewPDFs.php" class="btn btn-primary">View PDFs</a>
               </div>
            </div>
         </div>
         <!-- Generate new PDF -->
         <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/selectTemplate.php" class="btn btn-primary">Create new PDF</a>
               </div>
            </div>
         </div>
         <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/mpCompra.php" class="btn btn-primary">Mercado Pago</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<?php
createFooter();
?>