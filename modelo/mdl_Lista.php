<?php
include_once('_CRUD.php');

class Lista extends CRUD
{
    function fechaActual()
    {
        $query = "SELECT DATE_FORMAT(NOW(),'%d/%m/%Y') ";
        $sql = $this->_Select($query, null, "1");
        foreach ($sql as $row);
        return  $row[0];
    }
}
