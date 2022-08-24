<!--ARCHIVOS PHP -->
<?php include("../vistas/header.php");
require("../vistas/navbar.php"); ?>
<!-- INDEX -->

<body>
    <main>
        <section class="container">
            <div class="container-fluid pt-4 px-4">
                <button type="button" id="btnAgregarArea" class="btn btn-success m-2"><i
                        class="fa-solid fa-briefcase me-2"></i>Agregar UDN - Area</button>
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">UDN - Areas</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre Area</th>
                                            <th scope="col">Nombre UDN</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablasAreaUDN">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div>
                    <button type="button" id="btnArea" class="btn btn-success m-2"><i class="fa-solid fa-briefcase me-2"></i>Agregar Area</button>
                    </div>
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
                                            <div class="card-text row">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="nombre"
                                                            placeholder="Juan Perez Lopez" />
                                                        <label for="nombre" aria-label="Nombre Completo"><i
                                                            class="icon-user"></i>
                                                            Área
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="nombre"
                                                            placeholder="Juan Perez Lopez" />
                                                        <label for="nombre" aria-label="Nombre Completo"><i
                                                            class="icon-user"></i>
                                                            UDN
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
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                    class="fa-solid fa-ban me-2"></i>Cancelar</button>
                            <button type="button" class="btn btn-success m-2"><i
                                    class="fa-solid fa-briefcase me-2"></i>Agregar Componente</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade " id="modalAreas" data-bs-backdrop="static" tabindex="-1"
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
                                            <div class="card-text row">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="nombre"
                                                            placeholder="Juan Perez Lopez" />
                                                        <label for="nombre" aria-label="Nombre Completo"><i
                                                            class="icon-user"></i>
                                                            Nombre
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="nombre"
                                                            placeholder="Juan Perez Lopez" />
                                                        <label for="nombre" aria-label="Nombre Completo"><i
                                                            class="icon-user"></i>
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
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                    class="fa-solid fa-ban me-2"></i>Cancelar</button>
                            <button type="button" class="btn btn-success m-2"><i
                                    class="fa-solid fa-briefcase me-2"></i>Agregar Componente</button>
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