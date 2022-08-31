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
    case 2:
            $ID_UDN = $_POST['ID_UDN'];
            $sql = $obj->mostrarCountUDN($ID_UDN);
            foreach ($sql as $row) {
            $infoUDN = array(
                'CountEquipos' => $row['CountEquipos'],
                                    );
                                }; 
            echo json_encode($infoUDN);
            break;
    case 3:
                $ID_UDN = $_POST['ID_UDN'];
                $sql = $obj->mostrarCountUDN($ID_UDN);
                foreach ($sql as $row) {
                $infoUDN = array(
                    'CountAreas' => $row['CountAreas'],
                                        );
                                    }; 
                echo json_encode($infoUDN);
                break;
    case 4:
                $ID_UDN = $_POST['ID_UDN'];
                $sql = $obj->mostrarCountComponentes($ID_UDN);
                foreach ($sql as $row) {
                $infoPeri = array(
                    'CountPeri' => $row['CountPeri'],
                                        );
                                    }; 
                echo json_encode($infoPeri);
                break;
}   
?>