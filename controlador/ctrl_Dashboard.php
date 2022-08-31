<?php
include_once("../modelo/mdl_Dashboard.php");
$obj = new Dashboard;

$opc    = $_POST['opc'];

switch($opc){
    case 1://MOSTRAR UDN
        $tablaindexUDN = null;
        $sql = $obj -> mostrarUDNDashboard(); 
        foreach($sql as $row){
            $tablaindexUDN .= '
                <tr>
                    <td>' . $row['idUDN'] . ' </td>
                    <td>' . $row['UDN'] . ' </td>
                    <td>
                    <button type="button" id="btnVerUDN" value="' . $row['idUDN'] . '" class="btn btn-square btn-info m-1"><i class="fa-solid fa-eye"></i></button>
                    </td>
                </tr>
            ';  
        
        }
        echo $tablaindexUDN;
        break;
}   
?>