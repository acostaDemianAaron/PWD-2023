$("#form-peliculas").validate({
    rules:{
        inputTitulo: {
            required: true,
            minlength: 2
        },
        inputActores:{
            required: true
        },
        inputDirector:{
            required: true
        },
        inputGuion: {
            required: true
        },
        inputProduccion: {
            required: true
        },
        inputAno: {
            required: true,
            maxlength: 4,
            minlength: 2
        },
        inputNacionalidad: {
            required: true
        },
        inputDuracion: {
            required: true,
            maxlength: 3,
            minlength: 1
        },
        inputSinopsis: {
            required: true
        }
    },
    messages:{
        inputTitulo: "Ingrese un titulo de al menos 2 caracteres.",
        inputActores: "Ingrese al menos un actor.",
        inputDirector: "Ingrese el nombre del director.",
        inputGuion: "Ingrese el guion.",
        inputProduccion: "Ingrese la productora.",
        inputAno: "Ingrese un año con maximo 4 digitos.",
        inputNacionalidad: "Ingrese la nacionalidad",
        inputDuracion: "Ingrese la duracion en minutos (Maxiimo 3 digitos)",
        inputSinopsis: "Ingrese una breve descripcion."
    },
    errorClass: "is-invalid",
    validClass: "is-valid"
})

$("#enviar").click(function () {
    if($("#form-peliculas").valid() == false){
        return;
    }

    $("#form-peliculas").trigger("submit");
});

