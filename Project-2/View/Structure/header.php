<!-- Integrations -->

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
   <link rel="stylesheet" href="Libs/Bootstrap-5.3.1/css/bootstrap.min.css">
   <script src="Libs/Bootstrap-5.3.1/js/bootstrap.min.js"></script>
   <script src="Libs/Bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
   <!-- Jquery -->
   <script src="Libs/jQuery/jquery-3.7.1.min.js"></script>
   <script src="Libs/jQuery/jquery.validate-1.19.5.min.js"></script>
   <script src="Libs/jQuery/translate-jQuery.js"></script>
   <!-- Font Awesome -->
</head>

<!-- Actual body of nav-bar -->

<body>
   <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
         <a href="/<?php if($PROYECTO != "") { echo $PROYECTO; } ?>View/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <i class="fa-brands fa-bootstrap me-4" style="transform: scale(3);"></i>
            <span class="fs-4">Simple header</span>
         </a>

         <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
         </ul>
      </header>
   </div>
</body>