$(document).ready(function () {
    // Agregar reglas de validación a los campos del formulario
    $("#form_control").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 3
            }
        },
        messages: {
            nombre: {
                required: "El nombre es obligatorio.",
                minlength: "El nombre debe tener al menos 3 caracteres."
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
