$(document).ready(function () {
    $("#form_control").validate({
        rules: {
            Patente: {
                required: true,
                onlyValidBackplate: { onlyValidBackplate: true }
            },
            Marca: {
                required: true,
                minlength: 3,
                validAlfaNumerico: { validAlfaNumerico: true}
            },
            Modelo: {
                required: true,
                number: true,
            },
            DniDuenio: {
                required: true,
                number: true,
                validDni: { validDni: true },
                validDniRango: { validDniRango: true}
            },
        },
        messages: {
            Patente: {
                required: "La patente es obligatoria.",
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

    jQuery.validator.addMethod("onlyValidBackplate", function (value, element) {
        return this.optional(element) || (/([A-Z]{3}\s[0-9]{3})/.test(value));
    }, "Tiene que ser 3 letras mayusculas, un espacio y 3 numeros.");

    jQuery.validator.addMethod("validDniRango", function (value, element) {
        return this.optional(element) || (/^([1-9][0-9]{7}$)/.test(value));
    }, "Tiene que ser mayor a 10.000.000 y menor a 99.999.999.");

    jQuery.validator.addMethod("validAlfaNumerico", function (value, element) {
        return this.optional(element) || (/^([a-zA-Z0-9]+$)/.test(value));
     }, "Solo se aceptan valores alfanumérico");
});