$("#form-login").validate({
    rules: {
        username: "required",
        password: {
            required: true,
            minlength: 8,
            letandnum: {letandnum : true}

        }
    },
    messages: {
        username: "Complete este campo",
        password: {
            required: "Complete este campo",
            minlength: "Debe ser un minimo de 8 caracteres",
            letandnum: "Debe poseer letras y numeros"
        }
    },
    errorElement: 'span',
    errorClass: "is-invalid",
    validClass: "is-valid"
})


$("#submit").click(function () {
    // Debug para probar si el formulario es valido.
    // console.log($("#form-login").valid());
    if($("#form-login").valid() == false){
        return;
    }

    //$("#form-login").trigger("submit");
});

// Only let letters and nums be true.
jQuery.validator.addMethod("letandnum", function(value, element) {
    return this.optional(element) || (/^(?=.*[a-zA-Z])+(?=.*[0-9])[a-zA-Z0-9]+$/.test(value));
}, "* Only numbers and letters");