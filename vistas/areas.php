<!--ARCHIVOS PHP -->
<?php include("../vistas/header.php");
require("../vistas/navbar.php"); ?>
<!-- INDEX -->

<body>
    <main>
        <section class="container">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">Area</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Abreviatura</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablasAreas">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">UDN</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Abreviatura</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablasUDN">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade " id="modalAreaUDN" data-bs-backdrop="static" tabindex="-1"
                aria-labelledby="modalProductos" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col">
                                <div class="card-text row">
                                    <h4 class="modal-title fw-bold text-center">Registro UDN - Area</h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-3" style="z-index:1;">
                                    <div class="row">
                                        <!-- CARD BODY -->
                                        <div class="card-body">
                                            <div class="card-text row">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="udn" aria-label="Unidades de Negocio"> 

                                                        </select>
                                                        <label for="udn"><i class="fa-solid fa-building me-2"></i>Unidad de Negocio</label>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating mb-3">
                                                            <select class="form-select" id="areas" aria-label="Areas">
                                                                <option selected value="0" disabled>Seleccione una Opción</option>
                                                            </select>
                                                            <label for="areas"><i class="fa-solid fa-briefcase"></i> Areas</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban me-2"></i>Cancelar</button>
                            <button type="button" id="btnRegistrarAreaUDN" class="btn btn-success m-2"><i class="fa-solid fa-briefcase me-2"></i>Agregar Area-UDN</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <!-- Modal -->
            <div class="modal fade " id="modalAreas" data-bs-backdrop="static" tabindex="-1"
                aria-labelledby="modalProductos" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col">
                                <div class="card-text row">
                                    <h4 class="modal-title fw-bold text-center">Registro Area</h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-3" style="z-index:1;">
                                    <div class="row">
                                        <!-- CARD BODY -->
                                        <div class="card-body">
                                            <div class="card-text row">
                                            <div class="card-text row">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="nombre" required/>
                                                        <label for="nombre" aria-label="Nombre Completo"><i class="icon-user"></i>
                                                            Nombre
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="abreviatura" required/>
                                                        <label for="nombre" aria-label="Nombre Completo"><i class="icon-user"></i>
                                                            Abreviatura
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban me-2"></i>Cancelar</button>
                            <button type="button" id="btnRegistrarArea" class="btn btn-success m-2"><i class="fa-solid fa-briefcase me-2"></i>Agregar Area</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("../vistas/footer.php"); ?>

    <!--ARCHIVOS PHP -->
    <!--ARCHIVOS SCRIPTS -->
    <script src="../recursos/js/areas.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>

</body>