<?php
include_once("../modelo/mdl_Equipos.php");
$obj = new Equipos;

$opc    = $_POST['opc'];

switch($opc){
    case 1://MOSTRAR UDN
        $tablaEquipos = null;
        $sql = $obj -> mostrarEquipos(); 
        foreach($sql as $row){
            $tablaEquipos = '
                             <tr>
                             <td>' . $row['UDN'] . ' </td>
                             <td>' . $row['nombre'] . ' </td>
                                <td>' . $row['numeroEquipo'] . ' </td>
                                <td>' . $row['responsableEquipo'] . ' </td>
                                <td>' . $row['fechaAlta'] . ' </td>
                            </tr>
            ';  
            echo $tablaEquipos;
        }
        break;
}   
?>