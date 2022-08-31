<?php
include_once("_CRUD.php");

Class Dashboard extends CRUD {
    function mostrarUDNDashboard () {
        $query = "SELECT * FROM udn WHERE Stado = 1";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }

    function mostrarCountUDN ($ID_UDN) {
        $query = "
        SELECT
        Count(*) AS CountEquipos
        FROM
        rfwsmqex_gvsl_sys_almacen.equipo
        INNER JOIN rfwsmqex_gvsl_sys_almacen.area_udn ON rfwsmqex_gvsl_sys_almacen.equipo.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        WHERE
        rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN ='" . $ID_UDN . "' ";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }

    function mostrarCountComponentes ($ID_UDN) {
        $query = "
        SELECT
        Count(*) AS CountPeri
        FROM
        rfwsmqex_gvsl_sys_almacen.area_udn
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        INNER JOIN rfwsmqex_gvsl_sys_almacen.componentes ON rfwsmqex_gvsl_sys_almacen.componentes.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
        WHERE
        rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN ='" . $ID_UDN . "' ";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }
    
}
?>