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
                    <div class="card-header bg-success">
                        <p> Bienvenido <?php echo $datos['rfc']; ?></p>
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
                    <!--                    <div class="card-footer bg-ligth">   
                                            <a href="datoUsuario.php" class="btn btn-outline-info"><span class="badge badge-pill badge-primary"> Configuración </span> </a>
                                        </div>-->
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
                    <a href="#" class="btn btn-outline-info d-block disabled"><span class="badge badge-pill badge-info">Empleado</span></a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="infraestructura/EquipoAsignado.php?id=<?php echo $datos['curp']; ?>" class="btn btn-outline-info d-block">Equipos</a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="permisos-accesos/permisosAsignados.php?id=<?php echo $datos['curp']; ?>" class="btn btn-outline-info d-block">Permisos autorizados</a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="herramientas/herramientasAsiganadas.php?id=<?php echo $datos['curp']; ?>" class="btn btn-outline-info d-block">Mis herramientas</a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="kit-papeleria/kitHigienico.php?id=<?php echo $datos['curp']; ?>" class="btn btn-outline-info d-block">Kit higienico </a>
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
            <div class="Container p-4">
                <div class = "row">
                         <div class="card card-body">
                            <form action ="includes/editar-empleado.php" method ="POST">
                                <div class="form-row">
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="curp" class ="form-control"
                                               placeholder="CURP" value="<?php echo $curp; ?>">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="nombre"  class ="form-control"
                                               placeholder="Nombre(s)" value="<?php echo $datos['nombre']; ?>">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="apellidoP" value="<?php echo $datos['apellido_paterno']; ?>" class ="form-control"
                                               placeholder="Apellido Paterno">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="apellidoM" value="<?php echo $datos['apellido_materno']; ?>" class ="form-control"
                                               placeholder="Apellido Materno">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="direccion" value="<?php echo $datos['direccion_empleado']; ?>" class ="form-control"
                                               placeholder="Direccion">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="email" class="form-control" value="<?php echo $datos['email_empresa']; ?>" name="email" placeholder="E-mail empresa">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="email" class="form-control" name="emailE"  value=" <?php echo $datos['email_personal']; ?>" placeholder="E-mail Empleado">
                                    </div> 
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="fechaI" value=" <?php echo $datos['fecha_ingreso']; ?>" class ="form-control"
                                               placeholder="Fecha ingreso">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="fechaB" value=" <?php echo $datos['fecha_baja']; ?>" class ="form-control"
                                               placeholder="Duración contrato">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="fechaN" value=" <?php echo $datos['fecha_nacimiento']; ?>" class ="form-control"
                                               placeholder="Fecha de Nacimiento">
                                    </div>
                                    <!--                    <div class="form-group col-md-6"> 
                                                            <select name="id_puesto" class="form-control" >
                                    <?php
                                    $puesto = $datos['id_puesto'];
                                    $registro = pg_query($conexion, "SELECT * FROM rh_puesto");
                                    while ($reg = pg_fetch_array($registro)) {
                                        ?>
                                                                        <option value=" <?php echo $datos['id_puesto'] ?>">
                                        <?php echo $reg['puesto']; ?>
                                                                        </option>   
<?php } ?>  
                                                            </select>
                                                        </div>-->
                                    <div class="form-group col-md-6">
                                        <!--<label for="inputState">Status</label>-->
                                        <select name="Puesto" class="form-control">
                                            <option selected><?php echo $datos['id_puesto']; ?></option>
                                            <option>Baja</option>
                                            <option>Baja Tempora</option>
                                            <option>Permiso sin goce de sueldo</option>
                                            <option>Suspendido</option>
                                            <option>Renovar Contrato</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="rfc" value=" <?php echo $datos['rfc']; ?>" class ="form-control"
                                               placeholder="RFC">
                                    </div>    
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="nss" value=" <?php echo $datos['nss']; ?>" class ="form-control"
                                               placeholder="Número de Seguro Social (NSS)">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="nombreC" value=" <?php echo $datos['nombre_contacto']; ?>" class ="form-control"
                                               placeholder="Nombre de Contactos/Familiar">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <!--<label for="inputState">Status</label>-->
                                        <select name="status" class="form-control">
                                            <option selected><?php echo $datos['status']; ?></option>
                                            <option>Baja</option>
                                            <option>Baja Tempora</option>
                                            <option>Permiso sin goce de sueldo</option>
                                            <option>Suspendido</option>
                                            <option>Renovar Contrato</option>
                                        </select>
                                    </div>

                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="telCasa" value=" <?php echo $datos['tel_casa']; ?>" class ="form-control"
                                               placeholder="Telefono de casa">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="telMovil" value=" <?php echo $datos['tel_movil']; ?>" class ="form-control"
                                               placeholder="Telefono Móvil">
                                    </div>
                                    <div class ="form-group col-md-6"> 
                                        <input type="text" name ="telContacto" value=" <?php echo $datos['tel_contacto']; ?>" class ="form-control"
                                               placeholder="Telefono Contacto/Familiar">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <!--<label for="inputState">Status</label>-->
                                        <select name="tipoS" class="form-control">
                                            <option selected><?php echo $datos['tipo_sangre']; ?></option>
                                            <option>(A-)</option>
                                            <option>(O+)</option>
                                            <option>(O-)</option>
                                        </select>
                                    </div>

                                    <input type="submit" class ="btn btn-success btn-block"
                                           name="update_" value="Edit">
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
