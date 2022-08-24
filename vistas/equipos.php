<!--ARCHIVOS PHP -->
<?php include("../vistas/header.php");
require("../vistas/navbar.php"); ?>
<!-- INDEX -->

<body>
    <main>
        <section class="container">
            <div class="container-fluid pt-4 px-4">
            <button type="button" class="btn btn-success m-2"><i class="fa fa-computer me-2"></i>Crear Un Equipo</button>
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
        </section>
    </main>

    <?php include("../vistas/footer.php"); ?>

    <!--ARCHIVOS PHP -->
    <!--ARCHIVOS SCRIPTS -->
    <script src="../recursos/js/equipos.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>

</body>