$("#form-login").validate({
    rules: {
        username: "required",
        password: {
            required: true,
            minlength: 8,
            
        }
    },
    messages: {
        username: "",
        password: {
            required: ""
        }
    },
    errorClass: "is-invalid",
    validClass: "is-valid"
})

$("#submit").click(function () {
    if($("#form-login").valid() == false){
        return;
    }

    $("#form-login").trigger("submit");
});