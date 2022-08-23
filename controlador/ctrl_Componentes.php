<?php
include_once("../modelo/mdl_Componentes.php");
$obj = new Componentes;

$opc    = $_POST['opc'];

switch ($opc) {
    case 1:
        $tablaComponentes = null;
        $sql = $obj->mostrarComponentes();
        foreach ($sql as $row) {
            $tablaComponentes =
                '
                <tr>
                    <td>' . $row['nombre'] . ' </td>
                    <td>' . $row['nombre'] . ' </td>
                    <td>' . $row['nombre'] . ' </td>
                    <td>' . $row['modelo'] . ' </td>
                    <td>' . $row['nombre'] . ' </td>
                    <td>' . $row['udn'] . ' </td>
                    <td>' . $row['area'] . ' </td>
                    <td>' . $row['estado'] . ' </td>
                    <td>' . $row['modelo'] . ' </td>
                    <td>
                        <button type="button" class="btn btn-square btn-primary m-1"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-square btn-warning m-1"><i class="fa fa-print"></i></button>
                        <button type="button" class="btn btn-square btn-danger m-1"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            ';

            echo $tablaComponentes;
        }
        break;
}
