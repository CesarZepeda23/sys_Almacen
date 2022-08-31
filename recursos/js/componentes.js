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

function changeUDNArea(idArea, idUDN, num) {
  let datos = new FormData();
  datos.append("opc", 2);
  datos.append("idUDN", $(idUDN).val());

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
}

function ocultarInputVacios(idInput, idDiv, idSwitch) {
  if ($(idInput).val().length < 1) {
    $(idDiv).hide();
    $(idSwitch).prop("checked", false);
  } else {
    $(idSwitch).prop("checked", true);
    $(idDiv).show();
  }
}

function eliminarComponente(idCaracteristica) {
  let datos = new FormData();
  datos.append("opc", 7);
  datos.append("idCaracteristica", idCaracteristica);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Componentes.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function () {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Componente Eliminado Con Exito",
        showConfirmButton: false,
        timer: 1500,
      });
      mostrarComponentes();
    },
    error: function () {
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Error al Eliminar el Componente",
        showConfirmButton: false,
        timer: 1500,
      });
    },
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

  validarSwitch(
    "#voltajeSwitchEditar",
    "#voltajeDivEditar",
    "#voltajeEditar",
    ""
  );
  validarSwitch(
    "#velocidadSwitchtEditar",
    "#velocidadDivEditar",
    "#velocidadEditar",
    ""
  );
  validarSwitch(
    "#contactosSwitchtEditar",
    "#contactosDivEditar",
    "#contactosEditar",
    ""
  );
  validarSwitch(
    "#entradasSwitchtEditar",
    "#entradasDivEditar",
    "#entradasEditar",
    ""
  );
  validarSwitch(
    "#salidasSwitchtEditar",
    "#salidasDivEditar",
    "#salidasEditar",
    ""
  );
  validarSwitch(
    "#amperajeSwitchtEditar",
    "#amperajeDivEditar",
    "#amperajeEditar",
    ""
  );
  validarSwitch(
    "#capacidadSwitchtEditar",
    "#capacidadDivEditar",
    "#capacidadEditar",
    ""
  );
  validarSwitch(
    "#resolucionSwitchtEditar",
    "#resolucionDivEditar",
    "#resolucionEditar",
    ""
  );
  validarSwitch(
    "#tamañoSwitchtEditar",
    "#tamañoDivEditar",
    "#tamañoEditar",
    ""
  );
  validarSwitch("#appSwitchtEditar", "#appDivEditar", "", "appEditar");
});

$("#udn").change(function () {
  changeUDNArea("#areas", "#udn");
});

