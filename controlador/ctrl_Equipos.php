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
                    <button type="button" id="btnVerEquipos" value="' . $row['idEquipo'] . '" class="btn btn-square btn-info m-1"><i class="fa-solid fa-eye"></i></button>
                    <button type="button" id="btnEditarEquipos" value="' . $row['idEquipo'] . '" class="btn btn-square btn-primary m-1"><i class="fa fa-edit"></i></button>
                    <button type="button" id="btnEliminarEquipos" value="' . $row['idEquipo'] . '" class="btn btn-square btn-danger m-1"><i class="fa fa-trash"></i></button></td>
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
            $infoEquipo = array(
                $fechaAlta = $_POST['fechaAlta'],
                $numeroEquipo = $_POST['numeroEquipo'],
                $responsableEquipo = $_POST['responsableEquipo'],
                $estado = $_POST['estado'],
                $sistemaOperativo = $_POST['sistemaOperativo'],
                $id_AreaUDN = $_POST['id_AreaUDN'],
                $condicion = $_POST['condicion']
            );
            $obj->insertarEquipo($infoEquipo);
        break;

    case 6://MOSTRAR INFO EDITAR
            $id_Equipos = $_POST['id_Equipos'];
            $sql = $obj->mostrarInfoEquipos($id_Equipos);
            foreach ($sql as $row) {    
            $infoEquipoEditar = array(
                        'id_AreaUDN' => $row['id_AreaUDN'],
                        'fechaAlta' => $row['fechaAlta'],
                        'numeroEquipo' => $row['numeroEquipo'],
                        'responsableEquipo' => $row['responsableEquipo'],
                        'condicion' => $row['condicion'],
                        'sistemaOperativo' => $row['sistemaOperativo']
                    );
                };
            echo json_encode($infoEquipoEditar);
        break;
    case 7://MOSTRAR MODAL VER EQUIPOS
            $id_Equipos = $_POST['id_Equipos'];
            $sql = $obj->verEquipos($id_Equipos);
            foreach ($sql as $row) {
            $infoEquipoModal = array(
                'fechaAlta' => $row['fechaAlta'],
                'numeroEquipo' => $row['numeroEquipo'],
                'UDN' => $row['UDN'],
                'nombre' => $row['nombre'],
                'responsableEquipo' => $row['responsableEquipo'],
                'sistemaOperativo' => $row['sistemaOperativo'],
                'condicion' => $row['condicion']
                                    );
                                }; 
                    echo json_encode($infoEquipoModal);
            break;
    case 8://MOSTRAR COMPONENTES MODAL VER EQUIPOS
            $modalEComponent = null;
            $id_Equipos = $_POST['id_Equipos'];
            $sql = $obj -> verEquiposYComponentes($id_Equipos); 
            foreach($sql as $row){
                $modalEComponent .= '
                    <div class="rounded d-flex align-items-center p-3">
                        <i class="fa fa-mouse fa-2x text-primary"></i>
                            <div class="ms-4">
                                <p class="mb-0">' . $row['nombre'] . '</p>
                                <h6 class="mb-0">' . $row['marca'] . '</h6>
                            </div>
                    </div>   
            ';  
                      };
                echo $modalEComponent;
            break;
    case 9://ELIMINAR EQUIPO
        $id_Equipos = $_POST['id_Equipos'];
        $sql = $obj->eliminarEquipo($id_Equipos);
        break;

    case 10://MOSTRAR EQUIPOS ELIMINADOS
            $tablaEquipos = null;
            $sql = $obj -> mostrarEquiposEliminados(); 
            foreach($sql as $row){
                $tablaEquipos .= '
                    <tr>
                        <td>' . $row['UDN'] . ' </td>
                        <td>' . $row['nombre'] . ' </td>
                        <td>' . $row['numeroEquipo'] . ' </td>
                        <td>' . $row['responsableEquipo'] . ' </td>
                        <td>' . $row['fechaAlta'] . ' </td>
                        <td>  
                        <button type="button" id="btnVerEquipos" value="' . $row['idEquipo'] . '" class="btn btn-square btn-info m-1"><i class="fa-solid fa-eye"></i></button>
                        <button type="button" id="btnRegresarEquipos" value="' . $row['idEquipo'] . '" class="btn btn-square btn-success m-1"><i class="fa-solid fa-upload"></i></button></td>
                    </tr>
                    ';  
                               }
                echo $tablaEquipos;
            break;
    case 11://REGRESAR EQUIPO
                $id_Equipos = $_POST['id_Equipos'];
                $sql = $obj->regresarEquipo($id_Equipos);
                break; 
    case 12:
                    $tablaEquiposCo = null;
                    $sql = $obj -> componentesEquipo(); 
                    foreach($sql as $row){
                        $tablaEquiposCo .= '
                            <tr>
                                <td>' . $row['nombre'] . ' </td>
                                <td>' . $row['marca'] . ' </td>
                                <td>' . $row['nomArea'] . ' </td>
                                <td>' . $row['UDN'] . ' </td>
                                <td>
                                <input class="form-check-input" type="checkbox" value="' . $row['idComponente'] . '" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Agregar
                                </label></td>
                            </tr>
                            ';  
                                       }
                        echo $tablaEquiposCo;
                    break;                
        
} 
?>
