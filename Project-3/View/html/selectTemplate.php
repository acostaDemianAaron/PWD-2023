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
?>
<body>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
               <div class="card shadow-lg p-3 mb-5">
                  <div class="bg-bg-dark pb-3 fs-2 fw-bold">Choose a template</div>
                  <div class="card-body">
                  <!-- Action in other page -->
                     <form action="./newPDF.php" method="POST" id="form-control" name="form-control" class="needs-validation">
                        <?php foreach(getTemplates($pdfControl)->response as $template){ ?>
                        <button class="btn btn-primary" type="submit" name="templateId" value="<?php echo $template->id; ?>"><?php echo $template->name; ?></button>
                        <?php } ?>
                     </form>
                  </div>
               </div>
         </div>
      </div>
   </div>
   <script src="../js/validateForm.js"></script>
</body>
<?php
new Footer($INICIO);
?>