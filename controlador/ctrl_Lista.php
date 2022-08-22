<?php
include_once('../modelo/mdl_Lista.php');
$obj = new Lista;

$opc = $_POST['opc'];

switch ($opc) {
    case 1:
        echo $obj->fechaActual();
        break;
}
