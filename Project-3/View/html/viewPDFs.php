<?php
require_once('../../Config/config.php');
require_once('../../vendor/autoload.php');
require_once('../../Controller/PDFControl.php');
createHeader("Documents saved");

$pdfGenerator = connectPDF(
   $_SESSION['apiKey'],
   $_SESSION['workspaceID'],
   $_SESSION['secretKey']
);

$response = getDocuments($pdfGenerator);
$templates = getTemplates($pdfGenerator);
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
                        <thead id="table-header">
                           <?php
                           if (!is_object($response)) {
                              echo '<div class="bg-bg-dark pb-2 fs-3 text-danger-emphasis">There was an error.</div>';
                           } else {
                              if ($response == null) {
                                 echo "<tr><th><h2>Se encontro un error: " . $response->message . "</h2></th></tr>";
                              } else {
                           ?>
                                 <tr>
                                    <th scope="col">Template Used</th>
                                    <th scope="col">Date Made</th>
                                    <th scope="col">Visualizar</th>
                                 </tr>
                        </thead>
                        <tbody id="table-body">
                           <?php
                                 $documents = $response->response;

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
                                    echo '<tr>
                                       <td>' . $template->name . '</td>
                                       <td>' . $document->created_at . '</td>
                                       <td><button class="btn btn-primary" name="url" value="' . $document->public_url . '">View</button></td>
                                    </tr>';
                                 }
                              }
                           }
                           ?>
                        </tbody>
                     </table>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

<?php
createFooter();
?>