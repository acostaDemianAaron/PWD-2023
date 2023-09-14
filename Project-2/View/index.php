<?php
require_once("../Config/configuracion.php");
require_once("../View/Structure/header.php");
?>

<head>
   <title>Pagina principal</title>
</head>

<body>

   <div class="container mt-5">
      <!-- Primera fila con 4 columnas -->
      <div class="row">
         <!-- Team Member 1 -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/nuevaPersona.php" class="btn btn-primary">Agregar Persona</a>
               </div>
            </div>
         </div>
         <!-- Team Member 2 -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/nuevoAuto.php" class="btn btn-primary">Agregar Auto</a>
               </div>
            </div>
         </div>
         <!-- Team Member 3 -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/buscarPersona.php" class="btn btn-primary">Buscar Persona</a>
               </div>
            </div>
         </div>
         <!-- Team Member 4 -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/buscarAuto.php" class="btn btn-primary">Buscar Auto</a>
               </div>
            </div>
         </div>
      </div>

      <!-- Segunda fila con 3 columnas -->
      <div class="row">
         <!-- Team Member 5 -->
         <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/cambioDuenio.php" class="btn btn-primary">Cambiar Dueño</a>
               </div>
            </div>
         </div>
         <!-- Team Member 6 -->
         <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/listarPersona.php" class="btn btn-primary">Listar Personas</a>
               </div>
            </div>
         </div>
         <!-- Team Member 7 -->
         <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow">
               <div class="card-body text-center">
                  <a href="./html/verAutos.php" class="btn btn-primary">Ver Autos</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

<?php
require_once("../View/Structure/footer.php");
?>