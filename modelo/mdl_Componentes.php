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
        INNER JOIN  areas ON area_udn.id_UDN = '" . $idUDN . "' 
        AND  area_udn.id_Area = areas.idArea";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function mostrarTipoComponente()
    {
        $query = "SELECT * FROM tipo_componente";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function mostrarComponentes($id_tipo)
    {
        $extra = '';
        if (isset($id_tipo)) {
            $extra = " AND rfwsmqex_gvsl_sys_almacen.componentes.id_TipoComponente = '" . $id_tipo . "'  ";
        }

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
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas 
        ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn 
        ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        INNER JOIN rfwsmqex_gvsl_sys_almacen.componentes 
        ON rfwsmqex_gvsl_sys_almacen.componentes.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.caracteristicas 
        ON rfwsmqex_gvsl_sys_almacen.componentes.id_Caracteristica = rfwsmqex_gvsl_sys_almacen.caracteristicas.idCaracteristica
        AND rfwsmqex_gvsl_sys_almacen.caracteristicas.estado = '1'" . $extra . "
        ORDER BY rfwsmqex_gvsl_sys_almacen.componentes.idComponente ASC";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function insertarCaracteristicas($array)
    {
        $query = "INSERT INTO caracteristicas
        (tipo, marca, modelo, voltaje, velocidad, contactos, entrada, salida, 
        amperaje, estado, costo, condicion, capacidad, resolucion, tamaño, aplicacion) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->_DIU($query, $array, "2");
    }

    function insertarComponente($array)
    {
        $query = "INSERT INTO componentes
        (nombre, id_Caracteristica, id_TipoComponente, id_AreaUDN) 
        VALUES (?,?,?,?)";
        $this->_DIU($query, $array, "2");
    }

    function ultimoIDCategoria()
    {
        $query = "SELECT MAX(idCaracteristica) AS id FROM caracteristicas";
        $sql = $this->_Select($query, null, "2");
        foreach ($sql as $row);
        return  $row[0];
    }

    function infoComponente($id_componente)
    {
        $query = "SELECT * FROM
        rfwsmqex_gvsl_sys_almacen.area_udn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.componentes
        ON rfwsmqex_gvsl_sys_almacen.componentes.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn 
        INNER JOIN rfwsmqex_gvsl_sys_almacen.caracteristicas 
        ON rfwsmqex_gvsl_sys_almacen.componentes.id_Caracteristica = rfwsmqex_gvsl_sys_almacen.caracteristicas.idCaracteristica
        AND rfwsmqex_gvsl_sys_almacen.componentes.idComponente =  '" . $id_componente . "' ";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function eliminarComponente($idCaracteristica)
    {
        $query = "UPDATE caracteristicas SET estado='0' 
        WHERE idCaracteristica ='" . $idCaracteristica . "'";
        $this->_DIU($query, Null, "2");
    }

    function InfoComponentesModal($id_componente)
    {
        $query = "SELECT
        rfwsmqex_gvsl_sys_almacen.caracteristicas.idCaracteristica,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.tipo,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.marca,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.modelo,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.voltaje,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.velocidad,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.contactos,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.entrada,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.salida,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.amperaje,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.estado,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.costo,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.condicion,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.capacidad,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.resolucion,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.`tamaño`,
        rfwsmqex_gvsl_sys_almacen.caracteristicas.aplicacion,
        rfwsmqex_gvsl_sys_almacen.componentes.idComponente,
        rfwsmqex_gvsl_sys_almacen.componentes.nombre,
        rfwsmqex_gvsl_sys_almacen.componentes.id_Caracteristica,
        rfwsmqex_gvsl_sys_almacen.componentes.id_TipoComponente,
        rfwsmqex_gvsl_sys_almacen.componentes.id_Equipo,
        rfwsmqex_gvsl_sys_almacen.componentes.id_AreaUDN,
        rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn,
        rfwsmqex_gvsl_sys_almacen.areas.nombre AS nomArea,
        rfwsmqex_gvsl.udn.UDN,
        rfwsmqex_gvsl_sys_almacen.areas.idArea,
        rfwsmqex_gvsl.udn.idUDN,
        rfwsmqex_gvsl_sys_almacen.tipo_componente.idTipoComponente,
        rfwsmqex_gvsl_sys_almacen.tipo_componente.nombre AS nomTipo
        FROM
        rfwsmqex_gvsl_sys_almacen.componentes
        INNER JOIN rfwsmqex_gvsl_sys_almacen.caracteristicas ON rfwsmqex_gvsl_sys_almacen.componentes.id_Caracteristica = rfwsmqex_gvsl_sys_almacen.caracteristicas.idCaracteristica
        INNER JOIN rfwsmqex_gvsl_sys_almacen.area_udn ON rfwsmqex_gvsl_sys_almacen.componentes.id_AreaUDN = rfwsmqex_gvsl_sys_almacen.area_udn.idAreaUdn
        INNER JOIN rfwsmqex_gvsl_sys_almacen.areas ON rfwsmqex_gvsl_sys_almacen.area_udn.id_Area = rfwsmqex_gvsl_sys_almacen.areas.idArea
        INNER JOIN rfwsmqex_gvsl.udn ON rfwsmqex_gvsl_sys_almacen.area_udn.id_UDN = rfwsmqex_gvsl.udn.idUDN
        INNER JOIN rfwsmqex_gvsl_sys_almacen.tipo_componente ON rfwsmqex_gvsl_sys_almacen.componentes.id_TipoComponente = rfwsmqex_gvsl_sys_almacen.tipo_componente.idTipoComponente
        WHERE
        rfwsmqex_gvsl_sys_almacen.componentes.idComponente ='" . $id_componente . "' ";
        $sql = $this->_Select($query, null, "2");
        return $sql;
    }

    function actualizarComponente($array, $idComponente)
    {
        $query = "UPDATE componentes SET 
        nombre = ?,
        id_TipoComponente = ?,
        id_AreaUDN = ? WHERE idComponente = '" . $idComponente . "' ";
        $this->_DIU($query, $array, "2");
    }

    // function actualizarCaracteristicas($array, $idCaracteristica)
    // {
    //     $query = "UPDATE caracteristicas SET
    //     tipo = ?, marca = ?, modelo = ?, voltaje = ?, velocidad = ?, contactos = ?, entrada = ?, salida = ?, 
    //     amperaje = ?, costo = ?, condicion = ?, capacidad = ?, resolucion = ?, tamaño = ?, aplicacion  = ?
    //     WHERE idCaracteristica = '" . $idCaracteristica . "' ";
    //     $this->_DIU($query, $array, "2");
    // }
}
