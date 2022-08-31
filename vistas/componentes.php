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
                            <h4 class="mb-4 text-center">Perifericos</h4>
                            <div class="col-12 col-sm-3">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="filtroCategoria" aria-label="Categoria Componente">
                                        <option selected value="0" disabled>Seleccione una Opción</option>
                                    </select>
                                    <label for="categoriaEditar"><i class="fa-solid fa-certificate me-2"></i>
                                        Categoria</label>
                                </div>
                            </div>
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
        </section>
    </main>

    <!-- Modal Registrar Componente-->
    <section>
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
                                                    <select class="form-select" id="udn" aria-label="Unidades de Negocio" required> </select>
                                                    <label for="udn">* <i class="fa-solid fa-building me-2"></i>Unidad de Negocio</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4"></div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" id="areas" aria-label="Areas UDN" required>
                                                        <option selected value="0" disabled>Seleccione una Opción</option>
                                                    </select>
                                                    <label for="areas">* <i class="fa-solid fa-share-nodes me-2"></i>
                                                        Areas</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-text row">
                                            <div class="col-12 col-sm-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="nombreComp" placeholder="Nombre del Componente" required>
                                                    <label for="nombreComp" aria-label="Nombre del Componente">* <i class="fa-solid fa-rectangle-list me-2"></i>
                                                        Nombre del Componente</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="marca" placeholder="Marca del Componente" required />
                                                    <label for="marca" aria-label="Marca del Componente">* <i class="fa-solid fa-copyright me-2"></i> Marca</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="modelo" placeholder="Modelo del Componente" required />
                                                    <label for="modelo" aria-label="Modelo del Componente">* <i class="fa-solid fa-laptop-file me-2"></i>
                                                        Modelo</label>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="card-text row">
                                            <div class="col-12 col-sm-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="tipo" placeholder="Tipo del Componente" required>
                                                    <label for="tipo" aria-label="Tipo del Componente"><i class="fa-solid fa-object-ungroup me-2"></i>
                                                        Tipo</label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-3">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" id="categoria" aria-label="Categoria Componente" required>
                                                        <option selected value="0" disabled>Seleccione una Opción</option>
                                                    </select>
                                                    <label for="categoria">* <i class="fa-solid fa-certificate me-2"></i>
                                                        Categoria del Componente</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control text-center" id="precio" placeholder="Precio del Componente" required />
                                                    <label for="precio" aria-label="Precio del Componente">* <i class="fa-solid fa-dollar-sign me-2"></i> Precio</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="condicion" placeholder="Condicion del Componente" required />
                                                    <label for="condicion" aria-label="Condicion del Componente">* <i class="fa-solid fa-thumbs-up me-2"></i>
                                                        Condición Fisica</label>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="card-text row">
                                            <div class="card-text text-center">
                                                <p class="text-muted"><i class="fa-solid fa-clipboard-check me-2"></i> Seleccione las Caracteristicas que Aplican</p>
                                            </div>

                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="voltajeSwitch">
                                                    <label class="form-check-label" for="voltajeSwitch">Voltaje</label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="velocidadSwitcht">
                                                    <label class="form-check-label" for="velocidadSwitcht">Velocidad</label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="contactosSwitcht">
                                                    <label class="form-check-label" for="contactosSwitcht">Contactos</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="entradasSwitcht">
                                                    <label class="form-check-label" for="entradasSwitcht">Entradas</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="salidasSwitcht">
                                                    <label class="form-check-label" for="salidasSwitcht">Salidas</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="amperajeSwitcht">
                                                    <label class="form-check-label" for="amperajeSwitcht">Amperaje</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="capacidadSwitcht">
                                                    <label class="form-check-label" for="capacidadSwitcht">Capacidad</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="resolucionSwitcht">
                                                    <label class="form-check-label" for="resolucionSwitcht">Resolución</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="tamañoSwitcht">
                                                    <label class="form-check-label" for="tamañoSwitcht">Tamaño</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="appSwitcht">
                                                    <label class="form-check-label" for="appSwitcht">Aplicación Movil</label>
                                                </div>
                                            </div>
                                        </div>

                                        <br>


                                        <div class="card-text row">
                                            <div class="col-12 col-sm-3" id="voltajeDiv">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="voltaje" placeholder="Voltaje">
                                                    <label for="voltaje" aria-label="Voltaje"><i class="fa-solid fa-bolt me-2"></i>
                                                        Voltaje</label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-3" id="velocidadDiv">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="velocidad" placeholder="Velocidad">
                                                    <label for="velocidad" aria-label="Velocidad"><i class="fa-solid fa-arrow-right-arrow-left me-2"></i>
                                                        Velocidad</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="contactosDiv">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="contactos" placeholder="Contactos">
                                                    <label for="contactos" aria-label="Contactos"><i class="fa-solid fa-plug me-2"></i>
                                                        Contactos</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="entradasDiv">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="entradas" placeholder="Entradas">
                                                    <label for="entradas" aria-label="Entradas"><i class="fa-brands fa-usb me-2"></i>
                                                        Entradas</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="salidasDiv">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="salidas" placeholder="Salidas">
                                                    <label for="salidas" aria-label="Salidas"><i class="fa-solid fa-arrow-up-right-from-square me-2"></i>
                                                        Salidas</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="amperajeDiv">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="amperaje" placeholder="Amperaje">
                                                    <label for="amperaje" aria-label="Amperaje"><i class="fa-solid fa-plug-circle-bolt me-2"></i>
                                                        Amperaje</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="capacidadDiv">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="capacidad" placeholder="Capacidad">
                                                    <label for="capacidad" aria-label="Capacidad"><i class="fa-solid fa-hard-drive me-2"></i>
                                                        Capacidad</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="resolucionDiv">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="resolucion" placeholder="Resolucion">
                                                    <label for="resolucion" aria-label="Resolucion"><i class="fa-solid fa-display me-2"></i>
                                                        Resolución</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="tamañoDiv">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="tamaño" placeholder="Tamaño">
                                                    <label for="tamaño" aria-label="Tamaño"><i class="fa-solid fa-maximize me-2"></i>
                                                        Tamaño</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="appDiv">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" id="app" aria-label="Aplicación Movil">
                                                        <option selected value="0">Seleccione una Opción</option>
                                                        <option value="1">Si</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                    <label for="app" aria-label="Aplicacion Movil"><i class="fa-solid fa-mobile-screen-button me-2"></i>
                                                        Aplicacion Movil</label>
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
                        <button type="button" id="agregar" class="btn btn-success m-2"><i class="fa-solid fa-computer-mouse me-2"></i>Agregar Componente</button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Modal Editar Componente-->
    <section>
        <div class="modal fade " id="modalEditar" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalProductos" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col">
                            <div class="card-text row">
                                <h4 class="modal-title fw-bold text-center">Editar Componente</h4>
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
                                                    <select class="form-select" id="udnEditar" aria-label="Unidades de Negocio"> </select>
                                                    <label for="udnEditar"><i class="fa-solid fa-building me-2"></i>Unidad de Negocio</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4"></div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" id="areasEditar" aria-label="Areas UDN">
                                                        <option selected value="0" disabled>Seleccione una Opción</option>
                                                    </select>
                                                    <label for="areasEditar"><i class="fa-solid fa-share-nodes me-2"></i>
                                                        Areas</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-text row">
                                            <div class="col-12 col-sm-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="nombreCompEditar" placeholder="Nombre del Componente">
                                                    <label for="nombreCompEditar" aria-label="Nombre del Componente"><i class="fa-solid fa-rectangle-list me-2"></i>
                                                        Nombre del Componente</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="marcaEditar" placeholder="Marca del Componente" />
                                                    <label for="marcaEditar" aria-label="Marca del Componente"><i class="fa-solid fa-copyright me-2"></i> Marca</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="modeloEditar" placeholder="Modelo del Componente" />
                                                    <label for="modeloEditar" aria-label="Modelo del Componente"><i class="fa-solid fa-laptop-file me-2"></i>
                                                        Modelo</label>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="card-text row">
                                            <div class="col-12 col-sm-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="tipoEditar" placeholder="Tipo del Componente">
                                                    <label for="tipoEditar" aria-label="Tipo del Componente"><i class="fa-solid fa-object-ungroup me-2"></i>
                                                        Tipo</label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-3">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" id="categoriaEditar" aria-label="Categoria Componente">
                                                        <option selected value="0" disabled>Seleccione una Opción</option>
                                                    </select>
                                                    <label for="categoriaEditar"><i class="fa-solid fa-certificate me-2"></i>
                                                        Categoria del Componente</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control text-center" id="precioEditar" placeholder="Precio del Componente" required />
                                                    <label for="precioEditar" aria-label="Precio del Componente"><i class="fa-solid fa-dollar-sign me-2"></i> Precio</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="condicionEditar" placeholder="Condicion del Componente" required />
                                                    <label for="condicionEditar" aria-label="Condicion del Componente"><i class="fa-solid fa-thumbs-up me-2"></i>
                                                        Condición Fisica</label>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="card-text row">
                                            <div class="card-text text-center">
                                                <p class="text-muted"><i class="fa-solid fa-clipboard-check me-2"></i> Seleccione las Caracteristicas que Aplican</p>
                                            </div>

                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="voltajeSwitchEditar">
                                                    <label class="form-check-label" for="voltajeSwitch">Voltaje</label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="velocidadSwitchtEditar">
                                                    <label class="form-check-label" for="velocidadSwitcht">Velocidad</label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="contactosSwitchtEditar">
                                                    <label class="form-check-label" for="contactosSwitcht">Contactos</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="entradasSwitchtEditar">
                                                    <label class="form-check-label" for="entradasSwitcht">Entradas</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="salidasSwitchtEditar">
                                                    <label class="form-check-label" for="salidasSwitcht">Salidas</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="amperajeSwitchtEditar">
                                                    <label class="form-check-label" for="amperajeSwitcht">Amperaje</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="capacidadSwitchtEditar">
                                                    <label class="form-check-label" for="capacidadSwitcht">Capacidad</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="resolucionSwitchtEditar">
                                                    <label class="form-check-label" for="resolucionSwitcht">Resolución</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="tamañoSwitchtEditar">
                                                    <label class="form-check-label" for="tamañoSwitcht">Tamaño</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="appSwitchtEditar">
                                                    <label class="form-check-label" for="appSwitcht">Aplicación Movil</label>
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="card-text row">
                                            <div class="col-12 col-sm-3" id="voltajeDivEditar">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="voltajeEditar" placeholder="Voltaje">
                                                    <label for="voltajeEditar" aria-label="Voltaje"><i class="fa-solid fa-bolt me-2"></i>
                                                        Voltaje</label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-3" id="velocidadDivEditar">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="velocidadEditar" placeholder="Velocidad">
                                                    <label for="velocidadEditar" aria-label="Velocidad"><i class="fa-solid fa-arrow-right-arrow-left me-2"></i>
                                                        Velocidad</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="contactosDivEditar">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="contactosEditar" placeholder="Contactos">
                                                    <label for="contactosEditar" aria-label="Contactos"><i class="fa-solid fa-plug me-2"></i>
                                                        Contactos</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="entradasDivEditar">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="entradasEditar" placeholder="Entradas">
                                                    <label for="entradasEditar" aria-label="Entradas"><i class="fa-brands fa-usb me-2"></i>
                                                        Entradas</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="salidasDivEditar">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="salidasEditar" placeholder="Salidas">
                                                    <label for="salidasEditar" aria-label="Salidas"><i class="fa-solid fa-arrow-up-right-from-square me-2"></i>
                                                        Salidas</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="amperajeDivEditar">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="amperajeEditar" placeholder="Amperaje">
                                                    <label for="amperajeEditar" aria-label="Amperaje"><i class="fa-solid fa-plug-circle-bolt me-2"></i>
                                                        Amperaje</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="capacidadDivEditar">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="capacidadEditar" placeholder="Capacidad">
                                                    <label for="capacidadEditar" aria-label="Capacidad"><i class="fa-solid fa-hard-drive me-2"></i>
                                                        Capacidad</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="resolucionDivEditar">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="resolucionEditar" placeholder="Resolucion">
                                                    <label for="resolucionEditar" aria-label="Resolucion"><i class="fa-solid fa-display me-2"></i>
                                                        Resolución</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="tamañoDivEditar">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-center" id="tamañoEditar" placeholder="Tamaño">
                                                    <label for="tamañoEditar" aria-label="Tamaño"><i class="fa-solid fa-maximize me-2"></i>
                                                        Tamaño</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3" id="appDivEditar">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" id="appEditar" aria-label="Aplicación Movil">
                                                        <option selected disabled>Seleccione una Opción</option>
                                                        <option value="1">Si</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                    <label for="appEditar" aria-label="Aplicacion Movil"><i class="fa-solid fa-mobile-screen-button me-2"></i>
                                                        Aplicacion Movil</label>
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
                        <button type="button" id="actualizarComponente" class="btn btn-success m-2"><i class="fa-solid fa-computer-mouse me-2"></i>Editar Componente</button>
                    </div>
                </div>
            </div>
        </div>

    </section>






    <?php include("../vistas/footer.php"); ?>


    <!--ARCHIVOS SCRIPTS -->
    <script src="../recursos/js/componentes.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>

</body>