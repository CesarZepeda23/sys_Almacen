$(function mostrarTodosUDN() {
    let datos = new FormData();
    datos.append("opc", 1);
    $.ajax({
      type: "POST",
      url: "./controlador/ctrl_UDN.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        $("#tablasUDN").html(respuesta);
        console.log("Hola");
      },
    });
  });