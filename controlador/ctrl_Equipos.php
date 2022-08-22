<?php
include_once("../modelo/mdl_Equipos.php");
$obj = new Equipos;

$opc    = $_POST['opc'];

switch($opc){
    case 1://MOSTRAR UDN
        $tablaindexEquipos = null;
        $sql = $obj -> mostrarEquipos(); 
        foreach($sql as $row){
            $tablaindexEquipos = '
            <tr>
                                <td>' . $row['idEquipo'] . ' </td>
                                <td>' . $row['fechaAlta'] . ' </td>
                                <td>' . $row['responsableEquipo'] . ' </td>
                                <td>' . $row['id_Componente'] . ' </td>
                            </tr>
            ';  
            echo $tablaindexEquipos;
        }
        break;
}   
?>