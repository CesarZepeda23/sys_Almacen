<!--ARCHIVOS PHP -->
<?php include("./vistas/header.php"); require("./vistas/navbar.php");?>
<!-- INDEX -->
<body>
   <main>
       <section class="container">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Unidades De Negocio</h6>
                <div class="table-responsive">
                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">idUDN</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Abreviatura</th>
                                <th scope="col">ColorUDN</th>
                            </tr>
                        </thead>
                        <tbody id="tablasUDN">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                    <!-- <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Equipo</h6>
                            <div class="table-responsive">
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">ZIP</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                            <td>UK</td>
                                            <td>456</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                            <td>AU</td>
                                            <td>789</td>
                                            <td>Member</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Componentes</h6>
                            <div class="table-responsive">
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">ZIP</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                            <td>UK</td>
                                            <td>456</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                            <td>AU</td>
                                            <td>789</td>
                                            <td>Member</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> -->
                        </div>
                    </div>
            <!-- Table End -->
       </section>
   </main>

   <?php include("./vistas/footer.php");?>

<!--ARCHIVOS PHP -->
   <!--ARCHIVOS SCRIPTS -->
    <script src="./recursos/js/index.js"=<?php echo time(); ?>"></script>
    <script src="./recursos/js/udn.js"=<?php echo time(); ?>"></script>
</body>