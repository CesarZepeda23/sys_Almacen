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
}

?>