<!--ARCHIVOS PHP -->
<?php include("../vistas/header.php");
require("../vistas/navbar.php"); ?>
<!-- INDEX -->

<body style="min-height: 100vh;">
    <main>
        <section class="container">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">UDN - Areas</h6>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">UDN. Negocios</th>
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
            <div class="modal fade " id="modalProductos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalProductos" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col">
                                <div class="card-text row">
                                    <h5 class="modal-title fw-bold text-uppercase text-center">
                                        Catalogo de Productos
                                    </h5>
                                </div>
                                <div class="card-text row">
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating ">
                                            <select id="listaCategoriasModal" class="form-select form-select-sm" placeholder="Selecciona una Opción">
                                            </select>
                                            <label for="listaCategorias" aria-label="Categoria Producto"><i class="icon-th-list"></i>
                                                Categoria de Productos</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6"></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row" id="catalogoProductos"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger col-12 col-xl-7" data-bs-dismiss="modal">
                                <i class="icon-basket-1"></i>
                                Cerrar Catalogo de Productos</button>
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