$("#udnEditar").change(function () {
  changeUDNArea("#areasEditar", "#udnEditar");
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

let idComponente;
let idCaracteristica;
$("tbody").on("click", "button", function () {
  if ($(this).attr("id") == "edit") {
    idComponente = parseInt($(this).val());
    $("#modalEditar").modal("show");

    selectUDN("#udnEditar");
    selectTipoComponentes("#categoriaEditar", "");

    let datos = new FormData();
    datos.append("opc", 6);
    datos.append("id_componente", parseInt($(this).val()));

    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Componentes.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      dataType: "JSON",
      success: function (data) {
        idCaracteristica = data["id_Caracteristica"];

        $("#udnEditar option[value=" + data["id_UDN"] + "]").attr(
          "selected",
          true
        );

        changeUDNArea("#areasEditar", "#udnEditar");

        $(
          "#areasEditar option[value =" + parseInt(data["idAreaUdn"]) + "]"
        ).attr("selected", true);

        $("#nombreCompEditar").val(data["nombre"]);
        $("#marcaEditar").val(data["marca"]);
        $("#modeloEditar").val(data["modelo"]);
        $("#tipoEditar").val(data["tipo"]);

        $(
          "#categoriaEditar option[value=" + data["id_TipoComponente"] + "]"
        ).attr("selected", true);

        $("#precioEditar").val(data["costo"]);
        $("#condicionEditar").val(data["condicion"]);
        $("#voltajeEditar").val(data["voltaje"]);
        $("#velocidadEditar").val(data["velocidad"]);
        $("#contactosEditar").val(data["contactos"]);
        $("#entradasEditar").val(data["entrada"]);
        $("#salidasEditar").val(data["salida"]);
        $("#amperajeEditar").val(data["amperaje"]);
        $("#capacidadEditar").val(data["capacidad"]);
        $("#resolucionEditar").val(data["resolucion"]);
        $("#tamañoEditar").val(data["tamaño"]);

        $("#appEditar option[value=" + data["aplicacion"] + "]").attr(
          "selected",
          true
        );

        ocultarInputVacios(
          "#voltajeEditar",
          "#voltajeDivEditar",
          "#voltajeSwitchEditar"
        );
        ocultarInputVacios(
          "#velocidadEditar",
          "#velocidadDivEditar",
          "#velocidadSwitchtEditar"
        );

        ocultarInputVacios(
          "#contactosEditar",
          "#contactosDivEditar",
          "#contactosSwitchtEditar"
        );

        ocultarInputVacios(
          "#entradasEditar",
          "#entradasDivEditar",
          "#entradasSwitchtEditar"
        );

        ocultarInputVacios(
          "#salidasEditar",
          "#salidasDivEditar",
          "#salidasSwitchtEditar"
        );

        ocultarInputVacios(
          "#amperajeEditar",
          "#amperajeDivEditar",
          "#amperajeSwitchtEditar"
        );

        ocultarInputVacios(
          "#capacidadEditar",
          "#capacidadDivEditar",
          "#capacidadSwitchtEditar"
        );

        ocultarInputVacios(
          "#resolucionEditar",
          "#resolucionDivEditar",
          "#resolucionSwitchtEditar"
        );

        ocultarInputVacios(
          "#tamañoEditar",
          "#tamañoDivEditar",
          "#tamañoSwitchtEditar"
        );

        ocultarInputVacios(
          "#tamañoEditar",
          "#tamañoDivEditar",
          "#tamañoSwitchtEditar"
        );

        if (data["aplicacion"] == 0) {
          $("#appDivEditar").hide();
          $("#appSwitchtEditar").prop("checked", false);
        } else {
          $("#appSwitchtEditar").prop("checked", true);
          $("#appEditar option[value=" + data["aplicacion"] + "]").attr(
            "selected",
            true
          );
        }
      },
    });
  } else if ($(this).attr("id") == "print") {
    $("#modalQr").modal("show");
    let datos = new FormData();

    datos.append("opc", 10);
    datos.append("id_componente", parseInt($(this).val()));

    $.ajax({
      type: "POST",
    url: "../controlador/ctrl_Componentes.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#QR").html(respuesta);

    },
    });
  } else if ($(this).attr("id") == "delete") {
    let datos = new FormData();

    datos.append("opc", 6);
    datos.append("id_componente", parseInt($(this).val()));

    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Componentes.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      dataType: "JSON",
      success: function (data) {
        eliminarComponente(parseInt(data["id_Caracteristica"]));
      },
    });
  } else if ($(this).attr("id") == "info") {
    let id_componente = parseInt($(this).val());
    $("#modalInfo").modal("show");
    $(function () {
      let datos = new FormData();
      datos.append("opc", 8);
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
          $("#areasInfo").html(data["nomArea"]);
          $("#udnInfo").html(data["UDN"]);
          $("#nomPerifericoInfo").html(data["nombre"]);
          $("#tipoInfo").html(data["tipo"]);
          $("#categoriaInfo").html(data["nomTipo"]);
          $("#marcaInfo").html(data["marca"]);
          $("#modeloInfo").html(data["modelo"]);
          $("#voltajeInfo").html(data["voltaje"]);
          $("#velocidadInfo").html(data["velocidad"]);
          $("#contactosInfo").html(data["contactos"]);
          $("#entradasInfo").html(data["entrada"]);
          $("#salidaInfo").html(data["salida"]);
          $("#amperajeInfo").html(data["amperaje"]);
          $("#precioInfo").html(data["costo"]);
          $("#condicionInfo").html(data["condicion"]);
          $("#capacidadInfo").html(data["capacidad"]);
          $("#resolucionInfo").html(data["resolucion"]);
          $("#tamañoInfo").html(data["tamaño"]);
          $("#aplicacionInfo").html(data["aplicacion"]);
        },
      });
    });
  }
});

$("#actualizarComponente").click(function () {
  if (
    $("#udnEditar").val() == 0 ||
    $("#areasEditar").val() == 0 ||
    $("#nombreCompEditar").val().length < 1 ||
    $("#marcaEditar").val().length < 1 ||
    $("#modeloEditar").val().length < 1 ||
    $("#categoriaEditar").val() == 0 ||
    $("#precioEditar").val().length < 1 ||
    $("#condicionEditar").val().length < 1
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

    datos.append("opc", 9);
    datos.append("idComponente", idComponente);
    datos.append("idCaracteristica", idCaracteristica);

    datos.append("nombre", $("#nombreCompEditar").val());
    datos.append("id_TipoComponente", $("#categoriaEditar").val());
    datos.append("id_AreaUDN", $("#areasEditar").val());

    datos.append("tipo", $("#tipoEditar").val());
    datos.append("marca", $("#marcaEditar").val());
    datos.append("modelo", $("#modeloEditar").val());
    datos.append("voltaje", $("#voltajeEditar").val());
    datos.append("velocidad", $("#velocidadEditar").val());
    datos.append("contactos", $("#contactosEditar").val());
    datos.append("entrada", $("#entradasEditar").val());
    datos.append("salida", $("#salidasEditar").val());
    datos.append("amperaje", $("#amperajeEditar").val());
    datos.append("costo", $("#precioEditar").val());
    datos.append("condicion", $("#condicionEditar").val());
    datos.append("capacidad", $("#capacidadEditar").val());
    datos.append("resolucion", $("#resolucionEditar").val());
    datos.append("tamaño", $("#tamañoEditar").val());
    datos.append("aplicacion", $("#appEditar").val());

    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Componentes.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function () {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Datos Actualizados Con Exito",
          showConfirmButton: false,
          timer: 1500,
        });
        $("#modalEditar").modal("hide");
        mostrarComponentes();
      },
      error: function () {
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Error al Actualizar los Datos",
          showConfirmButton: false,
          timer: 1500,
        });
      },
    });
  }
});
