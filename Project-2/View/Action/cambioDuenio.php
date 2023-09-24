<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");

if(data_submitted()){
   $Abmauto = new AbmAuto;
   $Abmpersona = new AbmPersona;
if($Abmauto->Search(data_submitted()) != array()){
   $auto = $Abmauto->Search(data_submitted())[0];
} else { 
   $auto = null;
}
if($Abmpersona->Search(data_submitted()) != array()){
   $persona = $Abmpersona->Search(data_submitted())[0];
} else {
   $persona = null;
}
} else {
   $auto = null;
}
?>

<head>
    <title>Cambiar Auto</title>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5">
               <div class="card-body">
                  <?php
                  if($auto != null && $persona != null){
                     if($Abmauto->EditDuenio(data_submitted())){
                        echo '
                        <h2 class="pb-3 fs-1 fw-bolder border-bottom">Cambio de dueño exitoso.</h2>
                        <div class="table-responsive small">
                           <table class="table table-striped table-sm fs-3">
                              <thead id="table-header">
                                 <tr>
                                    <td>El nuevo dueño del auto ' . $auto->getMarca() . ' de patente ' . $auto->getPatente() . ' es ' . $persona->getNombre() . ' ' . $persona->getApellido() . '</td>
                                 </tr>
                              </thead>
                           </table>
                        </div>';
                     } else {
                        if($auto == null) echo '<h2 class="pb-3 fs-1 fw-bolder border-bottom">No se pudo cambiar el dueño.</h2>';
                        if($auto->getDniDuenio() == $persona->getNroDni()) echo '<h2 class="pb-3 fs-1 fw-bolder border-bottom">El auto tiene el mismo dueño.</h2>';
                     }
                  } else {
                     if($auto == null) echo '<h2 class="pb-3 fs-1 fw-bolder border-bottom">No existe el auto con la patente ingresada</h2>';
                     if($persona == null) echo '<h2 class="pb-3 fs-1 fw-bolder border-bottom">No existe la persona con el DNI ingresado</h2>';
                  }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

<?php
require_once("../Structure/footer.php");
?>