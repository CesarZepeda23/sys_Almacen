<?php
include_once("_CRUD.php");

Class Areas extends CRUD {
    function mostrarAreaUDN () {
        $query = "SELECT * FROM area_udn ORDER BY idAreaUdn ASC";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }

    function mostrarUDN () {
        $query = "SELECT * FROM udn";
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