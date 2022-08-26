$("#btnAgregarEquipos").click(function () {
  $("#modalRegistroEquipos").modal("show");
});

$("#btnEditarEquipos").click(function () {
  $("#modalEditarEquipos").modal("show");
});

$(function () {
    let datos = new FormData();
    datos.append("opc", 1);
    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Equipos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        $("#tablasequipos").html(respuesta);
        
    },
    });
  });

  $(function ultimoNumeroEquipo() {
    let datos = new FormData();
    datos.append("opc", 2);
    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Equipos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (res) {
        $("#numeroEquipo").val(res);
      },
    });
  });

  $(function () {
    let datos = new FormData();
    datos.append("opc", 3);
    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Equipos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        $("#salectUDN").html(respuesta);
      },
    });
  });

  $("#salectUDN").change(function () {
    let datos = new FormData();
    datos.append("opc", 4);
    datos.append("idUDN", $(this).val());
    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Equipos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        $("#salectAreaUDN").html(respuesta);
      },
    });
  });

  $(function () {
    let datos = new FormData();
    datos.append("opc", 5);
    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Equipos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        $("#tablascomponentesE").html(respuesta);
      },
    });
  });
  
  