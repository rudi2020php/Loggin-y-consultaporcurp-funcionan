<html lang="es">
    <head>
        <?php
        require_once 'includes/conexion.php';
        $con = new Conexion();
        include_once '.\includes\header.php';
        ?>
    </head>
    <body class="font-Calibri">

        <!-- LOADER -->	
        <div id="loader-overflow">
            <div id="loader3" class="loader-cont">Favor de habilitar el uso de JavaScripts</div>
        </div>	
        <div id="loader-overflow" class="row">
            <div id="visita-dom" class="col-lg-3">
            <!-- EI8 -->
            <?php include_once '.\includes\ie8-unsoport.php'; ?>

            <!-- HEADER 1 FONT MONTSERRAT BLACK TRANSPARENT -->
            <header id="nav" class="header header-1 affix-on-mobile">
                <?php include_once '.\includes\menu-top.php'; ?>
                <!-- END header-wrapper -->                      
            </header>

            <!-- SLIDER Revo Hero 1 FONT MONTSERRAT no estÃ¡ funcionando sliders.php-->
            <?php include_once '.\includes\sliders.php'; ?>
            </div>
            
            <!-- VISITA DOMICILIARIA -->
            <div id="visita-dom" class="col-lg-9">
                <div class="container-fluid fes1-cont">
                    <div class="col-md-4 fes1-img-cont wow fadeInUp mb-20">
                        <!--<img src="images/dgonline/quienes-somos.png" alt="img" >-->
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="fes1-main-title-cont wow fadeInUp">
                            <div class="fes2-title-45 font-montserrat">
                                <strong>Visita Domiciliaria</strong>
                            </div>
                        </div>
                        <p class="text-left font-24">Se hace la visita al contribuyente, en la dirección y coordenadas proporcionadas.</p>
                        <p class="font-24"> <b>Contacto directo </b>.</p>
                    </div>
                </div>
            </div>
        </div>	
	
    <!-- JS begin -->
      <?php include_once './includes/footer.php'; ?>
    <?php include_once './includes/footer-files.php'; ?>
    <?php include_once './includes/footer-files-sliders.php'; ?>
</body>
</html>
