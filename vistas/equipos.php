<!--ARCHIVOS PHP -->
<?php include("../vistas/header.php");
require("../vistas/navbar.php"); ?>
<!-- INDEX -->

<body>
    <main>
        <section class="container">
            <div class="container-fluid pt-4 px-4">
                <button type="button" id="btnAgregarEquipos" class="btn btn-success m-2"><i class="fa fa-computer me-2"></i>Crear Equipo</button>
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

            <!-- Modal Agregar -->
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
                            <div class="row">
                                <form method="POST">
                                        <div class="body p-sm-2 p-md-4 p-lg-4 p-xl-4">
                                            <div class="text row">
                                                <div class="col-12 col-sm-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="date" class="form-control" name="fechaAlta" id="fechaAlta" required="required"/>
                                                            <label for="fecha" aria-label="Fecha">
                                                                <i class="fa-solid fa-calendar me-2"></i class=>Fecha
                                                            </label>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-5"></div>
                                                
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3" >
                                                        <input type="text" class="form-control"  name="numeroEquipo"  disabled id="numeroEquipo" placeholder="" required="required"/>
                                                            <label for="numeroEquipo" aria-label="Numero De Equipo"><i class="fa-solid fa-hashtag"></i>
                                                                Numero De Equipo
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text row">
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" name="responsableEquipo" id="responsableEquipo" placeholder="" required="required"/>
                                                            <label for="responsableEquipo"  aria-label="Nombre De Encargado"><i class="fa-solid fa-user"></i>
                                                                Nombre De Encargado</label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" name="sistemaOperativo" id="sistemaOperativo" placeholder="" required="required"/>
                                                                <label for="sistemaOperativo" aria-label="Sistema Operativo"><i class="fa-brands fa-windows"></i>
                                                                    Sistema Operativo
                                                                </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" name="estado" id="estado" />
                                                                <label for="estado"  aria-label="Estado"><i class="fa-solid fa-circle-exclamation"></i>
                                                                    Estado
                                                                </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12 col-sm-4">
                                                    
                                                    <div class="form-floating mb-3">
                                                        <select id="salectUDN" class="form-select" name="salectUDN" placeholder="Selecciona una Opción" required="required">
                                                            <option selected value="Selecciona una Opción">Seleccione una Opción
                                                            
                                                            </option>
                                                        </select>
                                                            <label for="salectUDN" aria-label="UDN"><i class="fa-solid fa-building"></i>
                                                                Unidad De Negocio
                                                            </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <select id="salectAreaUDN" class="form-select" name="salectAreaUDN" placeholder="Selecciona una Opción" required="required">
                                                            <option selected value="Selecciona una Opción">Seleccione una Opción
                                                            
                                                            </option>
                                                        </select>
                                                        <label for="salectAreaUDN" aria-label="Areas"><i class="fa-solid fa-briefcase"></i>
                                                            Areas
                                                        </label>
                                                    </div>
                                                </div>
                                    </div>            
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar<i class="fa-solid fa-ban ms-2"></i></button>
                            <button type="button" id="btnRegistrarEquipo"  class="btn btn-success m-2">Crear Equipo<i class="fa-solid fa-computer ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section>
            <!-- Modal Editar -->
            <div class="modal fade " id="modalEditarEquipos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalEquipo" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col">
                                <div class="card-text row">
                                    <h4 class="modal-title fw-bold text-center">Editar Equipo</h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form>
                                    <div class="row">
                                        <div class="body p-sm-2 p-md-4 p-lg-4 p-xl-4">
                                            <div class="text row">
                                                <div class="col-12 col-sm-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="date" class="form-control" id="fechAltaEditar"/>
                                                            <label for="fechAltaEditar" aria-label="Fecha" name="fechAltaEditar">
                                                                <i class="fa-solid fa-calendar me-2"></i class=>Fecha
                                                            </label>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-5"></div>
                                                
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3" >
                                                        <input type="text" class="form-control text-center"  disabled id="numeroEquipoEditar" placeholder="" />
                                                            <label for="numeroEquipoEditar" name="numeroEquipoEditar" aria-label="Numero De Equipo"><i class="fa-solid fa-hashtag"></i>
                                                                Numero De Equipo
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text row">
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="responsableEquipoEditar" placeholder="" />
                                                            <label for="responsableEquipoEditar" name="responsableEquipoEditar" aria-label="Nombre De Encargado"><i class="fa-solid fa-user"></i>
                                                                Nombre De Encargado</label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="sistemaOperativoEditar" placeholder="" />
                                                                <label for="sistemaOperativoEditar" name="sistemaOperativoEditar" aria-label="Sistema Operativo"><i class="fa-brands fa-windows"></i>
                                                                    Sistema Operativo
                                                                </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="estadoEditar" placeholder="" />
                                                                <label for="estadoEditar" name="estadoEditar" aria-label="Estado"><i class="fa-solid fa-circle-exclamation"></i>
                                                                    Estado
                                                                </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12 col-sm-4">
                                                    
                                                    <div class="form-floating mb-3">
                                                        <select id="salectUDNEditar" class="form-select" placeholder="Selecciona una Opción">
                                                            <option selected value="Selecciona una Opción">Seleccione una Opción
                                                            
                                                            </option>
                                                        </select>
                                                            <label for="salectUDNEditar" aria-label="UDN"><i class="fa-solid fa-building"></i>
                                                                Unidad De Negocio
                                                            </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-floating mb-3">
                                                        <select id="salectAreaUDNEditar" class="form-select" placeholder="Selecciona una Opción">
                                                            <option selected value="Selecciona una Opción">Seleccione una Opción
                                                            
                                                            </option>
                                                        </select>
                                                        <label for="salectAreaUDNEditar" aria-label="Areas"><i class="fa-solid fa-briefcase"></i>
                                                            Areas
                                                        </label>
                                                    </div>
                                                </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar<i class="fa-solid fa-ban ms-2"></i></button>
                            <button type="submit" name="btnEditarEquipo" class="btn btn-success m-2">Editar Equipo<i class="fa-solid fa-computer ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php include("../vistas/footer.php"); ?>
    <!--ARCHIVOS PHP -->
    <!--ARCHIVOS SCRIPTS -->
    <script src="../recursos/js/equipos.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>

</body>