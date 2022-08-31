

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

  $("tbody").on("click", "button", function () {
    if ($(this).attr("id") == "btnVerUDN") {
    $("#modalVerUDN").modal("show"); 
    let ID_UDN = parseInt($(this).val());
    $(function () {
      let datos = new FormData();
      datos.append("opc", 2);
      datos.append("ID_UDN", ID_UDN);
      
      $.ajax({
      type: "POST",
      url: "./controlador/ctrl_Dashboard.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      dataType: "JSON",
      success: function (data) {
          $("#equipos").html(data["CountEquipos"]);
        },
      });
    });
    $(function () {
      let datos = new FormData();
      datos.append("opc", 3);
      datos.append("ID_UDN", ID_UDN);
      
      $.ajax({
      type: "POST",
      url: "./controlador/ctrl_Dashboard.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      dataType: "JSON",
      success: function (data) {
          $("#areas").html(data["CountAreas"]);
        },
      });
    });

    $(function () {
      let datos = new FormData();
      datos.append("opc", 4);
      datos.append("ID_UDN", ID_UDN);
      
      $.ajax({
      type: "POST",
      url: "./controlador/ctrl_Dashboard.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      dataType: "JSON",
      success: function (data) {
          $("#perifericos").html(data["CountPeri"]);
        },
      });
    });
    };
    });