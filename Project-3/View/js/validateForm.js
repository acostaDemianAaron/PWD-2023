$(document).ready(function () {
   // Agregar reglas de validación a los campos del formulario
   $("#form-control").validate({
      rules: {
         name: {
            required: true,
            maxlength: 50,
            minlength: 1,
            onlyLetters: { onlyLetters: true }
         },
         surname: {
            required: true,
            maxlength: 20,
            minlength: 1,
            onlyLetters: { onlyLetters: true }
         },
         documentName: {
            required: true,
            maxlength: 20,
            minlength: 1,
            onlyLetters: { onlyLetters: true }
         }
      },
      messages: {
         name: {
            required: "This field is needed.",
            maxlength: "The name has a maximum length of 50.",
            minlength: "The name has a minimum length of 1."

         },
         surname: {
            required: "This field is needed.",
            maxlength: "The surname has a maximum length of 20.",
            minlength: "The surname has a minimum length of 1."
         },
         documentName: {
            required: "This field is needed.",
            maxlength: "The document name has a maximum length of 20.",
            minlength: "The document name has a minimum length of 1."
         }
      },
      errorElement: "span",
      errorPlacement: function (error, element) {
         error.addClass("invalid-feedback");
         element.closest(".col-md-4").append(error);
      },
      highlight: function (element, errorClass, validClass) {
         $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function (element, errorClass, validClass) {
         $(element).removeClass("is-invalid").addClass("is-valid");
      }
   });
});

jQuery.validator.addMethod("onlyLetters", function (value, element) {
   return this.optional(element) || (/([A-Za-zñÑ])/.test(value));
}, "Can only contain letters.");