<?php
include_once("_CRUD.php");

Class Equipos extends CRUD {
    function mostrarEquipos () {
        $query = "SELECT
        rfwsmqex_gvsl.udn.UDN,
        rfwsmqex_gvsl_sys_almacen.areas.nombre,
        rfwsmqex_gvsl_sys_almacen.equipo.fechaAlta,
        rfwsmqex_gvsl_sys_almacen.equipo.responsableEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.numeroEquipo
        FROM
        rfwsmqex_gvsl.udn ,
        rfwsmqex_gvsl_sys_almacen.areas ,
        rfwsmqex_gvsl_sys_almacen.equipo";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }
}
?>