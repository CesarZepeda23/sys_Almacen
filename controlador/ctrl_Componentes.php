<?php
include_once("../modelo/mdl_Componentes.php");
$obj = new Componentes;

$opc    = $_POST['opc'];

switch($opc){
    case 1://MOSTRAR UDN
        $tablaindexComponentes = null;
        $sql = $obj -> mostrarComponentes(); 
        foreach($sql as $row){
            $tablaindexComponentes = '
                <tr>
                                <td>' . $row['idComponente'] . ' </td>
                                <td>' . $row['nombre'] . ' </td>
                                <td>' . $row['marca'] . ' </td>
                                <td>' . $row['modelo'] . ' </td>
                                <td>' . $row['estado'] . ' </td>
                                <td>$ ' . $row['costo'] . ' </td>

                            </tr>
            ';  
            echo $tablaindexComponentes;
        }
        break;
}   
?>
