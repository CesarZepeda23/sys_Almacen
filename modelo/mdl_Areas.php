<?php
include_once("_CRUD.php");

Class Areas extends CRUD {

    function mostrarUDN () {
        $query = "SELECT * FROM udn WHERE Stado = 1";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }

    function mostrarArea () {
        $query = "SELECT * FROM areas";
        $sql = $this->_Select($query,null,"2");
        return $sql;
    }

    function insertarAreaUDN($array) {
        $query = "INSERT INTO area_udn (id_Area,id_UDN) VALUES (?,?)";
        $this->_DIU($query, $array, "2");
    }

    function insertarArea($array) {
        $query = "INSERT INTO areas (nombre,abreviatura) VALUES (?,?)";
        $this->_DIU($query, $array, "2");
    }

}
?>