<?php
// For now the include that works
require_once("../Config/configuracion.php");
require_once("../View/Structure/header.php");
require_once('../Model/Connection/BaseDatos.php');

$objBd = new Database();
?>

<head>
   <title>Database</title>
</head>

<body>
   <div class="container">
      <div class="container-fluid">
         <div class="row">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <h1 class="h2">Datos en la base de datos</h1>
            </div>

            <h2>Tabla de autos</h2>
            <div class="table-responsive small">
               <table class="table table-striped table-sm">
                  <thead id="table-header">
                     <tr>
                        <th scope="col">Patente</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">DNI dueño</th>
                     </tr>
                  </thead>
                  <tbody id="table-body">
                     <?php
                        $query = "SELECT * FROM auto";
                        $res = $objBd->Execute($query);
                        if($res) $array = $objBd->Register();

                        while($array != null){
                           echo "
                           <tr>
                              <td>{$array['Patente']}</td>
                              <td>{$array['Marca']}</td>
                              <td>{$array['Modelo']}</td>
                              <td>{$array['DniDuenio']}</td>
                           </tr>";
                           $array = $objBd->Register();
                        }
                     ?>
                  </tbody>
               </table>
            </div>
            
            <div class="by-2 py-2"></div>
            
            <h2>Tabla de personas</h2>
            <div class="table-responsive small">
               <table class="table table-striped table-sm">
                  <thead id="table-header">
                     <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Domicilio</th>
                     </tr>
                  </thead>
                  <tbody id="table-body">
                     <?php
                        $query = "SELECT * FROM persona";
                        $res = $objBd->Execute($query);
                        if($res) $array = $objBd->Register();

                        while($array != null){
                           echo "
                           <tr>
                              <td>{$array['NroDni']}</td>
                              <td>{$array['Apellido']}</td>
                              <td>{$array['Nombre']}</td>
                              <td>{$array['fechaNac']}</td>
                              <td>{$array['Telefono']}</td>
                              <td>{$array['Domicilio']}</td>
                           </tr>";
                           $array = $objBd->Register();
                        }
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</body>