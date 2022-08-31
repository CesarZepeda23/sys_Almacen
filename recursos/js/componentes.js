function mostrarComponentes() {
  let datos = new FormData();
  datos.append("opc", 4);
  datos.append("id_tipo", $("#filtroCategoria").val());

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
}
function selectTipoComponentes(idSelect, extra) {
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
      $(idSelect).html(respuesta + extra);
    },
  });
}
function selectUDN(idDUN) {
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
      $(idDUN).html(respuesta);
    },
  });
}
function limpiarDivRegistro(idSwtich, idDiv, idInput, idSelect) {
  $(idSwtich).prop("checked", false);
  $(idInput).val("");
  $(idDiv).hide();
  $(idSelect).prop("selectedIndex", 0);
}
function validarSwitch(idSwtich, idDiv, idCampo, idSelect) {
  $(idSwtich).click(function () {
    if ($(idSwtich).is(":checked")) {
      $(idCampo).val("");
      $(idDiv).show();
      $(idSelect).prop("selectedIndex", 0);
    } else {
      $(idCampo).val("");
      $(idDiv).hide();
      $(idSelect).prop("selectedIndex", 0);
    }
  });
}
function changeUDN(idUDN, idArea) {
  $(idUDN).change(function () {
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
        $(idArea).html(respuesta);
      },
    });
  });
}

$(function Inicio() {
  mostrarComponentes();
  selectTipoComponentes("#filtroCategoria", '<option value="0">Todos</option>');

  validarSwitch("#voltajeSwitch", "#voltajeDiv", "#voltaje", "");
  validarSwitch("#velocidadSwitcht", "#velocidadDiv", "#velocidad", "");
  validarSwitch("#contactosSwitcht", "#contactosDiv", "#contactos", "");
  validarSwitch("#entradasSwitcht", "#entradasDiv", "#entradas", "");
  validarSwitch("#salidasSwitcht", "#salidasDiv", "#salidas", "");
  validarSwitch("#amperajeSwitcht", "#amperajeDiv", "#amperaje", "");
  validarSwitch("#capacidadSwitcht", "#capacidadDiv", "#capacidad", "");
  validarSwitch("#resolucionSwitcht", "#resolucionDiv", "#resolucion", "");
  validarSwitch("#tamañoSwitcht", "#tamañoDiv", "#tamaño", "");
  validarSwitch("#appSwitcht", "#appDiv", "", "app");

  changeUDN("#udn", "#areas");
  changeUDN("#udnEditar", "#areasEditar");
});

$("#filtroCategoria").change(function () {
  mostrarComponentes();
});

$("#btnAgregarComp").click(function () {
  $("#modalRegistro").modal("show");

  selectUDN("#udn");
  selectTipoComponentes("#categoria", "");

  limpiarDivRegistro("#voltajeSwitch", "#voltajeDiv", "voltaje", "");
  limpiarDivRegistro("#velocidadSwitcht", "#velocidadDiv", "velocidad", "");
  limpiarDivRegistro("#contactosSwitcht", "#contactosDiv", "contactos", "");
  limpiarDivRegistro("#entradasSwitcht", "#entradasDiv", "entradas", "");
  limpiarDivRegistro("#salidasSwitcht", "#salidasDiv", "salidas", "");
  limpiarDivRegistro("#amperajeSwitcht", "#amperajeDiv", "amperaje", "");
  limpiarDivRegistro("#capacidadSwitcht", "#capacidadDiv", "capacidad", "");
  limpiarDivRegistro("#resolucionSwitcht", "#resolucionDiv", "resolucion", "");
  limpiarDivRegistro("#tamañoSwitcht", "#tamañoDiv", "tamaño", "");
  limpiarDivRegistro("#appSwitcht", "#appDiv", "", "#app");
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
      position: "center",
      icon: "error",
      title: "Error, Falta Llenar Campos Obligatorios",
      showConfirmButton: false,
      timer: 1500,
    });
  } else {
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
    datos.append("nombre", $("#nombreComp").val());
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
          position: "center",
          icon: "success",
          title: "Componente Agregado Con Exito",
          showConfirmButton: false,
          timer: 1500,
        });
        $("#modalRegistro").modal("hide");
      },
      error: function () {
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Error, Datos no Almacenados",
          showConfirmButton: false,
          timer: 1500,
        });
      },
    });
  }
});

//CORRECTO  ===================================================================================

