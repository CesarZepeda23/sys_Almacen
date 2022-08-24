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
                                <td>  <button type="button" class="btn btn-square btn-primary m-1"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-square btn-danger m-1"><i class="fa fa-trash"></i></button> </td>
                            </tr>
            ';  
        }
        echo $tablaEquipos;
        break;

        case 2:
            echo $obj->ultimoNumeroEquipo() + 1;
            break;

        case 3:
                $selectUDN = '<option  disabled selected value="0">ELIJA UNA OPCION</option>';
                $sql = $obj->UDNS();
                foreach ($sql as $row) {
                    $selectUDN .=
                        '<option  value="' . $row['idUDN'] . '">' . $row['UDN'] . '</option>';
                }
                echo $selectUDN;
                break;
}   
?>