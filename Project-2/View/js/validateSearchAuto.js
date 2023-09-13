$("document").ready(function () {
    $("#form-control").validate({
        rules: {
            Patente: {
                required: true,
                onlyValidBackplate: { onlyValidBackplate: true }
            }
        },
        messages: {
            Patente: {
                required: "Ingrese una patente."
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
}, "Tiene que ser 3 letras mayusculas, un espacio y 3 numeros.");