$("tbody").on("click", "button", function () {
  if ($(this).attr("id") == "edit") {
    let id_componente = parseInt($(this).val());

    $("#modalEditar").modal("show");

    selectUDN("#udnEditar");
    selectTipoComponentes("#categoriaEditar", "");

    // $(function mostrarInfoComponente() {
    //   let datos = new FormData();
    //   datos.append("opc", 6);
    //   datos.append("id_componente", id_componente);
    //
    //   $.ajax({
    //     type: "POST",
    //     url: "../controlador/ctrl_Componentes.php",
    //     contentType: false,
    //     data: datos,
    //     processData: false,
    //     cache: false,
    //     dataType: "JSON",
    //     success: function (data) {
    //       $("#udnEditar option[value=" + data["id_UDN"] + "]").attr(
    //         "selected",
    //         true
    //       );
    //
    //       $(function () {
    //         let datos = new FormData();
    //         datos.append("opc", 2);
    //         datos.append("idUDN", $("#udnEditar").val());

    //         $.ajax({
    //           type: "POST",
    //           url: "../controlador/ctrl_Componentes.php",
    //           contentType: false,
    //           data: datos,
    //           processData: false,
    //           cache: false,
    //           success: function (respuesta) {
    //             $("#areasEditar").html(respuesta);
    //             $("#areasEditar option[value=" + data["idAreaUdn"] + "]").attr(
    //               "selected",
    //               true
    //             );
    //           },
    //         });
    //       });

    //       $("#nombreCompEditar").val(data["nombre"]);

    //       $("#marcaEditar").val(data["marca"]);
    //       $("#modeloEditar").val(data["modelo"]);
    //       $("#tipoEditar").val(data["tipo"]);
    //       $("#categoriaEditar").prop(
    //         "selectedIndex",
    //         parseInt(data["id_TipoComponente"])
    //       );
    //       $("#precioEditar").val(data["costo"]);
    //       $("#condicionEditar").val(data["condicion"]);
    //       $("#voltajeEditar").val(data["voltaje"]);
    //       $("#velocidadEditar").val(data["velocidad"]);
    //       $("#contactosEditar").val(data["contactos"]);
    //       $("#entradasEditar").val(data["entrada"]);
    //       $("#salidasEditar").val(data["salida"]);
    //       $("#amperajeEditar").val(data["amperaje"]);
    //       $("#capacidadEditar").val(data["capacidad"]);
    //       $("#resolucionEditar").val(data["resolucion"]);
    //       $("#tamañoEditar").val(data["tamaño"]);

    //       if ($("#voltajeEditar").val().length < 1) {
    //         $("#voltajeDivEditar").hide();
    //         $("#voltajeSwitchEditar").prop("checked", false);
    //       } else {
    //         $("#voltajeSwitchEditar").prop("checked", true);
    //       }

    //       if ($("#velocidadEditar").val().length < 1) {
    //         $("#velocidadDivEditar").hide();
    //         $("#velocidadSwitchtEditar").prop("checked", false);
    //       } else {
    //         $("#velocidadSwitchtEditar").prop("checked", true);
    //       }

    //       if ($("#contactosEditar").val().length < 1) {
    //         $("#contactosDivEditar").hide();
    //         $("#contactosSwitchtEditar").prop("checked", false);
    //       } else {
    //         $("#contactosSwitchtEditar").prop("checked", true);
    //       }

    //       if ($("#entradasEditar").val().length < 1) {
    //         $("#entradasDivEditar").hide();
    //         $("#entradasSwitchtEditar").prop("checked", false);
    //       } else {
    //         $("#entradasSwitchtEditar").prop("checked", true);
    //       }

    //       if ($("#salidasEditar").val().length < 1) {
    //         $("#salidasDivEditar").hide();
    //         $("#salidasSwitchtEditar").prop("checked", false);
    //       } else {
    //         $("#salidasSwitchtEditar").prop("checked", true);
    //       }

    //       if ($("#amperajeEditar").val().length < 1) {
    //         $("#amperajeDivEditar").hide();
    //         $("#amperajeSwitchtEditar").prop("checked", false);
    //       } else {
    //         $("#amperajeSwitchtEditar").prop("checked", true);
    //       }

    //       if ($("#capacidadEditar").val().length < 1) {
    //         $("#capacidadDivEditar").hide();
    //         $("#capacidadSwitchtEditar").prop("checked", false);
    //       } else {
    //         $("#capacidadSwitchtEditar").prop("checked", true);
    //       }

    //       if ($("#resolucionEditar").val().length < 1) {
    //         $("#resolucionDivEditar").hide();
    //         $("#resolucionSwitchtEditar").prop("checked", false);
    //       } else {
    //         $("#resolucionSwitchtEditar").prop("checked", true);
    //       }

    //       if ($("#tamañoEditar").val().length < 1) {
    //         $("#tamañoDivEditar").hide();
    //         $("#tamañoSwitchtEditar").prop("checked", false);
    //       } else {
    //         $("#tamañoSwitchtEditar").prop("checked", true);
    //       }

    //       if (data["aplicacion"] == 0) {
    //         $("#appDivEditar").hide();
    //         $("#appSwitchtEditar").prop("checked", false);
    //       } else {
    //         $("#appSwitchtEditar").prop("checked", true);
    //         $("#appEditar option[value=" + data["aplicacion"] + "]").attr(
    //           "selected",
    //           true
    //         );
    //       }
    //     },
    //   });
    // });

    $(function mostrarCamposSeleccionadoEditar() {
      // Mostrar/Ocultar campo voltaje
      $("#voltajeSwitchEditar").click(function () {
        if ($("#voltajeSwitchEditar").is(":checked")) {
          $("#voltajeDivEditar").show();
          $("#voltajeEditar").val("");
        } else {
          $("#voltajeDivEditar").hide();
          $("#voltajeEditar").val("");
        }
      });

      // Mostrar/Ocultar campo velocidad
      $("#velocidadSwitchtEditar").click(function () {
        if ($("#velocidadSwitchtEditar").is(":checked")) {
          $("#velocidadDivEditar").show();
          $("#velocidadEditar").val("");
        } else {
          $("#velocidadDivEditar").hide();
          $("#velocidadEditar").val("");
        }
      });

      //Mostrar/Ocultar campo contactos
      $("#contactosSwitchtEditar").click(function () {
        if ($("#contactosSwitchtEditar").is(":checked")) {
          $("#contactosDivEditar").show();
          $("#contactosEditar").val("");
        } else {
          $("#contactosDivEditar").hide();
          $("#contactosEditar").val("");
        }
      });

      //Mostrar/Ocultar campo entradas
      $("#entradasSwitchtEditar").click(function () {
        if ($("#entradasSwitchtEditar").is(":checked")) {
          $("#entradasDivEditar").show();
          $("#entradasEditar").val("");
        } else {
          $("#entradasDivEditar").hide();
          $("#entradasEditar").val("");
        }
      });

      //Mostrar/Ocultar campo salidas
      $("#salidasSwitchtEditar").click(function () {
        if ($("#salidasSwitchtEditar").is(":checked")) {
          $("#salidasDivEditar").show();
          $("#salidasEditar").val("");
        } else {
          $("#salidasDivEditar").hide();
          $("#salidasEditar").val("");
        }
      });

      //Mostrar/Ocultar campo amperajes
      $("#amperajeSwitchtEditar").click(function () {
        if ($("#amperajeSwitchtEditar").is(":checked")) {
          $("#amperajeDivEditar").show();
          $("#amperajeEditar").val("");
        } else {
          $("#amperajeDivEditar").hide();
          $("#amperajeEditar").val("");
        }
      });

      //Mostrar/Ocultar campo capacidad
      $("#capacidadSwitchtEditar").click(function () {
        if ($("#capacidadSwitchtEditar").is(":checked")) {
          $("#capacidadDivEditar").show();
          $("#capacidadEditar").val("");
        } else {
          $("#capacidadDivEditar").hide();
          $("#capacidadEditar").val("");
        }
      });

      //Mostrar/Ocultar campo resolucion
      $("#resolucionSwitchtEditar").click(function () {
        if ($("#resolucionSwitchtEditar").is(":checked")) {
          $("#resolucionDivEditar").show();
          $("#resolucionEditar").val("");
        } else {
          $("#resolucionDivEditar").hide();
          $("#resolucionEditar").val("");
        }
      });

      //Mostrar/Ocultar campo tamaño
      $("#tamañoSwitchtEditar").click(function () {
        if ($("#tamañoSwitchtEditar").is(":checked")) {
          $("#tamañoDivEditar").show();
          $("#tamañoEditar").val("");
        } else {
          $("#tamañoDivEditar").hide();
          $("#tamañoEditar").val("");
        }
      });

      //Mostrar/Ocultar campo app
      $("#appSwitchtEditar").click(function () {
        if ($("#appSwitchtEditar").is(":checked")) {
          $("#appDivEditar").show();
          $("#appEditar").prop("selectedIndex", 0);
        } else {
          $("#appDivEditar").hide();
          $("#appEditar").prop("selectedIndex", 0);
        }
      });
    });
  } else if ($(this).attr("id") == "print") {
    alert("impr");
  } else if ($(this).attr("id") == "delete") {
    let id_componente = parseInt($(this).val());

    $(function recuperarInfoComponente() {
      let datos = new FormData();
      datos.append("opc", 6);
      datos.append("id_componente", id_componente);

      $.ajax({
        type: "POST",
        url: "../controlador/ctrl_Componentes.php",
        contentType: false,
        data: datos,
        processData: false,
        cache: false,
        dataType: "JSON",
        success: function (data) {
          let id_Caracteristica = parseInt(data["id_Caracteristica"]);

          $(function () {
            let datos = new FormData();
            datos.append("opc", 7);
            datos.append("idCaracteristica", id_Caracteristica);

            $.ajax({
              type: "POST",
              url: "../controlador/ctrl_Componentes.php",
              contentType: false,
              data: datos,
              processData: false,
              cache: false,
              success: function (respuesta) {
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Componente Eliminado Con Exito",
                  showConfirmButton: false,
                  timer: 1500,
                });

                mostrarComponentes();
              },
            });
          });
        },
      });
    });
  }
});

