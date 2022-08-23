$(function () {
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
      $("#tablascomponentes").html(respuesta);
    },
  });
});
