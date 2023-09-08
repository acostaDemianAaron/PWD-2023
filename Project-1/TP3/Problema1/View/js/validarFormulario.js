$("#form-documentos").validate({
  rules: {
    myFile: {
      required: true,
      extension: "pdf|doc",
    },
  },
  messages: {
    myFile: "Adjunta un archivo válido en formato PDF o DOC.",
  },
});

$("#enviar").click(function () {
  if ($("#form-documentos").valid() == false) {
    return;
  }

  $("#form-documentos").trigger("submit");
});

$.validator.addMethod(
  "extension",
  function (value, element, param) {
    // Obtengo la extensión del archivo subido.
    var extension = value.split(".").pop().toLowerCase();

    // Verifico si la extensión está en la lista de extensiones permitidas (param).
    return param.split("|").indexOf(extension) !== -1;
  },
  "Por favor, seleccione un archivo válido en formato PDF o DOC."
);
