$(document).ready(function () {
    // Agregar reglas de validación a los campos del formulario
    $("#form_control").validate({
        rules: {
            Patente: {
                required: true,
                minlength: 7
            },
            Marca: {
                required: true,
                minlength: 3
            },
            Modelo: {
                required: true,
                number: true,
            },
            DniDuenio: {
                required: true,
                number: true,
                validDni: { validDni: true }
            },
        },
        messages: {
            Patente: {
                required: "La patente es obligatoria.",
                minlength: "La patente debe poseer un minimo de 6 caracteres con el siguiente formato ABC 123."
            },
            Marca: {
                required: "La marca es obligatoria.",
                minlength: "La marca debe poseer minimo 3 caracteres."
            },
            Modelo: {
                required: "El modelo es obligatorio",
                number: "Solo puede ingresar numeros"
            },
            DniDuenio: {
                required: "El documento es obligatorio.",
                number: "Solo puede ingresar numeros."
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

    jQuery.validator.addMethod("validDni", function (value, element) {
        return this.optional(element) || (/^(\d{8})$/.test(value));
    }, "Debe ingresar un documento con 8 caracteres.");

});