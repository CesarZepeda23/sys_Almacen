<?php
include_once("../modelo/mdl_Areas.php");
$obj = new Areas;

$opc    = $_POST['opc'];

switch($opc){
    case 1:
        $tablasAreaUDN = null;
        $sql = $obj -> mostrarAreaUDN(); 
        foreach($sql as $row){
            $tablasAreaUDN .= '
            <tr>
                <td>' . $row['idAreaUdn'] . ' </td>
                <td>' . $row['UDN'] . ' </td>
                <td>' . $row['nombre'] . ' </td>
                <td>
                    <button type="button" class="btn btn-square btn-danger m-1"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            ';  
        }
        echo $tablasAreaUDN;
        break;

        case 2:
            $tablasUDN = null;
            $sql = $obj -> mostrarUDN(); 
            foreach($sql as $row){
                $tablasUDN .= '
                <tr>
                    <td>' . $row['idUDN'] . ' </td>
                    <td>' . $row['UDN'] . ' </td>
                    <td>' . $row['Abreviatura'] . ' </td>
                </tr>
                ';  
            }
            echo $tablasUDN;
            break;

        case 3:
            $tablasAreas = null;
            $sql = $obj -> mostrarArea(); 
            foreach($sql as $row){
                $tablasAreas .= '
                <tr>
                    <td>' . $row['idArea'] . ' </td>
                    <td>' . $row['nombre'] . ' </td>
                    <td>' . $row['abreviatura'] . ' </td>
                    <td>
                        <button type="button" class="btn btn-square btn-danger m-1"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                ';  
            }
            echo $tablasAreas;
            break;
            case 4:
                $diseño = '<option selected value="0" disabled >Seleccione una Opción</option>';
                $sql = $obj->mostrarUDN();
                foreach ($sql as $row) {
                    $diseño .= '<option value="' . $row['idUDN'] . '">' . $row['UDN'] . '</option>';
                }
                echo $diseño;
                break;
            case 5:
                $diseño = '<option selected value="0" disabled >Seleccione una Opción</option>';
                $sql = $obj->mostrarArea();
                foreach ($sql as $row) {
                    $diseño .= '<option value="' . $row['idAreaUdn'] . '">' . $row['nombre'] . '</option>';
                }
                echo $diseño;
                break;
                case 6:
                    $idUDN = $_POST['idUDN'];
                    $idUDN = $_POST['idUDN'];
                    $idUDN = $_POST['idUDN'];
                    
                    break; 
}   

?>

<script>
    $("#btnArea").click(function() {
        $("#modalAreas").modal("show");
    });
</script>