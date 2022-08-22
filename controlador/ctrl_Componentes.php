<?php
include_once("../modelo/mdl_UDN.php");
$obj = new UDN;

$opc    = $_POST['opc'];

switch($opc){
    case 1://MOSTRAR UDN
        $tablaindexUDN = null;
        $sql = $obj -> mostrarUDN(); 
        foreach($sql as $row){
            $tablaindexUDN = '
            <tr>
                                <td>' . $row['idComponente'] . ' </td>
                                <td>' . $row['nombre'] . ' </td>
                                <td>' . $row['Abreviatura'] . ' </td>
                                <td>' . $row['colorUDN'] . ' </td>
                            </tr>
            ';  
            echo $tablaindexUDN;
        }
        break;
}   
?>