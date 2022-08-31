<?php
include_once("_CRUD.php");

Class Equipos extends CRUD {

    function mostrarEquipos () {
        $query = "SELECT
        rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn,
        rfwsmqex_gvsl_sys_almacen.areas.nombre,
        rfwsmqex_gvsl.udn.UDN,
        rfwsmqex_gvsl_sys_almacen.equipo.numeroEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.responsableEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.fechaAlta,
        rfwsmqex_gvsl.udn.idUDN,
        rfwsmqex_gvsl_sys_almacen.equipo.idEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.estado
        FROM
        rfwsmqex_gvsl_sys_almacen.area_udn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        INNER JOIN rfwsmqex_gvsl_sys_almacen.equipo ON rfwsmqex_gvsl_sys_almacen.equipo.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
        WHERE rfwsmqex_gvsl_sys_almacen.equipo.estado = 1";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }

    function mostrarEquiposEliminados () {
        $query = "SELECT
        rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn,
        rfwsmqex_gvsl_sys_almacen.areas.nombre,
        rfwsmqex_gvsl.udn.UDN,
        rfwsmqex_gvsl_sys_almacen.equipo.numeroEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.responsableEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.fechaAlta,
        rfwsmqex_gvsl.udn.idUDN,
        rfwsmqex_gvsl_sys_almacen.equipo.idEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.estado
        FROM
        rfwsmqex_gvsl_sys_almacen.area_udn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        INNER JOIN rfwsmqex_gvsl_sys_almacen.equipo ON rfwsmqex_gvsl_sys_almacen.equipo.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
        WHERE rfwsmqex_gvsl_sys_almacen.equipo.estado = 0";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }

    function ultimoNumeroEquipo() {
        $query = "SELECT (numeroEquipo) AS numeroEquipo FROM equipo";
        $sql = $this->_Select($query, null, "2");
        foreach ($sql as $row);
        return  $row[0];
    }

    function UDNS() {
        $query = "SELECT * FROM udn WHERE Stado = 1";
        $sql = $this->_Select($query, null, "1");
        return $sql;
    }

    function mostrarAreaUDN($idUDN) {
        $query = "SELECT * FROM area_udn 
        INNER JOIN  areas ON area_udn.id_UDN = '" . $idUDN . "' AND  area_udn.id_Area = areas.idArea";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function insertarEquipo($array) {
        $query = "INSERT INTO equipo
        (fechaAlta,numeroEquipo,responsableEquipo,estado,sistemaOperativo,id_AreaUDN,condicion) 
        VALUES (?,?,?,?,?,?,?)";
        $this->_DIU($query, $array, "2");
    }

    function mostrarInfoEquipos($id_Equipos) {
        $query = "SELECT
        rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn,
        rfwsmqex_gvsl_sys_almacen.areas.nombre,
        rfwsmqex_gvsl.udn.UDN,
        rfwsmqex_gvsl_sys_almacen.equipo.numeroEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.responsableEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.fechaAlta,
        rfwsmqex_gvsl_sys_almacen.equipo.condicion,
        rfwsmqex_gvsl.udn.idUDN,
        rfwsmqex_gvsl_sys_almacen.equipo.idEquipo
        FROM
        rfwsmqex_gvsl_sys_almacen.area_udn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        INNER JOIN rfwsmqex_gvsl_sys_almacen.equipo ON rfwsmqex_gvsl_sys_almacen.equipo.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
		AND rfwsmqex_gvsl_sys_almacen.equipo.idEquipo = '" . $id_Equipos . "' ";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function verEquipos($id_Equipos) {
        $query = "SELECT
        rfwsmqex_gvsl_sys_almacen.areas.nombre,
        rfwsmqex_gvsl.udn.UDN,
        rfwsmqex_gvsl_sys_almacen.equipo.fechaAlta,
        rfwsmqex_gvsl_sys_almacen.equipo.numeroEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.responsableEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.condicion,
        rfwsmqex_gvsl_sys_almacen.equipo.sistemaOperativo,
        rfwsmqex_gvsl_sys_almacen.equipo.idEquipo
        FROM
        rfwsmqex_gvsl_sys_almacen.equipo
        INNER JOIN rfwsmqex_gvsl_sys_almacen.area_udn ON rfwsmqex_gvsl_sys_almacen.equipo.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        WHERE
        rfwsmqex_gvsl_sys_almacen.equipo.idEquipo ='" . $id_Equipos . "' ";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }
    function verEquiposYComponentes($id_Equipos) {
        $query = "SELECT
        equipo.fechaAlta,
        equipo.idEquipo,
        componentes.id_Equipo,
        componentes.nombre,
        componentes.idComponente,
        caracteristicas.idCaracteristica,
        caracteristicas.tipo,
        caracteristicas.marca,
        caracteristicas.modelo,
        caracteristicas.voltaje,
        caracteristicas.velocidad,
        caracteristicas.contactos,
        caracteristicas.entrada,
        caracteristicas.salida,
        caracteristicas.amperaje,
        caracteristicas.estado,
        caracteristicas.costo,
        caracteristicas.condicion,
        caracteristicas.capacidad,
        caracteristicas.resolucion,
        caracteristicas.`tamaño`,
        caracteristicas.aplicacion
        FROM
        equipo
        INNER JOIN componentes ON componentes.id_Equipo = equipo.idEquipo
        INNER JOIN caracteristicas ON componentes.id_Caracteristica = caracteristicas.idCaracteristica
        WHERE equipo.idEquipo ='" . $id_Equipos . "' ";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }
    function eliminarEquipo($id_Equipos)
    {
        $query = "UPDATE equipo SET estado='0' 
        WHERE idEquipo ='" . $id_Equipos . "'";
        $this->_DIU($query, Null, "2");
    }

    function regresarEquipo($id_Equipos)
    {
        $query = "UPDATE equipo SET estado='1' 
        WHERE idEquipo ='" . $id_Equipos . "'";
        $this->_DIU($query, Null, "2");
    }

    function editarComponente($idEquipo,$id_Componente)
    {
        $query = "UPDATE componentes SET id_Equipo = '" . $idEquipo . "' 
        WHERE idComponente = '" . $id_Componente . "'";
        $this->_DIU($query, Null, "2");
    }
    function componentesEquipo() {
        $query = "SELECT
        rfwsmqex_gvsl_sys_almacen.componentes.nombre,
        rfwsmqex_gvsl_sys_almacen.componentes.idComponente,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.marca,
        rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn,
        rfwsmqex_gvsl_sys_almacen.areas.nombre AS nomArea,
        rfwsmqex_gvsl.udn.UDN
        FROM
        rfwsmqex_gvsl_sys_almacen.componentes
        INNER JOIN rfwsmqex_gvsl_sys_almacen.caracteristicas ON rfwsmqex_gvsl_sys_almacen.componentes.id_Caracteristica = rfwsmqex_gvsl_sys_almacen.caracteristicas.idCaracteristica
        INNER JOIN rfwsmqex_gvsl_sys_almacen.area_udn ON rfwsmqex_gvsl_sys_almacen.componentes.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        WHERE
        rfwsmqex_gvsl_sys_almacen.componentes.id_Equipo IS NULL	";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

}

?>
			