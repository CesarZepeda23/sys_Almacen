<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="shortcut icon" href="./recursos/img/Logo Almacen.png" type="image/x-icon">

    <!-- BOOTSTRAP -->
    <!-- https://getbootstrap.com/docs/5.2/getting-started/introduction/ -->
    <link rel="stylesheet" href="./recursos/bootstrap-5.2.0/css/bootstrap.min.css">
    <script src="./recursos/bootstrap-5.2.0/popper.js"></script>
    <script src="./recursos/bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="./recursos/bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./recursos/plugins/animate/animate.min.css">

    <!-- JQUERY -->
    <!-- https://jquery.com/ -->
    <script src="./recursos/jQuery-3.6.0/jquery-3.6.0.min.js"></script>

    <!-- ANIMATION CSS -->
    <!-- https://animate.style/ -->
    <link rel="stylesheet" href="./recursos/plugins/animate/animate.min.css">

    <!-- SWEETALERT -->
    <!-- https://sweetalert2.github.io/ -->
    <link rel="stylesheet" href="./recursos/plugins/sweetalert2/package/dist/sweetalert2.min.css">
    <script src="./recursos/plugins/sweetalert2/package/dist/sweetalert2.all.min.js"></script>

    <!-- AOS Framework -->
    <!-- https://michalsnik.github.io/aos/ -->
    <link rel="stylesheet" href="./recursos/plugins/aos-master/dist/aos.css">
    <script src="./recursos/plugins/aos-master/dist/aos.js"></script>
    <link rel="stylesheet" href="./recursos/css/style.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./recursos/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./recursos/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./recursos/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./recursos/css/style.css" rel="stylesheet">

</head>
<!-- INDEX -->
<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="./index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>INVENTARIO</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="./recursos/img/Logo Almacen.png" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Grupo Varoch</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="./index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Inicio</a>
            <a href="./vistas/componentes.php" class="nav-item nav-link"><i class="fa fa-mouse me-2"></i>Perifericos</a>
            <a href="./vistas/equipos.php" class="nav-item nav-link"><i class="fa fa-computer me-2"></i>Equipos</a>
            <a href="./vistas/areas.php" class="nav-item nav-link"><i class="fa-solid fa-briefcase me-2"></i>Areas</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="./recursos/img/Logo Almacen.png" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">Grupo Varoch</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </nav>

    <body>
        <main>
            <section class="container">
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="bg-light rounded h-100 p-4">
                                <h4 class="mb-4">Unidades De Negocio</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id De UDN</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablasUDNindex"> </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- MODAL -->
                <div class="modal fade " id="modalVerUDN" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalEquipo" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col">
                                <div class="card-text row">
                                    <h4 class="modal-title fw-bold text-center">Detalles</h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="body p-sm-2 p-md-4 p-lg-4 p-xl-4">
                                    <div class="text row">
                                    <div class="col-12 col-sm-4">
                                        <div class="bg-light rounded d-flex align-items-center p-3">
                                            <i class="fa-solid fa-briefcase fa-2x text-primary"></i>
                                            <div class="ms-4">
                                                <p class="mb-0">Areas</p>
                                                <h6 class="mb-0" id="areas"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="bg-light rounded d-flex align-items-center p-3">
                                            <i class="fa-solid fa-computer-mouse fa-2x text-primary"></i>
                                            <div class="ms-4">
                                                <p class="mb-0">Perifericos</p>
                                                <h6 class="mb-0" id="perifericos"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="bg-light rounded d-flex align-items-center p-3">
                                            <i class="fa-solid fa-computer fa-2x text-primary"></i>
                                            <div class="ms-4">
                                                <p class="mb-0">Equipos</p>
                                                <h6 class="mb-0" id="equipos"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar<i class="fa-solid fa-ban ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </main>

        <footer>
            <div class="row bg-dark mt-4">
                <div class="col text-center text-light p-3">
                    <strong style="color:#A8A8A8;"> <i class="icon-copyright"></i> 2022 Copyright </strong> Grupo
                    Varoch.
                    Tapachula, Chiapas
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./recursos/lib/chart/chart.min.js"></script>
        <script src="./recursos/lib/easing/easing.min.js"></script>
        <script src="./recursos/lib/waypoints/waypoints.min.js"></script>
        <script src="./recursos/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="./recursos/lib/tempusdominus/js/moment.min.js"></script>
        <script src="./recursos/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="./recursos/lib/tempusdominus/js/tempusdominus-bootstrap-5.min.js"></script>

        <script src="./recursos/js/index.js" <?php echo time(); ?>"></script>
        <script src="./recursos/js/dashboard.js"=<?php echo time(); ?>"></script>
    </body>