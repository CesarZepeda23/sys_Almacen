$("#btnAgregarComp").click(function () {
  $(function mostrarModalRegistro_OcultarCampos() {
    $("#modalRegistro").modal("show");
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
});

$(function mostrarCamposSeleccionado() {
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

$("#agregar").click(function () {
  if (
    $("#udn").val() == 0 ||
    $("#areas").val() == 0 ||
    $("#nombreComp").val().length < 1 ||
    $("#marca").val().length < 1 ||
    $("#modelo").val().length < 1 ||
    $("#categoria").val() == 0 ||
    $("#precio").val().length < 1 ||
    $("#condicion").val().length < 1
  ) {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Falta llenar datos obligatorios',
      showConfirmButton: false,
      timer: 1500
    });
  } else {
    let id_Caracteristica;
    let datos = new FormData();

    datos.append("opc", 5);
    datos.append("tipo", $("#tipo").val());
    datos.append("marca", $("#marca").val());
    datos.append("modelo", $("#modelo").val());
    datos.append("voltaje", $("#voltaje").val());
    datos.append("velocidad", $("#velocidad").val());
    datos.append("contactos", $("#contactos").val());
    datos.append("entrada", $("#entradas").val());
    datos.append("salida", $("#salidas").val());
    datos.append("amperaje", $("#amperaje").val());
    datos.append("estado", 1);
    datos.append("costo", $("#precio").val());
    datos.append("condicion", $("#condicion").val());
    datos.append("capacidad", $("#capacidad").val());
    datos.append("resolucion", $("#resolucion").val());
    datos.append("tamaño", $("#tamaño").val());
    datos.append("aplicacion", $("#app").val());

    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Componentes.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        id_Caracteristica = parseInt(respuesta);
      },
    });

    datos.append("opc", 6);
    datos.append("nombre", $("#nombreComp").val());
    datos.append("id_Caracteristica", id_Caracteristica);
    datos.append("id_TipoComponente", $("#categoria").val());
    datos.append("id_AreaUDN", $("#areas").val());

    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Componentes.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Agregado Con Exito',
          showConfirmButton: false,
          timer: 1500
        });
      },
    });
  }
});

// $("#editar").click(function () {
//   $("#modalEditar").modal("show");

//   $(function mostrarUDN() {
//     let datos = new FormData();
//     datos.append("opc", 1);
//     $.ajax({
//       type: "POST",
//       url: "../controlador/ctrl_Componentes.php",
//       contentType: false,
//       data: datos,
//       processData: false,
//       cache: false,
//       success: function (respuesta) {
//         $("#udnEditar").html(respuesta);
//       },
//     });
//   });

//   $(function mostrarCategorias() {
//     let datos = new FormData();
//     datos.append("opc", 3);
//     $.ajax({
//       type: "POST",
//       url: "../controlador/ctrl_Componentes.php",
//       contentType: false,
//       data: datos,
//       processData: false,
//       cache: false,
//       success: function (respuesta) {
//         $("#categoriaEditar").html(respuesta);
//       },
//     });
//   });
// });

// $("#btnAgregarComp").click(function () {
//   $(function mostrarModalRegistro_OcultarCampos() {
//     $("#modalEditar").modal("show");

//     $.ajax({
//       type: "POST",
//       url: "../controlador/ctrl_Pedidos.php",
//       contentType: false,
//       data: datos,
//       processData: false,
//       cache: false,
//       dataType: "JSON",
//       success: function (data) {
//         $("#divMensajePro").hide();
//         $("#modalProductos").modal("hide");
//         $("#divProducto").show();
//         $("#divRelleno").show();
//         $("#divObservaciones").show();
//         $("#divBtnAgregar").show();

//         if (data["id_categoria"] == 1) {
//           $("#divInfoPastel").show();
//         }

//         $("#NombreProducto").val(data["titulo"]);
//       },
//     });

//     $("#voltajeDiv").hide();
//     $("#velocidadDiv").hide();
//     $("#contactosDiv").hide();
//     $("#entradasDiv").hide();
//     $("#salidasDiv").hide();
//     $("#amperajeDiv").hide();
//     $("#capacidadDiv").hide();
//     $("#resolucionDiv").hide();
//     $("#tamañoDiv").hide();
//     $("#appDiv").hide();
//   });

//   $(function mostrarUDNEditar() {
//     let datos = new FormData();
//     datos.append("opc", 1);
//     $.ajax({
//       type: "POST",
//       url: "../controlador/ctrl_Componentes.php",
//       contentType: false,
//       data: datos,
//       processData: false,
//       cache: false,
//       success: function (respuesta) {
//         $("#udnEditar").html(respuesta);
//       },
//     });
//   });

//   $(function mostrarCategoriasEditar() {
//     let datos = new FormData();
//     datos.append("opc", 3);
//     $.ajax({
//       type: "POST",
//       url: "../controlador/ctrl_Componentes.php",
//       contentType: false,
//       data: datos,
//       processData: false,
//       cache: false,
//       success: function (respuesta) {
//         $("#categoriaEditar").html(respuesta);
//       },
//     });
//   });
// });
