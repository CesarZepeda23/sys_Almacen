<!--ARCHIVOS PHP -->
<?php include("../vistas/header.php");
require("../vistas/navbar.php"); ?>
<!-- INDEX -->

<body>
    <main>
        <section class="container">
            <div class="container-fluid pt-4 px-4">
            <button type="button" id="btnAgregarEquipos" class="btn btn-success m-2">Crear Equipo <i class="fa fa-computer me-2"></i></button>
                <div class="row g-4">
                <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">Equipo</h4>
                            <div class="table-responsive">
                            <table class="table table-striped" >
                                    <thead>
                                        <tr>
                                            <th scope="col">UDN</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Numero De Equipo</th>
                                            <th scope="col">Encargado Del Equipo</th>
                                            <th scope="col">Fecha De Alta</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablasequipos">
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade " id="modalRegistroEquipos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalProductos" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col">
                                <div class="card-text row">
                                    <h4 class="modal-title fw-bold text-center">Registro de Equipos</h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">




                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar<i class="fa-solid fa-ban ms-2"></i></button>
                            <button type="button" class="btn btn-success m-2">Crear Equipo<i class="fa-solid fa-add ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("../vistas/footer.php"); ?>

    <!--ARCHIVOS PHP -->
    <!--ARCHIVOS SCRIPTS -->
    <script src="../recursos/js/equipos.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>

</body>