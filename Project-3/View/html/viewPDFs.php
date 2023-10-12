<?php
require_once('../../Config/config.php');
require_once('../../vendor/autoload.php');
require_once('../../Controller/PDFControl.php');
new Header("Documents saved", $LIBS, $INICIO);

$pdfGenerator = connectPDF(
   $_SESSION['apiKey'],
   $_SESSION['workspaceID'],
   $_SESSION['secretKey']
);

if(!empty(data_submitted())){
   $data = data_submitted();
   $page = $data['page'];
} else {
   $data = [];
   $page = 0;
}

$response = getDocuments($pdfGenerator, $data);
?>

<body>
   <div class="container">
      <div class="container-fluid">
         <div class="card shadow-lg p-3 mb-5">
            <div class="card-body">
               <h2 class="pb-3 fs-1 fw-bolder border-bottom">Documentos guardados</h2>
               <form action="../Action/showPDF.php" method="POST">
                  <div class="table-responsive small">
                     <table class="table table-striped table-sm fs-4">
                        <?php
                        if (!is_object($response)) {
                           echo <<<HTML
                           <div class="bg-bg-dark pb-2 fs-3 text-danger-emphasis">There was an error.</div>
                     </table>
                  </div>
               </form>
               <button class="btn btn-primary" onclick="location.href = '$INICIO'">Go Back</button>
               HTML;
                        } else {
                           if(property_exists($response, "message")){
                              echo <<<HTML
                              <div class="bg-bg-dark pb-2 fs-3 text-danger-emphasis">There was an error.</div>
                              <div class="bg-bg-dark pb-2 fs-5 text-danger-emphasis">{$response->message}</div>
                     </table>
                  </div>
               </form>
               <button class="btn btn-primary" onclick="location.href = '$INICIO'">Go Back</button>
               HTML;
                           } else {
                           echo <<<HTML
                     <thead id="table-header">
                        <tr>
                           <th scope="col">Template Used</th>
                           <th scope="col">Date Made</th>
                           <th scope="col">Visualizar</th>
                        </tr>
                     </thead>
                     <tbody id="table-body">
                     HTML;
                              $documents = $response->response;
                              $templates = getTemplates($pdfGenerator);

                              // Iterate over all documents found.
                              foreach ($documents as $document) {
                                 $templateFound = false; // Boolean to stop searching on template found.
                                 $i = 0;
                                 // Find correct template name.
                                 while(!$templateFound){
                                    if($templates->response[$i]->id == $document->template_id) {
                                       $template = $templates->response[$i];
                                       $templateFound = true;
                                    }
                                    $i++;
                                 }
                                 echo <<<HTML
                                 <tr>
                                    <td>{$template->name}</td>
                                    <td>{$document->created_at}</td>
                                    <td><button class="btn btn-primary" name="url" value="{$document->public_url}">View</button></td>
                                 </tr>
                                 HTML;
                              }
                              echo <<<HTML
                     </tbody>
                  </table>
               </div>
            </form>
            <form action="./viewPDFs.php" method="POST">
            HTML;
               if($page > 1) {
                  echo <<<HTML
                  <button class="btn btn-primary" onclick="history.back()">Go Back</button>
                  HTML;
               }
               echo <<<HTML
               <button class="btn btn-primary" type="submit" name="page" value="<?php if($page >= 0){ echo $page + 1; } ?>">Next Page</button>
               HTML;
               }
            }
            ?>
            </div>
         </div>
      </div>
   </div>
</body>

<?php
new Footer($INICIO);
?>