// $("#actualizarComponente").click(function () {
//   if (
//     $("#udnEditar").val() == 0 ||
//     $("#areasEditar").val() == 0 ||
//     $("#nombreCompEditar").val().length < 1 ||
//     $("#marcaEditar").val().length < 1 ||
//     $("#modeloEditar").val().length < 1 ||
//     $("#categoriaEditar").val() == 0 ||
//     $("#precioEditar").val().length < 1 ||
//     $("#condicionEditar").val().length < 1
//   ) {
//     Swal.fire({
//       position: "center",
//       icon: "error",
//       title: "Error, Falta Llenar Campos Obligatorios",
//       showConfirmButton: false,
//       timer: 2000,
//     });
//   } else {
//     let datos = new FormData();

//     datos.append("opc", 8);
//     datos.append("tipo", $("#tipoEditar").val());
//     datos.append("marca", $("#marcaEditar").val());
//     datos.append("modelo", $("#modeloEditar").val());
//     datos.append("voltaje", $("#voltajeEditar").val());
//     datos.append("velocidad", $("#velocidadEditar").val());
//     datos.append("contactos", $("#contactosEditar").val());
//     datos.append("entrada", $("#entradasEditar").val());
//     datos.append("salida", $("#salidasEditar").val());
//     datos.append("amperaje", $("#amperajeEditar").val());
//     datos.append("costo", $("#precioEditar").val());
//     datos.append("condicion", $("#condicionEditar").val());
//     datos.append("capacidad", $("#capacidadEditar").val());
//     datos.append("resolucion", $("#resolucionEditar").val());
//     datos.append("tamaño", $("#tamañoEditar").val());
//     datos.append("aplicacion", $("#appEditar").val());

