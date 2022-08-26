<?php
include_once("_CRUD.php");

class Componentes extends CRUD
{
    function mostrarUDN()
    {
        $query = "SELECT * FROM udn WHERE Stado = 1";
        $sql = $this->_Select($query, null, "1");
        return $sql;
    }

    function mostrarAreaUDN($idUDN)
    {
        $query = "SELECT * FROM area_udn 
        INNER JOIN  areas ON area_udn.id_UDN = '" . $idUDN . "' AND  area_udn.id_Area = areas.idArea";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function mostrarCategoria()
    {
        $query = "SELECT * FROM tipo_componente";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function mostrarComponentes()
    {
        $query = "SELECT
        rfwsmqex_gvsl_sys_almacen.componentes.idComponente,
        rfwsmqex_gvsl_sys_almacen.componentes.nombre AS comNom,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.marca,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.modelo,
        rfwsmqex_gvsl.udn.UDN,
        rfwsmqex_gvsl_sys_almacen.areas.nombre,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.condicion,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.costo
        FROM
        rfwsmqex_gvsl_sys_almacen.area_udn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        INNER JOIN rfwsmqex_gvsl_sys_almacen.componentes ON rfwsmqex_gvsl_sys_almacen.componentes.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.caracteristicas ON rfwsmqex_gvsl_sys_almacen.componentes.id_Caracteristica = rfwsmqex_gvsl_sys_almacen.caracteristicas.idCaracteristica";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function insertarComponente($array)
    {
        $query = "INSERT INTO componentes
        (nombre, id_Caracteristica, id_TipoComponente, id_AreaUDN) 
        VALUES (?,?,?,?)";
        $this->_DIU($query, $array, "2");
    }
}
