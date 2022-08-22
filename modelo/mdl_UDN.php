<?php
include_once("_CRUD.php");

Class UDN extends CRUD {
    function mostrarUDN () {
        $query = "SELECT * FROM udn ORDER BY idUDN ASC";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }
}
?>