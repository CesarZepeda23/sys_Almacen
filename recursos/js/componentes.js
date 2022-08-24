$("#btnAgregarComp").click(function () {
  $("#modalRegistro").modal("show");
});

$(function mostrarUDN() {
  let datos = new FormData();
  datos.append("opc", 1);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Componentes.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#").html(respuesta);
    },
  });
});

$(function mostrarComponentes() {
  let datos = new FormData();
  datos.append("opc", 2);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Componentes.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#tablaComponentes").html(respuesta);
    },
  });
});
