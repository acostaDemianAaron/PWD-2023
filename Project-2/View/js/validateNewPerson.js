$(document).ready(function () {
    // Agregar reglas de validación a los campos del formulario
    $("#form_control").validate({
        rules: {
            Nombre: {
                required: true,
                minlength: 3
            },
            Apellido: {
                required: true,
                minlength: 3
            },
            NroDni: {
                required: true,
                maxlength: 8,
                //Agregar expresion regular
                number: true
            },
            Domicilio: {
                required: true
                //Agregar expresion regular
            },
            Telefono: {
                required: true
                //Agregar expresion regular
            },
            fechaNac: {
                required: true
            }
        },
        messages: {
            Nombre: {
                required: "El nombre es obligatorio.",
                minlength: "El nombre debe tener al menos 3 caracteres."
            },
            Apellido: {
                required: "El apellido es obligatorio.",
                minlength: "El apellido debe tener al menos 3 caracteres."
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
