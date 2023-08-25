$("#form-login").validate({
    rules: {
        username: {
            required: true,
            minlength: 8,
            depends: function(){
                console.log($("#username"));
                return /^[A-Za-z0-9]*$/.test($("#username"));
            }
        }
    }
})

$("#submit").click(function () {
    if($("#form-login").valid() == false){
        return;
    }

    $("#form-login").trigger("submit");
});