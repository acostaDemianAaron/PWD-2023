$("#form-txt").validate({
  rules: {
    myFile: {
      required: true,
      extension: "txt", // Cambia esta línea para aceptar solo archivos .txt
    },
  },
  messages: {
    myFile: "Debes adjuntar un archivo de texto (.txt).",
  },
});

$("#enviar").click(function () {
  if ($("#form-txt").valid() == false) {
    return;
  }

  $("#form-txt").trigger("submit");
});

$.validator.addMethod(
  "extension",
  function (value, element, param) {
    // Obtengo la extensión del archivo subido.
    var extension = value.split(".").pop().toLowerCase();

    // Verifico si la extensión es igual a la extensión permitida (param).
    return extension === param;
  },
  "Por favor, seleccione un archivo de texto válido (.txt)."
);
