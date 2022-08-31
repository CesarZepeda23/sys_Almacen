<?php
include_once("../modelo/mdl_Componentes.php");
$obj = new Componentes;

$opc    = $_POST['opc'];

switch ($opc) {
    case 1: //Select de Unidades de Negocios
        $diseño = '<option selected value="0">Seleccione una Opción</option>';
        $sql = $obj->mostrarUDN();
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['idUDN'] . '">' . $row['UDN'] . '</option>';
        }
        echo $diseño;
        break;
    case 2: //Select de Areas de las Unidades de Negocio
        $diseño = '<option selected value="0"  >Seleccione una Opción</option>';
        $idUDN = $_POST['idUDN'];
        $sql = $obj->mostrarAreaUDN($idUDN);
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['idAreaUdn'] . '">' . $row['nombre'] . '</option>';
        }
        echo $diseño;
        break;
    case 3: //Select  de Tipo de Componente
        $diseño = '<option selected value="0" >Seleccione una Opción</option>';
        $sql = $obj->mostrarTipoComponente();
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['idTipoComponente'] . '">' . $row['nombre'] . '</option>';
        }
        echo $diseño;
        break;
    case 4: //mostrar lista de componentes
        $tablaComponentes = '';
        $id_tipo = $_POST['id_tipo'];

        if ($id_tipo == 0) {
            $id_tipo = null;
        }

        $sql = $obj->mostrarComponentes($id_tipo);
        foreach ($sql as $row) {
            $tablaComponentes .=
                '
                    <tr>
                        <td>' . $row['idComponente'] . ' </td>
                        <td>' . $row['comNom'] . ' </td>
                        <td>' . $row['marca'] . ' </td>
                        <td>' . $row['modelo'] . ' </td>
                        <td>' . $row['UDN'] . ' </td>
                        <td>' . $row['nombre'] . ' </td>
                        <td>' . $row['condicion'] . ' </td>
                        <td>$ ' . number_format($row['costo'], 2, '.', ',') . ' </td>
                        <td>
                            <button type="button" class="btn btn-square btn-primary m-1" id="edit" value="' . $row['idComponente'] . '"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-square btn-warning m-1" id="print" value="' . $row['idComponente'] . '"><i class="fa fa-print"></i></button>
                            <button type="button" class="btn btn-square btn-danger m-1" id="delete" value="' . $row['idComponente'] . '"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                ';
        }
        echo $tablaComponentes;
        break;
    case 5: //Almacenar en Tabla Caracteristicas y componentes
        $infoCaracteristica = array(
            $tipo = $_POST['tipo'],
            $marca = $_POST['marca'],
            $modelo = $_POST['modelo'],
            $voltaje = $_POST['voltaje'],
            $velocidad = $_POST['velocidad'],
            $contactos = $_POST['contactos'],
            $entrada = $_POST['entrada'],
            $salida = $_POST['salida'],
            $amperaje = $_POST['amperaje'],
            $estado = $_POST['estado'],
            $costo = $_POST['costo'],
            $condicion = $_POST['condicion'],
            $capacidad = $_POST['capacidad'],
            $resolucion = $_POST['resolucion'],
            $tamaño = $_POST['tamaño'],
            $aplicacion = $_POST['aplicacion']
        );

        $obj->insertarCaracteristicas($infoCaracteristica);

        $infoComponente = array(
            $nombre = $_POST['nombre'],
            $id_Caracteristica = $obj->ultimoIDCategoria(),
            $id_TipoComponente = $_POST['id_TipoComponente'],
            $id_AreaUDN = $_POST['id_AreaUDN']
        );

        $obj->insertarComponente($infoComponente);
        break;
    case 6:
        $id_componente = $_POST['id_componente'];
        $sql = $obj->infoComponente($id_componente);
        foreach ($sql as $row) {
            $infoComponente = array(
                'idAreaUdn' => $row['idAreaUdn'],
                'id_UDN' => $row['id_UDN'],
                'idComponente' => $row['idComponente'],
                'nombre' => $row['nombre'],
                'id_Caracteristica' => $row['id_Caracteristica'],
                'id_TipoComponente' => $row['id_TipoComponente'],
                'tipo' => $row['tipo'],
                'marca' => $row['marca'],
                'modelo' => $row['modelo'],
                'voltaje' => $row['voltaje'],
                'velocidad' => $row['velocidad'],
                'contactos' => $row['contactos'],
                'entrada' => $row['entrada'],
                'salida	' => $row['salida'],
                'amperaje' => $row['amperaje'],
                'costo' => $row['costo'],
                'condicion' => $row['condicion'],
                'capacidad' => $row['capacidad'],
                'resolucion' => $row['resolucion'],
                'tamaño' => $row['tamaño'],
                'aplicacion' => $row['aplicacion']
            );
        }
        echo json_encode($infoComponente);
        break;
    case 7:
        $idCaracteristica = $_POST['idCaracteristica'];
        $sql = $obj->eliminarComponente($idCaracteristica);
        break;
}




// $idCaracteristica = $_POST['idCaracteristica'];

//         $infoCaracteristica = array(
//             $tipo = $_POST['tipo'],
//             $marca = $_POST['marca'],
//             $modelo = $_POST['modelo'],
//             $voltaje = $_POST['voltaje'],
//             $velocidad = $_POST['velocidad'],
//             $contactos = $_POST['contactos'],
//             $entrada = $_POST['entrada'],
//             $salida = $_POST['salida'],
//             $amperaje = $_POST['amperaje'],
//             $costo = $_POST['costo'],
//             $condicion = $_POST['condicion'],
//             $capacidad = $_POST['capacidad'],
//             $resolucion = $_POST['resolucion'],
//             $tamaño = $_POST['tamaño'],
//             $aplicacion = $_POST['aplicacion']
//         );

//         $obj->actualizarCaracteristicas($infoCaracteristica, $idCaracteristica);