<?php
require_once('../../Config/config.php');
require_once('../../vendor/autoload.php');
require_once('../../Controller/PDFControl.php');
createHeader("New PDF");

$pdfControl = connectPDF(
   $_SESSION['apiKey'],
   $_SESSION['workspaceID'],
   $_SESSION['secretKey']
);

if(data_submitted()){
   $templateFields = getTemplateFields($pdfControl, data_submitted());
?>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
                  <div class="card shadow-lg p-3 mb-5">
                     <?php
                     if(key_exists("error", data_submitted())){
                        echo '<div class="bg-bg-dark pb-2 fs-3 text-danger-emphasis">There was an error sending the form.</div>';
                        if(data_submitted()['error'] == "no-jwt"){
                           echo '<div class="bg-bg-dark pb-2 fs-5 text-danger-emphasis">The was no JWT to authenticate.</div>';
                        }
                     }
                     ?>
                     <div class="bg-bg-dark pb-3 fs-2 fw-bold">New PDF</div>
                     <div class="card-body">
                     <!-- Action in other page -->
                        <form action="../Action/generatePDF.php" method="POST" id="form-control" name="form-control" class="needs-validation">
                           <?php
                           foreach($templateFields->response as $fieldName => $fieldValue){
                              if($fieldName != "DueDate"){
                           ?>
                              <div class="form-row">
                                 <div class="col-md-4 mb-3">
                                    <label class="mb-2"><?php echo $fieldName; ?>: </label><br>
                                    <input id="<?php echo $fieldName; ?>" name="<?php echo $fieldName; ?>" type="text" class="form-control" maxlength="25">
                                 </div>
                              </div>
                           <?php
                              } else {
                           ?>
                           <div class="form-row">
                                 <div class="col-md-4 mb-3 pb-2">
                                    <label class="mb-2">Select a date (Optional): </label><br>
                                    <input id="<?php echo $fieldName; ?>" name="<?php echo $fieldName; ?>" type="date" class="form-control">
                                    <button type="button" class="btn btn-primary mt-2 btn-sm w-100" onclick="document.getElementById('<?php echo $fieldName; ?>').value = ''">Clear date field</button>
                                 </div>
                              </div>
                           <?php
                              }
                           }
                           ?>
                           <button class="btn btn-primary" type="submit" id="enviar">Create PDF</button>
                        </form>
                     </div>
                  </div>
            </div>
         </div>
      </div>
      <script src="../js/validateForm.js"></script>
   </body>
<?php
}
createFooter();
?>