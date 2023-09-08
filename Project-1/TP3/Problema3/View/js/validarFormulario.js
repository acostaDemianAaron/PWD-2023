$("#form-peliculas").validate({
  rules: {
    inputTitulo: {
      required: true,
      minlength: 2,
    },
    inputActores: {
      required: true,
    },
    inputDirector: {
      required: true,
    },
    inputGuion: {
      required: true,
    },
    inputProduccion: {
      required: true,
    },
    inputAno: {
      required: true,
      maxlength: 4,
      minlength: 2,
    },
    inputNacionalidad: {
      required: true,
    },
    inputDuracion: {
      required: true,
      maxlength: 3,
      minlength: 1,
    },
    inputSinopsis: {
      required: true,
    },
    imagen: {
      required: true,
      extension: true,
    },
  },
  messages: {
    inputTitulo: "Ingrese un titulo de al menos 2 caracteres.",
    inputActores: "Ingrese al menos un actor.",
    inputDirector: "Ingrese el nombre del director.",
    inputGuion: "Ingrese el guion.",
    inputProduccion: "Ingrese la productora.",
    inputAno: "Ingrese un año con maximo 4 digitos.",
    inputNacionalidad: "Ingrese la nacionalidad",
    inputDuracion: "Ingrese la duracion en minutos (Maxiimo 3 digitos)",
    inputSinopsis: "Ingrese una breve descripcion.",
    imagen: {
        required: "Seleccione un archivo de imagen.",
        extension: "Por favor, seleccione un archivo de imagen válido."
    }
  },
});

$("#enviar").click(function () {
  if ($("#form-peliculas").valid() == false) {
    return;
  }

  $("#form-peliculas").trigger("submit");
});

$.validator.addMethod(
  "extension",
  function (value, element) {
    // Obtengo la extensión del archivo subido.
    var extension = value.split(".").pop().toLowerCase();

    // Defino las extensiones de imagen permitidas, por ejemplo, jpg, jpeg, png, gif, etc.
    var allowedExtensions = ["jpg", "jpeg", "png", "gif"];

    // Verifico si la extensión está en la lista de extensiones permitidas.
    return $.inArray(extension, allowedExtensions) !== -1;
  },
  "Por favor, seleccione un archivo de imagen válido."
);
