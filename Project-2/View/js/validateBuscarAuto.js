$("document").ready(function () {
    $("#buscar-auto").validate({
        rules: {
            Patente: {
                required: true,
                minlength: 6,
                maxlength: 7,
                onlyValidBackplate: { onlyValidBackplate: true }
            }
        },
        messages: {
            Patente: {
                required: "Ingrese una patente.",
                minlength: "La patente debe ser 3 letras mayusculas, un espacio y 3 numeros.",
                onlyValidBackplate: "La patente debe ser 3 letras mayusculas, un espacio y 3 numeros."
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
});

jQuery.validator.addMethod("onlyValidBackplate", function (value, element) {
    return this.optional(element) || (/([A-Z]{3}\s[0-9]{3})/.test(value));
}, "* Tiene que ser 3 letras, un espacio y 3 numeros.");