<?php
require_once('../../Config/config.php');
require_once('../../vendor/autoload.php');
require_once('../Structure/header.php');
$data = data_submitted();
?>

<body>
   <div class="container">
      <div class="container-fluid">
         <div class="card shadow-lg p-3 mb-5">
            <div class="card-body">
               <?php 
                  if(key_exists("url", $data)){
               ?>
               <h2 class="pb-3 fs-1 fw-bolder border-bottom">Show document</h2>
               <div class="ratio ratio-1x1">
                  <iframe src="<?php echo $data["url"]; ?>" title="pdf viewer" allowfullscreen></iframe>
               </div>
               <?php
               } else {
               ?>
               <h2 class="pb-3 fs-1 fw-bolder border-bottom">Document couldn't be found.</h2>
               <?php
               }
               ?>
            </div>
            <div class="card-footer">
               <button class="btn btn-primary" onclick="history.back()">Go Back</button>
            </div>
         </div>
      </div>
   </div>
</body>