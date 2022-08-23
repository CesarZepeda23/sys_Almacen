<?php
include_once("../modelo/mdl_Componentes.php");
$obj = new Componentes;

$opc    = $_POST['opc']

switch ($opc) {
    case 1: //MOSTRAR UDN
        $tablaComponentes = null;
        $sql = $obj->mostrarComponentes();
        foreach ($sql as $row) {
            $tablaComponentes =
                '
                <tr>
                    <td>' . $row['idComponente'] . ' </td>
                    <td>' . $row['nombre'] . ' </td>
                    <td>' . $row['marca'] . ' </td>
                    <td>' . $row['modelo'] . ' </td>
                    <td>' . $row['uds'] . ' </td>
                    <td>' . $row['area'] . ' </td>
                    <td>' . $row['estado'] . ' </td>
                    <td>$ ' . number_format($row['costo'], 2) . ' </td>
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
