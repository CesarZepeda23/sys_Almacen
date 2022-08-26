<?php
include_once("../modelo/mdl_Componentes.php");
$obj = new Componentes;

$opc    = $_POST['opc'];

switch ($opc) {
    case 1:
        $diseño = '<option selected value="0" disabled >Seleccione una Opción</option>';
        $sql = $obj->mostrarUDN();
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['idUDN'] . '">' . $row['UDN'] . '</option>';
        }
        echo $diseño;
        break;
    case 2:
        $diseño = '<option selected value="0" disabled >Seleccione una Opción</option>';
        $idUDN = $_POST['idUDN'];
        $sql = $obj->mostrarAreaUDN($idUDN);
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['idAreaUdn'] . '">' . $row['nombre'] . '</option>';
        }
        echo $diseño;
        break;
    case 3:
        $diseño = '<option selected value="0" disabled >Seleccione una Opción</option>';
        $sql = $obj->mostrarCategoria();
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['tipo_componente'] . '">' . $row['nombre'] . '</option>';
        }
        echo $diseño;
        break;
    case 4:
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
                            <button type="button" class="btn btn-square btn-primary m-1 id="editar""><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-square btn-warning m-1"><i class="fa fa-print"></i></button>
                            <button type="button" class="btn btn-square btn-danger m-1"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                ';
        }
        echo $tablaComponentes;
        break;
    case 5:
        $infoComponente = array(
            $nombre = $_POST['nombre'],
            $id_Caracteristica = $_POST['id_Caracteristica'],
            $id_TipoComponente = $_POST['id_TipoComponente'],
            $id_AreaUDN = $_POST['id_AreaUDN']
        );

        $obj->insertarComponente($infoComponente);

        break;
}
