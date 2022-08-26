$("#btnAgregarEquipos").click(function () { //MMODAL REGISTRO
  $("#modalRegistroEquipos").modal("show");
});

$("#btnEditarEquipos").click(function () {//MODAL EDITAR
  $("#modalEditarEquipos").modal("show");
});

$(function mostrar() {//MOSTRAR TABLA EQUIPOS
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

$(function ultimoNumeroEquipo() {//MOSTRAR ULTIMO NUMERO DE EQUIPO
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
        $("#numeroEquipo").val(parseInt(res));
      },
    });
  });

$(function () {//SELECT UDN
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

$("#salectUDN").change(function () {//SELECT AREAS
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

 $("#btnRegistrarEquipo").click(function () {//REGISTRO
    let datos = new FormData();
    datos.append("opc", 5);
    datos.append("fechaAlta", $("#fechaAlta").val());
    datos.append("numeroEquipo", $("#numeroEquipo").val());
    datos.append("responsableEquipo", $("#responsableEquipo").val());
    datos.append("estado", $("#estado").val());
    datos.append("sistemaOperativo", $("#sistemaOperativo").val());
    datos.append("id_AreaUDN", $("#salectAreaUDN").val());
    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Equipos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Equipo Agregado Con Exito',
          showConfirmButton: false,
          timer: 1500
        });
        $("#modalRegistroEquipos").modal("hide"); 
      },
    });
  }); 