$("#form_control").validate({
    rules: {
        nombre: {
            required: true,
            maxlength: 20,
            minlength: 3
        },
        apellido: {
            required: true,
            maxlength: 20,
            minlength: 3
        },
        edad: {
            required: true,
            maxlength: 3,
            range: [1, 100]
        },
        direccion: {
            required: true,
            maxlength: 30,
            minlength: 3
        }
        ,
        genero: {
            required: true
        }
        ,
        estudio: {
            required: true,
        }
    }
})

$("#enviar").click(function () {
    if($("#form_control").valid() == false) {
        return;
    }
});
