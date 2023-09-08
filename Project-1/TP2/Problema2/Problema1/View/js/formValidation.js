$("#form_control").validate({
    rules: {
        num: {
            required: true,
            minlength: 1,
            maxlength: 100
        }
    }
})

$("#enviar").click(function () {
    if($("#form_control").valid() == false) {
        return;
    }
});
