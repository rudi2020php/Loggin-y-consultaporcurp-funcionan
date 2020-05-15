<?php
include_once "includes/conexion.php";
include_once "includes/header.php";
include_once 'includes/repositorioEmpleado.php';
include_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
if (isset($_GET['id'])) {
    $curp = $_GET['id'];
//    echo $curp;
//    die();
    $con = new repositorioEmpleado();
    $datos = $con->obtenerEmpleadoCurp(Conexion::obtenerConexion(), $curp);
}
?>

<!--   CONTENEDOR PRINCIPAL-->
<div class="container-fluid">
    <!--    FILA UNO
        <div class="row pt-2">   
    
            CREAMOS COLUMNA UNO DE FILA UNO
            <div class="col-7">
                <img src="images/imgr/logo.jpg" class="img-thumbnail w-100 h-75" alt="RH"/>
            </div>FIN DE LA COLUMNA UNO DE LA FILA UNO
    
            CREAMOS COLUMNA DOS DE FILA UNO
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
            </div>FIN DE LA COLUMNA DOS DE LA FILA UNO
    
            CREAMOS COLUMNA TRES DE FILA UNO
            <div class="col-2">
                <div class="row justify-content-center">   
                    TARJETA
                    <div class="card">
                        <div class="card-header bg-success">
                            <p> Bienvenido</p>
                        </div>
                        <div class="card-body bg-ligth">
                            <div class="row">
                                <div class="col-4">   
                                    <img src="images/imgr/accesoAutorzado.png" width="50" height="50" alt="iniciarSesion"/>
                                </div>
                                <div class="col-5">   
                                    <a href="datoUsuario.php" class="btn btn-outline-info"><span class="badge badge-pill badge-primary"> Configuración </span> </a>
                                </div>
                            </div>
                        </div>
                                            <div class="card-footer bg-ligth">   
                                                <a href="datoUsuario.php" class="btn btn-outline-info"><span class="badge badge-pill badge-primary"> Configuración </span> </a>
                                            </div>
                    </div> FIN DE LA TARJETA
                </div>
               <a href="login.php" class="img-fluid"><span class="badge badge-pill badge-primary"> Iniciar Sesion</span> </a>
            </div>FIN DE LA COLUMNA TRES DE LA FILA UNO
    
        </div> FIN FILA UNO-->

    <!--FILA DOS-->
    <div class="row">   
        <!--COLUMNA UNO FILA DOS-->
        <!--        <div class="col-4">
                    <br>
                    <br>
                    BARRA DE PROGRESO
                                <div class="progress" style="heigth:50px;">
                                    <div class="progress-bar w-50 bg-success progress-bar-striped progress-bar-animated"> 50% datos personales </div>
                                    <div class="progress-bar w-50 bg-danger progress-bar-striped progress-bar-animated"> 50% Equipo y Herramientas </div>
                                </div>
        
                    <div class="row badge-success justify-content-center"> <h5>   Menú de Opciones
                        </h5></div>
                    <br>
                    <br>
                                HACER EL MENU CON BOTONES
                                    <div class="btn btn-group-vertical">
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
                                </div>
        
                       HACER EL MENU CON ENLACES
                    <div class="row"> 
                        <div class="col-12">
                            <a href="#" class="btn btn-outline-info d-block disabled"><span class="badge badge-pill badge-info">Empleado</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="row"> 
                        <div class="col-12">
                            <a href="#" class="btn btn-outline-info d-block disabled">Equipos</a>
                        </div>
                    </div>
                    <br>
                    <div class="row"> 
                        <div class="col-12">
                            <a href="#" class="btn btn-outline-info d-block disabled">Permisos autorizados</a>
                        </div>
                    </div>
                    <br>
                    <div class="row"> 
                        <div class="col-12">
                            <a href="#" class="btn btn-outline-info d-block disabled">Mis herramientas</a>
                        </div>
                    </div>
                    <br>
                    <div class="row"> 
                        <div class="col-12">
                            <a href="#" class="btn btn-outline-info d-block disabled">Kit higienico </a>
                        </div>
                    </div>
                    <br>
                    <div class="row"> 
                        <div class="col-12">
                            <a href="#" class="btn btn-outline-info d-block disabled">Papeleria </a>
                        </div>
                    </div>
                </div> -->
        <!-- FIN COLUMNA UNO FILA DOS-->
        <!--COLUMNA DOS FILA DOS-->
        <div class="col-8">
            <div class="Container p-4">
                <h1 class="text-center text-primary"> **- Registrate -**</h1>
                <div class = "row">
                    <div class="card card-body">
                        <form action ="includes/registro-empleado.php" method ="POST">
                            <div class="form-row">
                                <div class ="form-group col-md-6"> 
                                    <input type="text" name ="curp" class ="form-control"
                                           placeholder="CURP">
                                </div>
                                <div class ="form-group col-md-6"> 
                                    <input type="text" name ="nombre"  class ="form-control"
                                           placeholder="Nombre(s)">
                                </div>
                                <div class ="form-group col-md-6"> 
                                    <input type="text" name ="apellidoP" class ="form-control"
                                           placeholder="Apellido Paterno">
                                </div>
                                <div class ="form-group col-md-6"> 
                                    <input type="text" name ="apellidoM" class ="form-control"
                                           placeholder="Apellido Materno">
                                </div>
                                <div c <div class ="form-group col-md-6"> 
                                    <input type="text" name ="rfc" class ="form-control"
                                           placeholder="RFC">
                                </div> 
                                <div class ="form-group col-md-6"> 
                                    <input type="text" name ="nss" class ="form-control"
                                           placeholder="Número de Seguro Social (NSS)">
                                </div>
                                <!--                                    <div class ="form-group col-md-6"> 
                                                                        <input type="text" name ="direccion" class ="form-control"
                                                                               placeholder="Direccion">
                                                                    </div>-->
                                <!--                                    <div class ="form-group col-md-6"> 
                                                                        <input type="email" class="form-control" name="email" placeholder="E-mail empresa">
                                                                    </div>-->
                                <div class ="form-group col-md-6"> 
                                    <input type="email" class="form-control" name="emailE" placeholder="E-mail">
                                </div> 
                                <div class ="form-group col-md-6"> 
                                    <input type="text" name ="telMovil" class ="form-control"
                                           placeholder="Telefono Móvil">
                                </div>
                                  <div class="form-group col-md-6">
                                    <!--<label for="inputState">Status</label>-->
                                    <select name="Puesto" class="form-control">
                                        <option selected>Universitario</option>
                                        <option>Técnico Superior Universitario</option>
                                        <option>Media Superior</option>
                                        <option>Básico</option>
                                        <option>Primaria</option>
                                    </select>
                                </div>
                                   <div class="form-group col-md-6"> 
                                    <select name="id_puesto" class="form-control" >
                                        <?php
