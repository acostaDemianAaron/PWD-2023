<?php
class Header{
   function __construct(String $title, String $libs_dir, String $index) { 
   echo <<<HTML
   <!-- Integrations -->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="{$libs_dir}Bootstrap-5.3.1/css/bootstrap.min.css">
      <script src="{$libs_dir}Bootstrap-5.3.1/js/bootstrap.min.js"></script>
      <script src="{$libs_dir}Bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
      <!-- Jquery -->
      <script src="{$libs_dir}jQuery/jquery-3.7.1.min.js"></script>
      <script src="{$libs_dir}jQuery/jquery.validate-1.19.5.min.js"></script>
      <script src="{$libs_dir}jQuery/translate-jQuery.js"></script>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{$libs_dir}FontAwesome-6.4.2/css/all.min.css">
      <script src="{$libs_dir}FontAwesome-6.4.2/js/all.min.js"></script>
      <title>{$title}</title>
   </head>
   
   <!-- Actual body of nav-bar -->
   <body data-bs-theme="dark">
      <div class="container">
         <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href={$index}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
               <i class="fa-solid fa-users-rectangle fa-2xl px-2"></i> <!-- Icon -->
               <span class="fs-4">Librerias</span>
            </a>
            <ul class="nav nav-pills">
               <li class="nav-item"><a href={$index}" class="nav-link active" aria-current="page">Home</a></li>
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
   </body>

   HTML;
   }
} ?>