//     $.ajax({
//       type: "POST",
//       url: "../controlador/ctrl_Componentes.php",
//       contentType: false,
//       data: datos,
//       processData: false,
//       cache: false,
//       success: function (respuesta) {
//         datos.append("opc", 6);

//         datos.append("nombre", $("#nombreComp").val());
//         datos.append("id_Caracteristica", parseInt(respuesta));
//         datos.append("id_TipoComponente", $("#categoria").val());
//         datos.append("id_AreaUDN", $("#areas").val());

//         $.ajax({
//           type: "POST",
//           url: "../controlador/ctrl_Componentes.php",
//           contentType: false,
//           data: datos,
//           processData: false,
//           cache: false,
//           success: function (respuesta) {
//             Swal.fire({
//               position: "center",
//               icon: "success",
//               title: "Agregado Con Exito",
//               showConfirmButton: false,
//               timer: 1500,
//             });

//             $("#modalRegistro").modal("hide");
//           },
//           error: function () {
//             Swal.fire({
//               position: "center",
//               icon: "error",
//               title: "Error, Datos no Almancenados",
//               showConfirmButton: false,
//               timer: 2000,
//             });
//           },
//         });
//       },
//       error: function () {
//         Swal.fire({
//           position: "center",
//           icon: "error",
//           title: "Error, Datos no Almancenados",
//           showConfirmButton: false,
//           timer: 2000,
//         });
//       },
//     });
//   }
// });
