
<?php
// Correct URL if it cannot load correctly
if($_SERVER['REQUEST_URI'] === "/PWD-2023"){
   header("Location: /PWD-2023/");
   die();
}

// If libraries directory changes, set the variable accordingly.
$libs_dir = "./Project-3/View/Libs/";

// HEAD, integration of used libraries. In this case, only visual changes.
echo <<<HTML
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
   <link rel="stylesheet" href="{$libs_dir}Bootstrap-5.3.1/css/bootstrap.min.css">
   <script src="{$libs_dir}Bootstrap-5.3.1/js/bootstrap.min.js"></script>
   <script src="{$libs_dir}Bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{$libs_dir}FontAwesome-6.4.2/css/all.min.css">
   <script src="{$libs_dir}FontAwesome-6.4.2/js/all.min.js"></script>
   <title>Menu</title>
</head>
HTML;
?>

<body data-bs-theme="dark" class="d-flex flex-column min-vh-100">
<!-- Body of nav-bar -->
   <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
         <a href="/PWD-2023/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <i class="fa-solid fa-users-rectangle fa-2xl px-2"></i> <!-- Icon -->
            <span class="fs-4">Librerias</span>
         </a>
         <ul class="nav nav-pills">
            <li class="nav-item"><a href="/PWD-2023/" class="nav-link active" aria-current="page">Home</a></li>
         </ul>
      </header>
   </div>

   <!-- Theme Changer button -->
   <div class="position-fixed bottom-0 end-0 mb-3 me-3">
      <button class="btn btn-dark btn-outline-light" id="toggle-theme"><i class="fa-regular fa-moon fs-4"></i></button>
   </div>

   <script>
      // Toggle theme
      $("button#toggle-theme").on("click", function(){
         if (document.querySelector("body").getAttribute('data-bs-theme') == 'dark') {
            document.querySelector("body").setAttribute('data-bs-theme','light')
         } else {
            document.querySelector("body").setAttribute('data-bs-theme','dark')
         }
      })
   </script>

<!-- Body of content -->
   <div class="container mt-5">
      <div class="accordion" id="accordionTPs">
         <div class="accordion-item">
            <h2 class="accordion-header">
               <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tituloTPs" aria-expanded="true" aria-controls="tituloTPs">
                  Eleccion de TP.
               </button>
            </h2>
            <div id="tituloTPs" class="accordion-collapse collapse show" data-bs-parent="#accordionTPs">
               <div class="accordion-body">
                  Aqui se puede elegir el TP que necesite visualizar. Aconsejamos tener en cuenta el README en cada proyecto para su correcto funcionamiento.
               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#TPn1" aria-expanded="false" aria-controls="TPn1">
               Trabajo Practico #1
               </button>
            </h2>
            <div id="TPn1" class="accordion-collapse collapse" data-bs-parent="#accordionTPs">
               <div class="accordion-body">
                  Descripcion trabajo practico
                  <br><a href="./Project-1/" class="btn btn-primary">Ir al TP</a>
               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#TPn2" aria-expanded="false" aria-controls="TPn2">
               Trabajo Practico #2
               </button>
            </h2>
            <div id="TPn2" class="accordion-collapse collapse" data-bs-parent="#accordionTPs">
               <div class="accordion-body">
                  Descripcion trabajo practico
                  <br><a href="./Project-2/View/" class="btn btn-primary">Ir al TP</a>
               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#TPn3" aria-expanded="false" aria-controls="TPn3">
               Trabajo Practico #3
               </button>
            </h2>
            <div id="TPn3" class="accordion-collapse collapse" data-bs-parent="#accordionTPs">
               <div class="accordion-body">
                  Descripcion trabajo practico
                  <br><a href="./Project-3/View/" class="btn btn-primary">Ir al TP</a>
               </div>
            </div>
         </div>
      </div>
   </div>

<!-- Body of footer -->
   <div class="container mt-auto">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
         <div class="col-md-4 d-flex align-items-center">
            <a href="{$index}" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
               <i class="fa-solid fa-users-rectangle"></i>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Grupo 4</span>
         </div>

         <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="mx-3 text-center"><a class="text-body-secondary" href="https://github.com/acostaDemianAaron"><i class="fa-brands fa-square-github fa-2xl"></i><br>Aaron</a></li>
            <li class="mx-3 text-center"><a class="text-body-secondary" href="https://github.com/veraAlan"><i class="fa-brands fa-square-github fa-2xl"></i><br>Alan</a></li>
            <li class="mx-3 text-center"><a class="text-body-secondary" href="https://github.com/SantiagoYaitul"><i class="fa-brands fa-square-github fa-2xl"></i><br>Santiago</a></li>
            <li class="mx-3 text-center"><a class="text-body-secondary" href="https://github.com/mausawicki7"><i class="fa-brands fa-square-github fa-2xl"></i><br>Mauricio</a></li>
         </ul>
      </footer>
   </div>
</body>