<?php
// For now the include that works
require_once("../Config/configuracion.php");
require_once("../View/Structure/header.php");
?>

<head>
   <title>Test page</title>
</head>

<body>
   <div class="container">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@aaron">Open modal for <i class="fa-brands fa-github"></i>Aaron</button>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@alan">Open modal for <i class="fa-brands fa-github"></i>Alan</button>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@santi">Open modal for <i class="fa-brands fa-github"></i>Santi</button>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mausa">Open modal for <i class="fa-brands fa-github"></i>Mausa</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                     </div>
                     <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send message</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script>
   const exampleModal = document.getElementById('exampleModal')
   if (exampleModal) {
      exampleModal.addEventListener('show.bs.modal', event => {
         // Button that triggered the modal
         const button = event.relatedTarget
         // Extract info from data-bs-* attributes
         const recipient = button.getAttribute('data-bs-whatever')
         // If necessary, you could initiate an Ajax request here
         // and then do the updating in a callback.

         // Update the modal's content.
         const modalTitle = exampleModal.querySelector('.modal-title')
         const modalBodyInput = exampleModal.querySelector('.modal-body input')

         modalTitle.textContent = `New message to ${recipient}`
         modalBodyInput.value = recipient
      })
   }
   </script>
</body>