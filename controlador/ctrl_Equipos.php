<?php
include_once("../modelo/mdl_Equipos.php");
$obj = new Equipos;

$opc    = $_POST['opc'];

switch($opc){
    case 1://MOSTRAR EQUIPOS
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

    case 2://MOSTRAR ULTIMO NUMERO DE EQUIPO
            echo $obj->ultimoNumeroEquipo() + 1;
        break;

    case 3://SELECT UDN
                $selectUDN .= '<option  disabled selected value="0">ELIJA UNA OPCION</option>';
                $sql = $obj->UDNS();
                foreach ($sql as $row) {
                    $selectUDN .=
                        '<option  value="' . $row['idUDN'] . '">' . $row['UDN'] . '</option>';
                }
                echo $selectUDN;
        break;
    
    case 4://SELECT AREAS
                    $selectAreaUDN .= '<option selected value="0" disabled >Seleccione una Opción</option>';
                    $idUDN = $_POST['idUDN'];
                    $sql = $obj->mostrarAreaUDN($idUDN);
                    foreach ($sql as $row) {
                        $selectAreaUDN .= '<option value="' . $row['idAreaUdn'] . '">' . $row['nombre'] . '</option>';
                    }
                    echo $selectAreaUDN;
        break;
    case 5://CHECKBOX COMPONENTES
                    $checkcomp = '<option class="text-uppercase  fw-bold"  disabled selected value="0">ELIJA UN COMPONENTE</option>';
                    $sql = $obj->mostrarComponentesCheck();
                    foreach ($sql as $row) {
                        $checkcomp .= '<option value="' . $row['idComponente'] . '">' . $row['nombre'] . ' ' . $row['modelo'] . '</option>';
                    }
                    echo $checkcomp;
        break;
}   
?>