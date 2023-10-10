<?php
require_once("../../Config/configuracion.php");

new Header("Pagina Principal", $LIBS, $INICIO, $PRINCIPAL);

$data = data_submitted();

if(data_submitted()){
   $auto = new AbmAuto;
   $res = $auto->Search($data);
   $auto = $res[0];
} else {
   $auto = null;
}
?>

<head>
    <title>Buscar Auto</title>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5">
               <div class="card-body">
               <?php
                  if($auto != null){
                  echo '
                  <h2 class="pb-3 fs-1 fw-bolder border-bottom">' . $auto->getObjDuenio()->getNombre() . " " . $auto->getObjDuenio()->getApellido() . '</h2>
                  <div class="table-responsive small">
                     <table class="table table-striped table-sm fs-3">
                        <thead id="table-header">
                           <tr>
                              <th scope="col">Patente</th>
                              <th scope="col">Marca</th>
                              <th scope="col">Modelo</th>
                           </tr>
                        </thead>
                        <tbody id="table-body">
                           <tr>
                              <td>' . $auto->getPatente() . '</td>
                              <td>' . $auto->getMarca() . '</td>
                              <td>' . $auto->getModelo() . '</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>';
                  } else {
                  echo '<h2 class="pb-3 fs-1 fw-bolder border-bottom">No se pudo encontrar el auto con la patente: ' . $data['Patente'] . '</h2>';
                  }
               ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

<?php
new Footer($INICIO);
?>