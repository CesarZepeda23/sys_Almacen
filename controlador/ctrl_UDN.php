<?php
include_once("../modelo/mdl_UDN.php");
$obj = new UDN;

$opc    = $_POST['opc'];

switch($opc){
    case 1://MOSTRAR UDN
        $tablaindexUDN = null;
        $sql = $obj -> mostrarUDN(); 
        foreach($sql as $row){
            $tablaindexUDN = '
            <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Unidades De Negocio</h6>
                <div class="table-responsive">
                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">idUDN</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Abreviatura</th>
                                <th scope="col">ColorUDN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>' . $row['idUDN'] . ' </td>
                                <td>' . $row['UDN'] . ' </td>
                                <td>' . $row['Abreviatura'] . ' </td>
                                <td>' . $row['colorUDN'] . ' </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            ';  
            echo $tablaindexUDN;
        }
        break;
}   
?>