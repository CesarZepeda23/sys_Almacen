<?php
include_once("_CRUD.php");

Class Equipos extends CRUD {

    function mostrarEquipos () {
        $query = "SELECT
        rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn,
        rfwsmqex_gvsl_sys_almacen.areas.nombre,
        rfwsmqex_gvsl.udn.UDN,
        rfwsmqex_gvsl_sys_almacen.equipo.idEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.fechaAlta,
        rfwsmqex_gvsl_sys_almacen.equipo.numeroEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.responsableEquipo
        FROM
        rfwsmqex_gvsl_sys_almacen.area_udn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        INNER JOIN rfwsmqex_gvsl_sys_almacen.equipo ON rfwsmqex_gvsl_sys_almacen.equipo.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }

    function ultimoNumeroEquipo() {
        $query = "SELECT MAX(idEquipo) AS id FROM equipo";
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

    function mostrarComponentesCheck () {
        $query = "SELECT 
        * FROM componentes AS com  
        JOIN caracteristicas AS car 
        ON com.idComponente = car.idCaracteristica AND com.id_Equipo IS NULL";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }
}

?>