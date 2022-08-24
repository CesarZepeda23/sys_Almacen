$("#btnAgregarArea").click(function () {
  $("#modalAreaUDN").modal("show");
});

$("#btnArea").click(function () {
  $("#modalAreas").modal("show");
});

$(function mostrarAreaUDN() {
  let datos = new FormData();
  datos.append("opc", 1);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Areas.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#tablasAreaUDN").html(respuesta);
      console.log(respuesta);
    },
  });
});

$(function mostrarUDN() {
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
      $("#tablasUDN").html(respuesta);
      console.log(respuesta);
    },
  });
});

$(function mostrarAreas() {
  let datos = new FormData();
  datos.append("opc", 3);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Areas.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#tablasAreas").html(respuesta);
    },
  });
});
