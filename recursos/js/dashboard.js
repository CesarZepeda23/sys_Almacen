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

  $(function mostrarTodosEquipos() {
    let datos = new FormData();
    datos.append("opc", 2);
    $.ajax({
      type: "POST",
      url: "./controlador/ctrl_Dashboard.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        $("#tablasEquiposindex").html(respuesta);
/*         console.log("Hola");
 */      },
    });
  });

  $(function mostrarTodosComponentes() {
    let datos = new FormData();
    datos.append("opc", 3);
      $.ajax({
      type: "POST",
      url: "./controlador/ctrl_Dashboard.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        $("#tablascomponentesindex").html(respuesta);
        /* console.log("Holaa") */
      },
    });
  });