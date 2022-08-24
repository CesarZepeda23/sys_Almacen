<!--ARCHIVOS PHP -->
<?php include("../vistas/header.php");
require("../vistas/navbar.php"); ?>
<!-- INDEX -->

<body style="min-height: 100vh;">
    <main>
        <section class="container">
            <div class="container-fluid pt-4 px-4">

                <button type="button" id="btnAgregarComp" class="btn btn-success m-2"><i class="fa-solid fa-computer-mouse me-2"></i>Agregar Componente</button>
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">Componentes</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">UDN</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Condición</th>
                                            <th scope="col">Costo</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaComponentes">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade " id="modalRegistro" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalProductos" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col">
                                <div class="card-text row">
                                    <h4 class="modal-title fw-bold text-center">Registro de Componentes</h4>
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
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="udn" aria-label="Unidades de Negocio"> </select>
                                                        <label for="udn"><i class="fa-solid fa-building me-2"></i>Unidad de Negocio</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4"></div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="areas" aria-label="Areas UDN">
                                                            <option selected value="0" disabled>Seleccione una Opción</option>
                                                        </select>
                                                        <label for="areas"><i class="fa-solid fa-share-nodes me-2"></i>
                                                            Areas</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-text row">
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="nombreComp" placeholder="Nombre del Componente">
                                                        <label for="nombreComp" aria-label="Nombre del Componente"><i class="fa-solid fa-rectangle-list me-2"></i>
                                                            Nombre del Componente</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="marca" placeholder="Marca del Componente" />
                                                        <label for="marca" aria-label="Marca del Componente"><i class="fa-solid fa-copyright me-2"></i> Marca</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="modelo" placeholder="Modelo del Componente" />
                                                        <label for="modelo" aria-label="Modelo del Componente"><i class="fa-solid fa-laptop-file me-2"></i>
                                                            Modelo</label>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card-text row">
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="tipo" placeholder="Tipo del Componente">
                                                        <label for="tipo" aria-label="Tipo del Componente"><i class="fa-solid fa-object-ungroup"></i>
                                                            Tipo</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="precio" placeholder="Precio del Componente" />
                                                        <label for="marca" aria-label="Marca del Componente"><i class="fa-solid fa-copyright me-2"></i> Precio</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="modelo" placeholder="Modelo del Componente" />
                                                        <label for="modelo" aria-label="Modelo del Componente"><i class="fa-solid fa-laptop-file me-2"></i>
                                                            Condición Fisica</label>
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
                            <button type="button" class="btn btn-success m-2"><i class="fa-solid fa-computer-mouse me-2"></i>Agregar Componente</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("../vistas/footer.php"); ?>

    <!--ARCHIVOS PHP -->
    <!--ARCHIVOS SCRIPTS -->
    <script src="../recursos/js/componentes.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>

</body>