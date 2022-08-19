<?php
include_once('../modelo/modelo.php');
$obj = new ClaseModulo;

$opc    = $_POST['opc'];

switch($opc){
    case 1://FUNCION DETERMINADA POR LA VARIABLE DE OPCION
        echo "FUNCION DETERMINADA POR LA VARIABLE";
            /* $sql = $obj->nombreFuncion1();
            $obj->nombreFuncion2($array); */
        break;
    case 2:
            /* echo "RETORNO DE VARIBLE AL JS";

            $ARRAY = ARRAY("VARIABLE"=>'VARIABLE');

            echo json_encode($ARRAY); */
        break;
}
?>