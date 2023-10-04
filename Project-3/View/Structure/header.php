<!-- Integrations -->

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
   <link rel="stylesheet" href="/View/Libs/Bootstrap-5.3.1/css/bootstrap.min.css">
   <script src="/View/Libs/Bootstrap-5.3.1/js/bootstrap.min.js"></script>
   <script src="/View/Libs/Bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
   <!-- Jquery -->
   <script src="/View/Libs/jQuery/jquery-3.7.1.min.js"></script>
   <script src="/View/Libs/jQuery/jquery.validate-1.19.5.min.js"></script>
   <script src="/View/Libs/jQuery/translate-jQuery.js"></script>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="/View/Libs/FontAwesome-6.4.2/css/all.min.css">
   <script src="/View/Libs/FontAwesome-6.4.2/js/all.min.js"></script>
   <!-- Css -->
   <link rel="stylesheet" href="/View/css/common.css">
</head>
 
<!-- Actual body of nav-bar -->

<body data-bs-theme="dark">
   <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
         <a href="/View/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <i class="fa-solid fa-users-rectangle fa-2xl px-2"></i> <!-- Icon -->
            <span class="fs-4">Trabajo Practico 4</span>
         </a>

         <ul class="nav nav-pills">
            <li class="nav-item"><a href="/View/" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item disabled"><a href="/Test/viewDB.php" class="nav-link">Database View</a></li>
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