<?php
include_once("_CRUD.php");

Class Equipos extends CRUD {

    function mostrarEquipos () {
        $query = "SELECT
        rfwsmqex_gvsl.udn.UDN,
        rfwsmqex_gvsl_sys_almacen.equipo.fechaAlta,
        rfwsmqex_gvsl_sys_almacen.areas.nombre,
        rfwsmqex_gvsl_sys_almacen.equipo.numeroEquipo,
        rfwsmqex_gvsl_sys_almacen.equipo.responsableEquipo
        FROM
        rfwsmqex_gvsl.udn ,
        rfwsmqex_gvsl_sys_almacen.equipo ,
        rfwsmqex_gvsl_sys_almacen.areas";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }
}

?>