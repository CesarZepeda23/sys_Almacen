$("#btnAgregarComp").click(function () {
  // $("#modalRegistro").modal("show");
  $("#modalEditar").modal("show");
  $("#voltajeDiv").hide();
  $("#velocidadDiv").hide();
  $("#contactosDiv").hide();
  $("#entradasDiv").hide();
  $("#salidasDiv").hide();
  $("#amperajeDiv").hide();
  $("#capacidadDiv").hide();
  $("#resolucionDiv").hide();
  $("#tamañoDiv").hide();
  $("#appDiv").hide();
});

$(function mostrarCampos() {
  // Mostrar/Ocultar campo voltaje
  $("#voltajeSwitch").click(function () {
    if ($("#voltajeSwitch").is(":checked")) {
      $("#voltajeDiv").show();
      $("#voltaje").val("");
    } else {
      $("#voltajeDiv").hide();
      $("#voltaje").val("");
    }
  });

  // Mostrar/Ocultar campo velocidad
  $("#velocidadSwitcht").click(function () {
    if ($("#velocidadSwitcht").is(":checked")) {
      $("#velocidadDiv").show();
      $("#velocidad").val("");
    } else {
      $("#velocidadDiv").hide();
      $("#velocidad").val("");
    }
  });

  //Mostrar/Ocultar campo contactos
  $("#contactosSwitcht").click(function () {
    if ($("#contactosSwitcht").is(":checked")) {
      $("#contactosDiv").show();
      $("#contactos").val("");
    } else {
      $("#contactosDiv").hide();
      $("#contactos").val("");
    }
  });

  //Mostrar/Ocultar campo entradas
  $("#entradasSwitcht").click(function () {
    if ($("#entradasSwitcht").is(":checked")) {
      $("#entradasDiv").show();
      $("#entradas").val("");
    } else {
      $("#entradasDiv").hide();
      $("#entradas").val("");
    }
  });

  //Mostrar/Ocultar campo salidas
  $("#salidasSwitcht").click(function () {
    if ($("#salidasSwitcht").is(":checked")) {
      $("#salidasDiv").show();
      $("#salidas").val("");
    } else {
      $("#salidasDiv").hide();
      $("#salidas").val("");
    }
  });

  //Mostrar/Ocultar campo amperajes
  $("#amperajeSwitcht").click(function () {
    if ($("#amperajeSwitcht").is(":checked")) {
      $("#amperajeDiv").show();
      $("#amperaje").val("");
    } else {
      $("#amperajeDiv").hide();
      $("#amperaje").val("");
    }
  });

  //Mostrar/Ocultar campo capacidad
  $("#capacidadSwitcht").click(function () {
    if ($("#capacidadSwitcht").is(":checked")) {
      $("#capacidadDiv").show();
      $("#capacidad").val("");
    } else {
      $("#capacidadDiv").hide();
      $("#capacidad").val("");
    }
  });

  //Mostrar/Ocultar campo resolucion
  $("#resolucionSwitcht").click(function () {
    if ($("#resolucionSwitcht").is(":checked")) {
      $("#resolucionDiv").show();
      $("#resolucion").val("");
    } else {
      $("#resolucionDiv").hide();
      $("#resolucion").val("");
    }
  });

  //Mostrar/Ocultar campo tamaño
  $("#tamañoSwitcht").click(function () {
    if ($("#tamañoSwitcht").is(":checked")) {
      $("#tamañoDiv").show();
      $("#tamaño").val("");
    } else {
      $("#tamañoDiv").hide();
      $("#tamaño").val("");
    }
  });

  //Mostrar/Ocultar campo app
  $("#appSwitcht").click(function () {
    if ($("#appSwitcht").is(":checked")) {
      $("#appDiv").show();
      $("#app").prop("selectedIndex", 0);
    } else {
      $("#appDiv").hide();
      $("#app").prop("selectedIndex", 0);
    }
  });
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
      $("#udn").html(respuesta);
    },
  });
});

$("#udn").change(function () {
  let datos = new FormData();
  datos.append("opc", 2);
  datos.append("idUDN", $(this).val());

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Componentes.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#areas").html(respuesta);
    },
  });
});

$(function mostrarCategorias() {
  let datos = new FormData();
  datos.append("opc", 3);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Componentes.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#categoria").html(respuesta);
    },
  });
});

$(function mostrarComponentes() {
  let datos = new FormData();
  datos.append("opc", 4);
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

$(function insertarDatos() {
  let datos = new FormData();
  datos.append("opc", 5);
  datos.append("nombre", "Juan");
  datos.append("id_Caracteristica", 1);
  datos.append("id_TipoComponente", 1);
  datos.append("id_AreaUDN", 1);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Componentes.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      console.log("exito");
    },
  });
});
