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

$(function mostrarUDN() {
  let datos = new FormData();
  datos.append("opc", 4);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Areas.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#udn").html(respuesta);
    },
  });
});

$(function mostrarArea() {
  let datos = new FormData();
  datos.append("opc", 5);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Areas.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#areas").html(respuesta);
    },
  });
});

$("#btnRegistrarAreaUDN").click(function () {
  let datos = new FormData();
  datos.append("opc", 6);
  datos.append("id_Area", $("#areas").val());
  datos.append("id_UDN", $("#udn").val());
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Areas.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      console.log("exito",respuesta);
    },
  });
});

$("#btnRegistrarArea").click(function () {
  let datos = new FormData();
  datos.append("opc", 7);
  datos.append("nombre", $("#nombre").val());
  datos.append("abreviatura", $("#abreviatura").val());
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Areas.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
    window.location.href="../vistas/areas.php"
    },
  });
});