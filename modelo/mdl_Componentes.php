<?php
include_once("_CRUD.php");

Class Componentes extends CRUD {
    function mostrarComponentes () {
        $query = "SELECT * FROM componentes AS com JOIN caracteristicas AS car ON com.idComponente = car.idCaracteristica";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }
}
?>