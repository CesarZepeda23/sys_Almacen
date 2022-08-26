<?php
include_once("_CRUD.php");

Class Areas extends CRUD {

    function mostrarAreaUDN () {
        $query = "SELECT
        rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn,
        rfwsmqex_gvsl_sys_almacen.areas.nombre,
        rfwsmqex_gvsl.udn.UDN
        FROM
        rfwsmqex_gvsl_sys_almacen.area_udn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }

    function mostrarUDN () {
        $query = "SELECT * FROM udn WHERE Stado = 1";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }

    function mostrarArea () {
        $query = "SELECT * FROM areas";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }

}
?>