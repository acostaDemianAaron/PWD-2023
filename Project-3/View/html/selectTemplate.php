<?php
require_once('../../Config/config.php');
require_once('../../vendor/autoload.php');
require_once('../../Controller/PDFControl.php');
new Header("New PDF", $LIBS, $INICIO);

$pdfControl = connectPDF(
   $_SESSION['apiKey'],
   $_SESSION['workspaceID'],
   $_SESSION['secretKey']
);

$response = getTemplates($pdfControl);
?>
<body>
   <div class="container">
      <div class="row">
      <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5">
               <?php
               if (!is_object($response)) {
                  echo <<<HTML
                  <div class="card-body">
                     <div class="bg-bg-dark pb-2 fs-3 text-danger-emphasis">There was an error.</div>
                     <button class="btn btn-primary" onclick="location.href = '$INICIO'">Go Back</button>
                  </div>
                  HTML;
               } else {
                  if(property_exists($response, "message")){
                     echo <<<HTML
                     <div class="card-body">
                        <div class="bg-bg-dark pb-2 fs-3 text-danger-emphasis">There was an error.</div>
                        <div class="bg-bg-dark pb-2 fs-5 text-danger-emphasis">{$response->message}</div>
                        <button class="btn btn-primary" onclick="location.href = '$INICIO'">Go Back</button>
                     </div>
               </div>
               HTML;
                  } else {
                  echo <<<HTML
                  <div class="bg-bg-dark pb-3 fs-2 fw-bold">Choose a template</div>
                     <div class="card-body">
                     <!-- Action in other page -->
                        <form action="./newPDF.php" method="POST" id="form-control" name="form-control" class="needs-validation">
                  HTML;
                           foreach(getTemplates($pdfControl)->response as $template){
                           echo <<<HTML
                           <button class="btn btn-primary" type="submit" name="templateId" value="$template->id">$template->name</button>
                           HTML;
                           }
                           echo <<<HTML
                        </form>
                     </div>
                  </div>
                  HTML;
                  }
               }
            ?>
         </div>
      </div>
   </div>
   <script src="../js/validateForm.js"></script>
</body>
<?php
new Footer($INICIO);
?>