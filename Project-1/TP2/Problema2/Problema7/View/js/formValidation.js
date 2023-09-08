$("#form_control").validate({
    rules: {
        nombre: {
            num1: true,
            maxlength: 5,
            minlength: 1
        },
        num1: {
            required: true,
            maxlength: 5,
            minlength: 1
        },
        operacion: {
            required: true
        }
    }
})

$("#enviar").click(function () {
    if($("#form_control").valid() == false) {
        return;
    }
});
