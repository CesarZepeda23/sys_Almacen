$("#btnVerUDN").click(function () {
  $("#modalVerUDN").modal("show");
});

$(function mostrarTodosUDN() {
    let datos = new FormData();
    datos.append("opc", 1);
    $.ajax({
      type: "POST",
      url: "./controlador/ctrl_Dashboard.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        $("#tablasUDNindex").html(respuesta);
     },
    });
  });