//                                            $puesto = $datos['id_puesto'];
                                        $registro = pg_query($conexion, "SELECT * FROM rh_puesto");
                                        while ($reg = pg_fetch_array($registro)) {
                                            ?>
                                            <option value=" <?php echo $reg['id_puesto'] ?>">
                                                <?php echo $reg['puesto']; ?>
                                            </option>   
                                        <?php } ?>  
                                    </select>
                                </div>
                            </div>
                                <!--                                    <div class ="form-group col-md-6"> 
                                                                        <input type="text" name ="fechaI"  class ="form-control"
                                                                               placeholder="Fecha ingreso">
                                                                    </div>-->
                                <!--                                    <div class ="form-group col-md-6"> 
                                                                        <input type="text" name ="fechaB" class ="form-control"
                                                                               placeholder="Fecha fin de contrato">
                                                                    </div>-->
                             

                            <div class="form-row">
                                  <div class ="form-group col-md-6"> 
                                    <input type="text" name ="fechaN" class ="form-control"
                                           placeholder="Fecha de Nacimiento">
                                </div>



                                <div class ="form-group col-md-6"> 
                                    <input type="text" name ="nombreC" class ="form-control"
                                           placeholder="Como te enteraste?">
                                </div>
<!--                                <div class="form-group col-md-6">
                                    <label for="inputState">Status</label>
                                    <select name="status" class="form-control">
                                        <option selected>ACTIVO</option>
                                        <option>Baja</option>
                                        <option>Baja Tempora</option>
                                        <option>Permiso sin goce de sueldo</option>
                                        <option>Suspendido</option>
                                        <option>Renovar Contrato</option>
                                    </select>
                                </div>

                                <div class ="form-group col-md-6"> 
                                    <input type="text" name ="telCasa" class ="form-control"
                                           placeholder="Telefono de casa">
                                </div>

                                <div class ="form-group col-md-6"> 
                                    <input type="text" name ="telContacto" class ="form-control"
                                           placeholder="Telefono Contacto/Familiar">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">Status</label>
                                    <select name="tipoS" class="form-control">
                                        <option selected>(A+)</option>
                                        <option>(A-)</option>
                                        <option>(O+)</option>
                                        <option>(O-)</option>
                                    </select>
                                </div>-->

                                <input type="submit" class ="btn btn-success btn-block"
                                       name="update_" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>

    </div> <!-- FIN FILA DOS-->
    <!--FILA TRES-->
    <div class="row">   
        <!--<p> Selecciona IDIOMA ====  <a href="#">Ingles</a> ====  <a href="#">Portugues</a></p>-->

    </div> <!-- FIN FILA TRES-->

</div><!-- FIN DEL CONTENEDOR PRINCIPAL-->
<?php require_once 'includes/footer.php'; ?>