$(document).ready(function () {
    // Agregar reglas de validación a los campos del formulario
    $("#form_control").validate({
        rules: {
            Nombre: {
                required: true,
                maxlength: 20,
                minlength: 3
            },
            Apellido: {
                required: true,
                maxlength: 20,
                minlength: 3
            },
            NroDni: {
                required: true,
                number: true,
                validDni: { validDni: true },
                validDniRango: { validDniRango: true}
            },
            Domicilio: {
                required: true,
                maxlength: 20,
                minlength: 3
            },
            Telefono: {
                required: true,
                validTelefono: { validTelefono: true }
            },
            fechaNac: {
                required: true,
                validFechaNac: { validFechaNac: true }
            }
        },
        messages: {
            Nombre: {
                required: "El nombre es obligatorio.",
                maxlength: "El nombre tiene un maximo de 20 caracteres.",
                minlength: "El nombre debe tener al menos 3 caracteres."

            },
            Apellido: {
                required: "El apellido es obligatorio.",
                maxlength: "El apellido tiene un maximo de 20 caracteres.",
                minlength: "El apellido debe tener al menos 3 caracteres."
            },
            NroDni: {
                required: "El documento es obligatorio.",
                number: "Solo puede ingresar numeros."
            },
            Domicilio: {
                required: "El domicilio es obligatorio.",
                maxlength: "El domicilio tiene un maximo de 20 caracteres.",
                minlength: "El domicilio debe tener al menos 3 caracteres."
            },
            Telefono: {
                required: "El numero de telefono es obligatorio.",
            },
            fechaNac: {
                required: "La fecha de nacimiento es obligatoria."
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

jQuery.validator.addMethod("validDni", function (value, element) {
    return this.optional(element) || (/^(\d{8})$/.test(value));
}, "Debe ingresar un documento con 8 caracteres.");

jQuery.validator.addMethod("validTelefono", function (value, element) {
    return this.optional(element) || (/^\d{3}-\d{7}$/.test(value));
}, "El numero de telefono debe tener este formato: 299-1559354");

jQuery.validator.addMethod("validFechaNac", function (value, element) {
    return this.optional(element) || (/^(19[5-9]\d|200[0-7])-\d{2}-\d{2}$/.test(value));
}, "Debe ingresar una fecha con un año entre 1950 al 2007");

jQuery.validator.addMethod("validDniRango", function (value, element) {
    return this.optional(element) || (/^([1-9][0-9]{7}$)/.test(value));
 }, "Tiene que ser mayor a 10.000.000 y menor a 99.999.999.");

