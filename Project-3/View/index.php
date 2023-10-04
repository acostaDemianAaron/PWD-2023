<?php
require_once('../Config/config.php');
require_once('../View/Structure/header.php');
?>

<head>
   <title>Pagina principal</title>
</head>

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
                  <a href="./html/newPDF.php" class="btn btn-primary">Create new PDF</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

<?php
require_once("../View/Structure/footer.php");
?>