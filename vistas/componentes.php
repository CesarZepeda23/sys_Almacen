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
                                                <div class="col-12 col-sm-3">
                                                    <div class="form-floating mb-4">
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
                                                        <input type="text" class="form-control text-center" id="nombre" placeholder="Juan Perez Lopez" />
                                                        <label for="nombre" aria-label="Nombre Completo"><i class="icon-user"></i>
                                                            Nombre Completo</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control text-center" id="email" placeholder="correo@dominio.com" />
                                                        <label for="email" aria-label="Correo electrónico ó email"><i class="icon-at"></i> Correo Electronico </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control text-center" id="telefono" placeholder="000 000 00 00" />
                                                        <label for="telefono" aria-label="Telefono"><i class="icon-phone-1"></i>
                                                            Teléfono</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-text row">
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <select id="listaCategorias" class="form-select" placeholder="Selecciona una Opción">
                                                        </select>
                                                        <label for="listaCategorias" aria-label="Categoria Producto"><i class="icon-th-list"></i>
                                                            Categoria de Productos</label>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-4" id="divProducto">
                                                    <div class="form-floating mb-3">
                                                        <input readonly type="text" class="form-control text-center" id="NombreProducto" />
                                                        <label for="NombreProducto" aria-label="Nombre Producto">
                                                            <i class="icon-cube"></i>
                                                            Producto</label>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-4" id="divRelleno">
                                                    <div class="form-floating mb-3">
                                                        <select id="opcionRelleno" class="form-select" placeholder="Selecciona una Opción">
                                                            <option selected value="Selecciona una Opción">Seleccione una Opción
                                                            </option>
                                                        </select>
                                                        <label for="opcionRelleno" aria-label="Relleno"><i class="icon-chart-pie-alt"></i>
                                                            Relleno</label>
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