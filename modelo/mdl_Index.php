<?php
include_once("_CRUD.php");

Class Index extends CRUD {
    function mostrarUDNIndex () {
        $query = "SELECT * FROM udn WHERE Stado = 1";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }
    function mostrarEquiposIndex () {
        $query = "SELECT * FROM equipo ORDER BY idEquipo ASC";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }
    function mostrarComponentesIndex () {
        $query = "SELECT * FROM componentes AS com JOIN caracteristicas AS car ON com.idComponente = car.idCaracteristica";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }
}
?>