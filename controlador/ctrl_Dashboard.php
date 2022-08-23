<?php
include_once("../modelo/mdl_Dashboard.php");
$obj = new Dashboard;

$opc    = $_POST['opc'];

switch($opc){
    case 1://MOSTRAR UDN
        $tablaindexUDN = null;
        $sql = $obj -> mostrarUDNDashboard(); 
        foreach($sql as $row){
            $tablaindexUDN = '
            <tr>
                                <td>' . $row['idUDN'] . ' </td>
                                <td>' . $row['UDN'] . ' </td>
                                <td>' . $row['Abreviatura'] . ' </td>
                                <td>' . $row['colorUDN'] . ' </td>
                            </tr>
            ';  
            echo $tablaindexUDN;
        }
        break;

        case 2://MOSTRAR UDN
            $tablaindexEquipos = null;
            $sql = $obj -> mostrarEquiposDashboard(); 
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

            case 3://MOSTRAR UDN
                $tablaindexComponentes = null;
                $sql = $obj -> mostrarComponentesDashboard(); 
                foreach($sql as $row){
                    $tablaindexComponentes = '
                        <tr>
                                        <td>' . $row['idComponente'] . ' </td>
                                        <td>' . $row['nombre'] . ' </td>
                                        <td>' . $row['marca'] . ' </td>
                                        <td>' . $row['modelo'] . ' </td>
                                        <td>' . $row['estado'] . ' </td>
                                        <td>$ ' . number_format($row['costo'], 2, '.',',') . ' </td>
        
                                    </tr>
                    ';  
                    echo $tablaindexComponentes;
                }
                break;
}   
?>