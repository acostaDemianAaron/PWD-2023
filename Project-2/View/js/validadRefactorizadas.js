$(document).ready(function () {

    function validad(formulario, reglas) {
        $(formulario).validate({
            rules: reglas.rules,
            messages: reglas.messages,
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

        $.each(reglas.metodo, function (nombreMetodo, metodoFuncion) {
            jQuery.validator.addMethod(nombreMetodo, metodoFuncion.validator, metodoFuncion.message);
        });
    }


    var reglasRegex = {
        metodo: {
            validDni: {
                validator: function (value, element) {
                    return this.optional(element) || (/^(\d{8})$/.test(value));
                },
                message: "Debe ingresar un documento con 8 caracteres."
            },
            validTelefono: {
                validator: function (value, element) {
                    return this.optional(element) || (/^\d{3}-\d{7}$/.test(value));
                },
                message: "El número de teléfono debe tener este formato: 299-1559354"
            },
            validFechaNac: {
                validator: function (value, element) {
                    return this.optional(element) || (/^(19[5-9]\d|200[0-7])-\d{2}-\d{2}$/.test(value));
                },
                message: "Debe ingresar una fecha con un año entre 1950 al 2007"
            },
            validDniRango: {
                validator: function (value, element) {
                    return this.optional(element) || (/^([1-9][0-9]{7}$)/.test(value));
                },
                message: "Tiene que ser mayor a 10.000.000 y menor a 99.999.999."
            },
            validAlfaNumerico: {
                validator: function (value, element) {
                    return this.optional(element) || (/^([a-zA-Z0-9ñÑ\s]+$)/.test(value));
                },
                message: "Solo se aceptan valores alfanuméricos"
            },
            onlyValidBackplate: {
                validator: function (value, element) {
                    return this.optional(element) || (/([A-Z]{3}\s[0-9]{3})/.test(value));
                },
                message: "Tiene que ser 3 letras mayúsculas, un espacio y 3 números."
            }
        }
    };


    var reglasDePersona = {
        rules: {
            Nombre: {
                required: true,
                maxlength: 20,
                minlength: 3,
                validAlfaNumerico: true
            },
            Apellido: {
                required: true,
                maxlength: 20,
                minlength: 3,
                validAlfaNumerico: true
            },
            NroDni: {
                required: true,
                number: true,
                validDni: true,
                validDniRango: true
            },
            Domicilio: {
                required: true,
                maxlength: 20,
                minlength: 3,
                validAlfaNumerico: true
            },
            Telefono: {
                required: true,
                validTelefono: true
            },
            fechaNac: {
                required: true,
                validFechaNac: true
            }
        },
        messages: {
            Nombre: {
                required: "El nombre es obligatorio.",
                maxlength: "El nombre tiene un máximo de 20 caracteres.",
                minlength: "El nombre debe tener al menos 3 caracteres."
            },
            Apellido: {
                required: "El apellido es obligatorio.",
                maxlength: "El apellido tiene un máximo de 20 caracteres.",
                minlength: "El apellido debe tener al menos 3 caracteres."
            },
            NroDni: {
                required: "El documento es obligatorio.",
                number: "Solo puede ingresar números."
            },
            Domicilio: {
                required: "El domicilio es obligatorio.",
                maxlength: "El domicilio tiene un máximo de 20 caracteres.",
                minlength: "El domicilio debe tener al menos 3 caracteres."
            },
            Telefono: {
                required: "El número de teléfono es obligatorio.",
            },
            fechaNac: {
                required: "La fecha de nacimiento es obligatoria."
            }
        },
        metodo: reglasRegex.metodo
    };

    var reglasDeAuto = {
        rules: {
            Patente: {
                required: true,
                onlyValidBackplate: true
            },
            Marca: {
                required: true,
                minlength: 3,
                validAlfaNumerico: true
            },
            Modelo: {
                required: true,
                number: true,
            },
            DniDuenio: {
                required: true,
                number: true,
                validDni: true,
                validDniRango: true
            },
        },
        messages: {
            Patente: {
                required: "La patente es obligatoria.",
            },
            Marca: {
                required: "La marca es obligatoria.",
                minlength: "La marca debe poseer mínimo 3 caracteres."
            },
            Modelo: {
                required: "El modelo es obligatorio",
                number: "Solo puede ingresar números"
            },
            DniDuenio: {
                required: "El documento es obligatorio.",
                number: "Solo puede ingresar números."
            }
        },
        metodo: reglasRegex.metodo
    };

    // Aplicar las reglas de validación a los formularios correspondientes
    validad("#form_persona", reglasDePersona);
    validad("#form_auto", reglasDeAuto);
});