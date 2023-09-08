$("#form_control").validate({
    rules: {
        lunes: {
            required: true
        },
        martes: {
            required: true
        },
        miercoles: {
            required: true
        },
        jueves: {
            required: true
        },
        viernes: {
            required: true
        }
    }
})

$("#enviar").click(function () {
    if($("#form_control").valid() == false) {
        return;
    }
});
