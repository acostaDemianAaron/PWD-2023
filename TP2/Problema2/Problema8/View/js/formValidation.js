$("#form_control").validate({
    rules: {
        edad: {
            required: true,
            maxlength: 3,
            range: [1, 100]
        },
        estudiante: {
            required: true
        }
    }
})

$("#enviar").click(function () {
    if($("#form_control").valid() == false) {
        return;
    }
});
