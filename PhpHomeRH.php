<?php
include_once "includes/conexion.php";
include_once "includes/header.php";
include_once 'includes/repositorioEmpleado.php';
include_once 'includes/Config.php';
//$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
//$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
//if (isset($_POST['save_'])) {
//    $curp = $_POST['id'];
//          $con = new repositorioEmpleado();
//        $datos = $con->obtenerEmpleadoCurp(Conexion::obtenerConexion(), $curp);
//        echo $curp;
//}
?>
<!--   CONTENEDOR PRINCIPAL-->
<div class="container-fluid">
    <!--FILA UNO-->
    <div class="row pt-2">   

        <!--CREAMOS COLUMNA UNO DE FILA UNO-->
        <div class="col-7">
            <img src="images/imgr/logo.jpg" class="img-thumbnail w-100 h-75" alt="RH"/>
        </div><!--FIN DE LA COLUMNA UNO DE LA FILA UNO-->

        <!--CREAMOS COLUMNA DOS DE FILA UNO-->
        <div class="col-3">

            <form action ="datosEmpleadoR.php" method ="POST" class="row">
                <div class ="col-md-8 form-group"> 
                    <input type="text" name ="curp" class ="form-control"
                           placeholder="CURP del empleado" autofocus required>
                </div>
                <div class ="col-md-4 form-group"> 
                    <input type="submit" class ="btn btn-outline-info btn-block"
                           name="save_" value="Search">
                </div>
            </form>
            <br>

            <button type="button" class="btn btn-success"> Fecha : <span class="badge badge-pill badge-light"><?php echo date('D-M-Y'); ?></span></button>
        </div><!--FIN DE LA COLUMNA DOS DE LA FILA UNO-->

        <!--CREAMOS COLUMNA TRES DE FILA UNO-->
        <div class="col-2">
            <div class="row justify-content-center">   
                <!--TARJETA-->
                <div class="card">

                    <div class="card-body bg-ligth">
                        <img src="images/imgr/accesoAutorzado.png" width="50" height="50" alt="iniciarSesion"/>
                    </div>
                    <div class="card-footer bg-ligth">   
                        <a href="datoUsuario.php" class="img-fluid"><span class="badge badge-pill badge-primary"> Configuración </span> </a>
                    </div>
                </div><!-- FIN DE LA TARJETA-->
            </div>
           <!--<a href="login.php" class="img-fluid"><span class="badge badge-pill badge-primary"> Iniciar Sesion</span> </a>-->
        </div><!--FIN DE LA COLUMNA TRES DE LA FILA UNO-->

    </div><!-- FIN FILA UNO-->

    <!--FILA DOS-->
    <div class="row">   
        <!--COLUMNA UNO FILA DOS-->
        <div class="col-4">
            <br>
            <br>
            <!--BARRA DE PROGRESO-->
            <!--            <div class="progress" style="heigth:50px;">
                            <div class="progress-bar w-50 bg-success progress-bar-striped progress-bar-animated"> 50% datos personales </div>
                            <div class="progress-bar w-50 bg-danger progress-bar-striped progress-bar-animated"> 50% Equipo y Herramientas </div>
                        </div>-->

            <div class="row badge-success justify-content-center"> <h5>   Menú de Opciones
                </h5></div>
            <br>
            <!--            HACER EL MENU CON BOTONES-->
            <!--                <div class="btn btn-group-vertical">
                            <button type="button" class="btn btn-info"> Empleado</button> 
                            <div class="btn-group-vertical">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"> Asignacion de equipo y material</button> 
                                <div class="dropdown-menu">   
                                    <a href="#" class="dropdown-item">Equipo</a>
                                    <a href="#" class="dropdown-item">Acceso</a>
                                    <a href="#" class="dropdown-item">Herramienta</a>
                                    <a href="#" class="dropdown-item">Kit</a>
                                </div>
                            </div>   
                        </div>-->

               <!--HACER EL MENU CON ENLACES-->
            <div class="row"> 
                <div class="col-12">
                    <a href="PhpHomeRH.php" class="btn btn-outline-info d-block">Mis datos</a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info d-block">Mis equipos</a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info d-block">Mis accesos</a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info d-block">Mis herramientas</a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info d-block">Kit higienico </a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info d-block">Papeleria </a>
                </div>
            </div>
        </div> <!-- FIN COLUMNA UNO FILA DOS-->
        <!--COLUMNA DOS FILA DOS-->
        <div class="col-8">
             <div class="row justify-content-center text-success bg-ligth">   
             <h5> Menú principal de : </h5><?php echo "-------------"?>
            <h3> Gerente de Recursos Humanos</h3>
            </div>
            <img src="images/imgr/nosotros.jpg" class="img-thumbnail    w-100 h-75">
        </div>
    </div> <!-- FIN FILA DOS-->
    <!--FILA TRES-->
    <div class="row">   
        <!--<p> Selecciona IDIOMA ====  <a href="#">Ingles</a> ====  <a href="#">Portugues</a></p>-->

    </div> <!-- FIN FILA TRES-->

</div><!-- FIN DEL CONTENEDOR PRINCIPAL-->
<?php require_once 'includes/footer.php'; ?>