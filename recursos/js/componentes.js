$("#btnAgregarComp").click(function () {
  $("#modalRegistro").modal("show");
});

$(function mostrarComponentes() {
  let datos = new FormData();
  datos.append("opc", 2);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Areas.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#tablaComponentes").html(respuesta);
    },
  });
});
