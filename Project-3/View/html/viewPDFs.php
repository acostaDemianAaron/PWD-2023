<?php
require_once('../../Config/config.php');
require_once('../../vendor/autoload.php');
require_once('../Structure/header.php');
require_once('../../Controller/PDFGenerator.php');
require_once('../../Controller/JWT.php');
$json = getPDFs();
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
                              if($json->message != null){
                                 echo "<tr><th><h2>Se encontro un error: " . $json->message . "</h2></th></tr>";
                              } else {
                           ?>
                           <tr>
                              <th scope="col">Document ID</th>
                              <th scope="col">Date Made</th>
                              <th scope="col">Visualizar</th>
                           </tr>
                        </thead>
                        <tbody id="table-body">
                           <?php
                                 $documents = $json->response;

                                 foreach($documents as $document){
                                    echo '<tr>
                                       <td>' . $document->public_id . '</td>
                                       <td>' . $document->created_at . '</td>
                                       <td><button class="btn btn-primary" name="url" value="' . $document->public_url . '">View</button></td>
                                    </tr>';
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