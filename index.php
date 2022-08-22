<!--ARCHIVOS PHP -->
<?php include("./vistas/header.php"); require("./vistas/navbar.php");?>

 
<!-- INDEX -->
<body>
   <main>
       <section class="container">
       <div class="row" id="contenedorProductosLista">       
        </div>
       </section>
   </main>

   <?php include("./vistas/footer.php");?>

<!--ARCHIVOS PHP -->
   <!--ARCHIVOS SCRIPTS -->
   <script src="./recursos/js/index.js"=<?php echo time(); ?>"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./recursos/lib/chart/chart.min.js"></script>
    <script src="./recursos/lib/easing/easing.min.js"></script>
    <script src="./recursos/lib/waypoints/waypoints.min.js"></script>
    <script src="./recursos/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./recursos/lib/tempusdominus/js/moment.min.js"></script>
    <script src="./recursos/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./recursos/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
</body>