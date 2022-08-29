<?php
include_once("../modelo/mdl_Componentes.php");
$obj = new Componentes;

$opc    = $_POST['opc'];

switch ($opc) {
    case 1: //Select unidades de negocio
        $diseño = '<option selected value="0">Seleccione una Opción</option>';
        $sql = $obj->mostrarUDN();
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['idUDN'] . '">' . $row['UDN'] . '</option>';
        }
        echo $diseño;
        break;
    case 2: //select mostrar areas de udn
        $diseño = '<option selected value="0"  >Seleccione una Opción</option>';
        $idUDN = $_POST['idUDN'];
        $sql = $obj->mostrarAreaUDN($idUDN);
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['idAreaUdn'] . '">' . $row['nombre'] . '</option>';
        }
        echo $diseño;
        break;
    case 3: // mostrar categorias de productos
        $diseño = '<option selected value="0" >Seleccione una Opción</option>';
        $sql = $obj->mostrarCategoria();
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['idTipoComponente'] . '">' . $row['nombre'] . '</option>';
        }
        echo $diseño;
        break;
    case 4: //mostrar lista de componentes
        $tablaComponentes = null;
        $sql = $obj->mostrarComponentes();
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
                            <button type="button" class="btn btn-square btn-warning m-1" id="print"><i class="fa fa-print"></i></button>
                            <button type="button" class="btn btn-square btn-danger m-1" id="delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                ';
        }
        echo $tablaComponentes;
        break;
    case 5: //Almacenar en tabla Caracteristias
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

        echo $obj->ultimoIDCategoria();
        break;
    case 6: //Almacenar en tabla componentes
        $infoComponente = array(
            $nombre = $_POST['nombre'],
            $id_Caracteristica = $_POST['id_Caracteristica'],
            $id_TipoComponente = $_POST['id_TipoComponente'],
            $id_AreaUDN = $_POST['id_AreaUDN']
        );

        $obj->insertarComponente($infoComponente);
        break;
    case 7:
        $id_componente = $_POST['id_componente'];
        $sql = $obj->mostrarInfoComponentes($id_componente);
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
}
