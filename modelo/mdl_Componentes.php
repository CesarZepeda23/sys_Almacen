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
}


// $query = "SELECT *
//         FROM rfwsmqex_gvsl.udn AS udn 
//         INNER JOIN rfwsmqex_gvsl_sys_almacen.area_udn AS syscomareaudn
//         ON udn.idUDN = syscomareaudn.id_UDN AND udn.Stado = 1
//         INNER JOIN rfwsmqex_gvsl_sys_almacen.areas AS areas 
//         ON syscomareaudn.id_Area = areas.idArea
//         INNER JOIN  rfwsmqex_gvsl_sys_almacen.componentes AS comp
//         ON syscomareaudn.idAreaUDN = comp.id_AreaUDN
//         INNER JOIN rfwsmqex_gvsl_sys_almacen.caracteristicas AS caract
//         ON comp.idComponente = caract.idCaracteristica AND caract.estado = 1";