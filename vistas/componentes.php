<!--ARCHIVOS PHP -->
<?php include("../vistas/header.php"); require("../vistas/navbar.php");?>
<!-- INDEX -->
<body>
   <main>
       <section class="container">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Componentes</h6>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID Del Componente</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <th scope="col">Modelo</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Costo</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablascomponentes">
                                        
                                        </tbody>
                                    </table>
                                </div>      
                        </div>
                    </div>
                </div>
            </div>
       </section>
   </main>

   <?php include("../vistas/footer.php");?>

<!--ARCHIVOS PHP -->
   <!--ARCHIVOS SCRIPTS -->
    <script src="../recursos/js/componentes.js"=<?php echo time(); ?>"></script>
</body>