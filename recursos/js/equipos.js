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
  if (
    $("#fechaAlta").val() < 1 ||
    $("#numeroEquipo").val() < 1 ||
    $("#responsableEquipo").val().length < 1 ||
    $("#estado").val().length < 1 ||
    $("#sistemaOperativo").val().length < 1||
    $("#salectAreaUDN").val() .length== 0 
  ) {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Falta llenar datos obligatorios',
      showConfirmButton: false,
      timer: 1500
    });
  } else {
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
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Agregado Con Exito',
          showConfirmButton: false,
          timer: 1500
        });
        window.location.reload()
      },
    });
  }
  }); 

  $("tbody").on("click", "button", function () {
    if ($(this).attr("id") == "btnEditarEquipos") {
      let id_Equipo = parseInt($(this).val());
      $("#modalEditarEquipos").modal("show"); 

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
            $("#salectUDNEditar").html(respuesta);
          },
        });
      });
    
    $("#salectUDNEditar").change(function () {//SELECT AREAS
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
            $("#salectAreaUDNEditar").html(respuesta);
          },
        });
      });

      $(function mostrarInfoEquipos() {
        let datos = new FormData();
        datos.append("opc", 6);
        datos.append("id_Equipo", id_Equipo);

        $.ajax({
          type: "POST",
          url: "../controlador/ctrl_Equipos.php",
          contentType: false,
          data: datos,
          processData: false,
          cache: false,
          dataType: "JSON",
          success: function (data) {
            $("#fechaAltaEditar").val(data["fechaAlta"]);
            $("#numeroEquipoEditar").val(data["numeroEquipo"]);
            $("#responsableEquipoEditar").val(data["responsableEquipo"]);
            $("#estadoEditar").val(data["estado"]);
            $("#sistemaOperativoEditar").val(data["sistemaOperativo"]);
            $("#salectAreaUDNEditar").val(data["id_AreaUDN"]);
          },
        });
      });
    }else if ($(this).attr("id") == "btnEliminarEquipos") {
          alert("delete");
        }
   });
