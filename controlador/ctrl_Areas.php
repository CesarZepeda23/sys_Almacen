<?php
include_once("../modelo/mdl_Areas.php");
$obj = new Areas;

$opc    = $_POST['opc'];

switch($opc){
    case 1:
        $tablasAreaUDN = null;
        $sql = $obj -> mostrarAreaUDN(); 
        foreach($sql as $row){
            $tablasAreaUDN .= '
            <tr>
                <td>' . $row['idAreaUdn'] . ' </td>
                <td>' . $row['id_Area'] . ' </td>
                <td>' . $row['id_UDN'] . ' </td>
            </tr>
            ';  
        }
        echo $tablasAreaUDN;
        break;

        case 2:
            $tablasUDN = null;
            $sql = $obj -> mostrarUDN(); 
            foreach($sql as $row){
                $tablasUDN .= '
                <tr>
                    <td>' . $row['idUDN'] . ' </td>
                    <td>' . $row['UDN'] . ' </td>
                    <td>' . $row['Abreviatura'] . ' </td>
                </tr>
                ';  
            }
            echo $tablasUDN;
            break;

        case 3:
           /*  $tablaArea = null;
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
            } */
            break;
}   

?>