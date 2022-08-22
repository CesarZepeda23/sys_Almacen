$(function fechaActual() {
  let datos = new FormData();
  datos.append("opc", 1);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (res) {
      $("#fechaActual").val(res.trim());
    },
  });
});
