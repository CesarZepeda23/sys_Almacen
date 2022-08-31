<?php
include_once("_CRUD.php");

Class Dashboard extends CRUD {
    function mostrarUDNDashboard () {
        $query = "SELECT * FROM udn WHERE Stado = 1";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }
    
}
?>