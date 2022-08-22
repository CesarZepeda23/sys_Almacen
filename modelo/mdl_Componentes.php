<?php
include_once("_CRUD.php");

Class Equipos extends CRUD {
    function mostrarEquipos () {
        $query = "SELECT * FROM componentes ORDER BY idComponente ASC";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }
}
?>