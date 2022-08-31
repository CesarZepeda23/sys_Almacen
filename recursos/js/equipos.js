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

  $(function mostrar() {//MOSTRAR TABLA EQUIPOS
    let datos = new FormData();
    datos.append("opc", 10);
    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Equipos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        $("#tablasequiposeliminados").html(respuesta);
        
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
    $("#condicion").val().length < 1 ||
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
    datos.append("condicion", $("#condicion").val());
    datos.append("sistemaOperativo", $("#sistemaOperativo").val());
    datos.append("id_AreaUDN", $("#salectAreaUDN").val());
    datos.append("estado", "1");
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
      let id_Equipos = parseInt($(this).val());
      
      $("#modalEditarEquipos").modal("show"); 

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
            $("#salectUDNEditar").html(respuesta);
          },
        });
      });
    
    $("#salectUDNEditar").change(function () {
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
        datos.append("id_Equipos", id_Equipos);

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
            $("#condicionEditar").val(data["condicion"]);
            $("#sistemaOperativoEditar").val(data["sistemaOperativo"]);
            $("#salectAreaUDNEditar").val(data["id_AreaUDN"]);
      
            $("#btnEditarEquipo").click(function () {//REGISTRO
              if (
                $("#fechaAltaEditar").val() < 1 ||
                $("#numeroEquipoEditar").val() < 1 ||
                $("#responsableEquipoEditar").val().length < 1 ||
                $("#condicionEditar").val().length < 1 ||
                $("#sistemaOperativoEditar").val().length < 1||
                $("#salectAreaUDNEditar").val() .length== 0 
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
                datos.append("fechaAlta", $("#fechaAltaEditar").val());
                datos.append("numeroEquipo", $("#numeroEquipoEditar").val());
                datos.append("responsableEquipo", $("#responsableEquipoEditar").val());
                datos.append("condicion", $("#condicionEditar").val());
                datos.append("sistemaOperativo", $("#sistemaOperativoEditar").val());
                datos.append("id_AreaUDN", $("#salectAreaUDNEditar").val());
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
                      title: 'Editado Con Exito',
                      showConfirmButton: false,
                      timer: 1500
                    });
                    window.location.reload()
                  },
                });
              }
              });
            
          },
        });
      });
    }else if ($(this).attr("id") == "btnVerEquipos") {
      let id_Equipos = parseInt($(this).val());
      $("#modalVerEquipos").modal("show");
      $(function () {
        let datos = new FormData();
        datos.append("opc", 7);
        datos.append("id_Equipos", id_Equipos);
        
        $.ajax({
        type: "POST",
        url: "../controlador/ctrl_Equipos.php",
        contentType: false,
        data: datos,
        processData: false,
        cache: false,
        dataType: "JSON",
        success: function (data) {
            $("#fechaAltaVer").html(data["fechaAlta"]);
            $("#udnVer").html(data["UDN"]);
            $("#areaVer").html(data["nombre"]);
            $("#numeroEquipoVer").html(data["numeroEquipo"]);
            $("#responsableEquipoVer").html(data["responsableEquipo"]);
            $("#sistemaOperativoVer").html(data["sistemaOperativo"]);
            $("#estadoVer").html(data["condicion"]);
          },
        });
      });

      $(function () {
        let datos = new FormData();
        datos.append("opc", 8);
        datos.append("id_Equipos", id_Equipos);
        $.ajax({
          type: "POST",
          url: "../controlador/ctrl_Equipos.php",
          contentType: false,
          data: datos,
          processData: false,
          cache: false,
          success: function (respuesta) {
            $("#componenteEquipo").html(respuesta);
          },
        });
      });

        }else if ($(this).attr("id") == "btnEliminarEquipos") {
          let id_Equipos = parseInt($(this).val());
          $(function () {
            let datos = new FormData();
            datos.append("opc", 9);
            datos.append("id_Equipos", id_Equipos);

            $.ajax({
              type: "POST",
              url: "../controlador/ctrl_Equipos.php",
              contentType: false,
              data: datos,
              processData: false,
              cache: false,
              success: function (respuesta) {
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Equipo Eliminado Con Exito",
                  showConfirmButton: false,
                  timer: 1500,
                });
                window.location.reload()
              },
            });
          });

        }else if ($(this).attr("id") == "btnRegresarEquipos") {
          let id_Equipos = parseInt($(this).val());
          $(function () {
            let datos = new FormData();
            datos.append("opc", 11);
            datos.append("id_Equipos", id_Equipos);

            $.ajax({
              type: "POST",
              url: "../controlador/ctrl_Equipos.php",
              contentType: false,
              data: datos,
              processData: false,
              cache: false,
              success: function (respuesta) {
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Equipo Regresado De Nuevo Con Exito",
                  showConfirmButton: false,
                  timer: 1500,
                });
                window.location.reload()
              },
            });
          });
        }
   });
