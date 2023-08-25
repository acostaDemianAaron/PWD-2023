$("#form-inputs").validate({
    rules:{
        inputTitulo: {
            required: true,
            maxlength: 10
        }
    }
})

// console.log(typeof($("#formpeliculas").valid()))

// $("#formpeliculas").validate({
//     rules: {
//         inputTitulo: {
//             required: true,
//             maxlength: 10
//         }
//     }
// })

$("#enviar").click(function(){
    if($("#formpelicula") == false){
        return;
    }

    console.log()
});