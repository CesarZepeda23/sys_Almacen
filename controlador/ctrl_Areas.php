<?php
include_once("../modelo/mdl_Areas.php");
$obj = new Areas;

$opc    = $_POST['opc'];

switch($opc){
    case 1:
        $tablaAreaUDN = null;
        $sql = $obj -> mostrarAreaUDN(); 
        foreach($sql as $row){
            $tablasAreaUDN = '
            <tr>
                <td>' . $row['idAreaUdn'] . ' </td>
                <td>' . $row['id_Area'] . ' </td>
                <td>' . $row['id_UDN'] . ' </td>
            </tr>
            ';  
            echo $tablaAreaUDN;
        }
        break;

        case 2:
            $tablaUDN = null;
            $sql = $obj -> mostrarUDN(); 
            foreach($sql as $row){
                $tablasUDN = '
                <tr>
                    <td>' . $row['idUDN'] . ' </td>
                    <td>' . $row['UDN'] . ' </td>
                    <td>' . $row['Abreviatura'] . ' </td>
                </tr>
                ';  
                echo $tablaUDN;
            }
            break;

        case 3:
            $tablaArea = null;
            $sql = $obj -> mostrarArea(); 
            foreach($sql as $row){
                $tablasUDN = '
                <tr>
                    <td>' . $row['idArea'] . ' </td>
                    <td>' . $row['nombre'] . ' </td>
                    <td>' . $row['abreviatura'] . ' </td>
                </tr>
                ';  
                echo $tablaUDN;
            break;
}   
?>