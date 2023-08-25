$("#form-peliculas").validate({
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

$("#enviar").click(function () {
    if($("#form-peliculas").valid() == false){
        return;
    }

    console.log()
});

