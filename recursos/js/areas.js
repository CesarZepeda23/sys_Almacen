$("#btnAgregarArea").click(function () {
  $("#modalAreaUDN").modal("show");
});

$("#btnArea").click(function () {
  $("#modalAreas").modal("show");
});


$(function mostrarUDN() {
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
      $("#tablasUDN").html(respuesta);
    },
  });
});

$(function mostrarAreas() {
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
      $("#tablasAreas").html(respuesta);
    },
  });
});


$("#btnRegistrarAreaUDN").click(function () {
  let datos = new FormData();
  datos.append("opc", 3);
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
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Relacion De UDN Y Area Agregada Con Exito',
        showConfirmButton: false,
        timer: 1500
      });
      $("#modalAreaUDN").modal("hide");
    },
  });
});

$("#btnRegistrarArea").click(function () {
  let datos = new FormData();
  datos.append("opc", 4);
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
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Area Agregada Con Exito',
        showConfirmButton: false,
        timer: 1500
      });
      $("#modalAreas").modal("hide");
    },
  });
});
