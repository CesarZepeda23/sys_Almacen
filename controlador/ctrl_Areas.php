<?php
include_once("../modelo/mdl_Areas.php");
$obj = new Areas;

$opc    = $_POST['opc'];

switch($opc){
    case 1:
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

    case 2:
        $tablasAreas = null;
        $sql = $obj -> mostrarArea(); 
        foreach($sql as $row){
            $tablasAreas .= '
                <tr>
                    <td>' . $row['idArea'] . ' </td>
                    <td>' . $row['nombre'] . ' </td>
                    <td>' . $row['abreviatura'] . ' </td>
                </tr>
                ';  
            }
        echo $tablasAreas;
        break;

    case 3:
        $infoAreaUDN = array(
        $id_Area = $_POST['id_Area'],
        $id_UDN = $_POST['id_UDN'],
        );
        $obj->insertarAreaUDN($infoAreaUDN);
        break;

    case 4:
        $infoArea = array(
        $nombre = $_POST['nombre'],
        $abreviatura = $_POST['abreviatura'],
        );
        $obj->insertarArea($infoArea);
        break;
    

}   

?>

<script>
    $("#btnArea").click(function() {
        $("#modalAreas").modal("show");
    });
</script>