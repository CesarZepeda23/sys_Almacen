<?php
include_once("../modelo/mdl_Equipos.php");

$obj = new Equipos;

$opc    = $_POST['opc'];

switch($opc){
    case 1://MOSTRAR EQUIPOS
        $tablaEquipos = null;
        $sql = $obj -> mostrarEquipos(); 
        foreach($sql as $row){
            $tablaEquipos .= '
                <tr>
                    <td>' . $row['UDN'] . ' </td>
                    <td>' . $row['nombre'] . ' </td>
                    <td>' . $row['numeroEquipo'] . ' </td>
                    <td>' . $row['responsableEquipo'] . ' </td>
                    <td>' . $row['fechaAlta'] . ' </td>
                    <td>  
                    <button type="button" id="btnEditarEquipos" value="' . $row['idEquipo'] . '" class="btn btn-square btn-primary m-1"><i class="fa fa-edit"></i></button>
                    <button type="button" id="btnEliminarEquipos" class="btn btn-square btn-danger m-1"><i class="fa fa-trash"></i></button></td>
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


    case 5://REGISTRO
            $infoEquipo .= array(
                $fechaAlta = $_POST['fechaAlta'],
                $numeroEquipo = $_POST['numeroEquipo'],
                $responsableEquipo = $_POST['responsableEquipo'],
                $estado = $_POST['estado'],
                $sistemaOperativo = $_POST['sistemaOperativo'],
                $id_AreaUDN = $_POST['id_AreaUDN'],
            );
            $obj->insertarEquipo($infoEquipo);
        break;

    case 6://MOSTRAR INFO EDITAR
            $id_Equipo = $_POST['id_Equipo'];
            $sql = $obj->mostrarInfoEquipos($id_Equipo);
            foreach ($sql as $row) {
                $infoEquipo .= array(
                    'id_AreaUDN' => $row['id_AreaUDN'],
                    'fechaAlta' => $row['fechaAlta'],
                    'numeroEquipo' => $row['numeroEquipo'],
                    'responsableEquipo' => $row['responsableEquipo'],
                    'estado' => $row['estado'],
                    'sistemaOperativo' => $row['sistemaOperativo'],
                );
            };
            echo json_encode($infoEquipo);
        break;
} 
?>
