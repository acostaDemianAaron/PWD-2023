$("document").ready(function () {
   $("#cambio-duenio").validate({
      rules: {
         Patente: {
            required: true,
            onlyValidBackplate: { onlyValidBackplate: true }
         },
         NroDni: {
            required: true,
            validDni: { validDni: true }
         }
      },
      messages: {
         Patente: {
            required: "Ingrese una patente."
         },
         NroDni: {
            required: "Ingrese un DNI."
         }
      },
      errorElement: "span",
      errorPlacement: function (error, element) {
         error.addClass("invalid-feedback");
         element.closest(".col-md-4").append(error);
      },
      highlight: function (element) {
         $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function (element) {
         $(element).removeClass("is-invalid").addClass("is-valid");
      }
   });
   $("#Patente").trigger('onChange', $("#Patente").val($("#Patente").val().toUpperCase()));
});

jQuery.validator.addMethod("onlyValidBackplate", function (value, element) {
   return this.optional(element) || (/([A-Z]{3}\s[0-9]{3})/.test(value));
}, "Tiene que ser 3 letras mayusculas, un espacio y 3 numeros.");

jQuery.validator.addMethod("validDni", function (value, element) {
   return this.optional(element) || (/^([1-9][0-9]{7}$)/.test(value));
}, "Tiene que ser mayor a 10.000.000 y menor a 99.999.999.");