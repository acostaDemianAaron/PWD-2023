<?php
require_once("../../Config/configuracion.php");
require_once("../../View/Structure/header.php");
require_once("../../Controller/AbmAuto.php");
if(isset($_GET['test'])){
    $arregloAutos = null;
} else {
    $autoObj = new AbmAuto();
    $arregloAutos = $autoObj->Search();
}
?>

<head>
    <title>Ver autos</title>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5">
               <div class="card-body">
                <?php
                if(isset($arregloAutos)){
                echo '
                  <h2 class="pb-3 fs-1 fw-bolder border-bottom">Tabla de autos</h2>
                  <div class="table-responsive small">
                     <table class="table table-striped table-sm fs-4">
                        <thead id="table-header">
                           <tr>
                              <th scope="col">Patente</th>
                              <th scope="col">Marca</th>
                              <th scope="col">Modelo</th>
                              <th scope="col">Dueño</th>
                           </tr>
                        </thead>
                        <tbody id="table-body">';
                foreach($arregloAutos as $auto){
                    echo "
                    <tr>
                        <td>{$auto->getPatente()}</td>
                        <td>{$auto->getMarca()}</td>
                        <td>{$auto->getModelo()}</td>
                        <td>{$auto->getObjDuenio()->getNombre()} {$auto->getObjDuenio()->getApellido()}</td>
                    </tr>";
                }
                echo '  </tbody>
                     </table>
                  </div>';
                } else {
                echo '<h2 class="pb-3 fs-1 fw-bolder border-bottom">No hay ningun auto cargado en la base de datos.</h2>';
                }
                ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>