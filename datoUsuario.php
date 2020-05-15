<?php
include_once "includes/conexion.php";
include_once "includes/header.php";
include_once 'includes/repositorioEmpleado.php';
include_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
if (isset($_POST['save_'])) {
    $curp = $_POST['curp'];
          $con = new repositorioEmpleado();
        $datos = $con->obtenerEmpleadoCurp(Conexion::obtenerConexion(), $curp);
}
?>

<?php require_once 'includes/header.php'; ?>

<!--   CONTENEDOR PRINCIPAL-->
<div class="container-fluid">
      <!--FILA UNO-->
    <div class="row pt-2">   

        <!--CREAMOS COLUMNA UNO DE FILA UNO-->
        <div class="col-5">
            <img src="images/imgr/logo.jpg" class="img-thumbnail" alt="RH"/>
        </div><!--FIN DE LA COLUMNA UNO DE LA FILA UNO-->

        <!--CREAMOS COLUMNA DOS DE FILA UNO-->
        <div class="col-3">

            <form action ="datoEmpleado.php" method ="POST" class="row">
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

<!--<h4><?php echo date('D-M-Y'); ?></h1>-->
            <button type="button" class="btn btn-success"> Fecha : <span class="badge badge-pill badge-light"><?php echo date('D-M-Y'); ?></span>   </button>
        </div><!--FIN DE LA COLUMNA DOS DE LA FILA UNO-->

        <!--CREAMOS COLUMNA TRES DE FILA UNO-->
        <div class="col-4">
            <div class="row justify-content-end">   
                <!--TARJETA-->
                <div class="card w-50">
                    <div class="card-header bg-warning">
                        <p> Loggin </p>
                    </div>
                    <div class="card-body bg-ligth">
                        <a href="PhpLoggin.php" class="img-fluid"><span class="badge badge-pill badge-primary"> iniciar Sesion</span> </a>
                    </div>
                    <div class="card-footer bg-primary">   

                    </div>
                </div>
            </div><!-- FIN DE LA FILA-->
           <!--<a href="login.php" class="img-fluid"><span class="badge badge-pill badge-primary"> Iniciar Sesion</span> </a>-->
        </div><!--FIN DE LA COLUMNA TRES DE LA FILA UNO-->

    </div><!-- FIN FILA UNO-->

    <!--FILA DOS-->
    <div class="row">   
        <!--COLUMNA UNO FILA DOS-->
        <div class="col-4">
            <!--BARRA DE PROGRESO-->
            <div class="progress" style="heigth:50px;">
                <div class="progress-bar w-50 bg-success progress-bar-striped progress-bar-animated"> 50% datos personales </div>
                <div class="progress-bar w-50 bg-danger progress-bar-striped progress-bar-animated"> 50% Equipo y Herramientas </div>
            </div>
            <br>
            <br>
            <div class="row"> <h5>   Menú de Opciones
            </h5></div>
            <br>
            <br>
<!--            HACER EL MENU CON BOTONES
-->            <div class="btn btn-group-vertical">
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
            
            <!--HACER EL MENU CON ENLACES-->
            <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info">Empleado</a>
                    </div>
            </div>
            <br>
             <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info">Equipo</a>
                    </div>
            </div>
            <br>
             <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info">Permisos</a>
                    </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info">Herramientas</a>
                    </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-12">
                    <a href="#" class="btn btn-outline-info">Kit</a>
                    </div>
            </div>
        </div>
        <!--COLUMNA DOS FILA DOS-->
        <div class="col-8">
            <!--TARJETA-->
            <div class="card w-50">
                <h2> Empleado</h2>
                <div class="card-header bg-success">
                    <p>Nombre : <?php echo $datos['nombre'];?> <?php echo $datos['apellido_paterno'];?> <?php echo $datos['apellido_materno'];?></p>
                </div>
                <div class="card-body bg-info">
                    <p>RFC : <?php echo $datos['rfc'];?> <br> NSS:  <?php echo $datos['nss'];?> <br> Cel.: <?php echo $datos['tel_movil'];?></p>
                    
                </div>
                <div class="card-footer bg-warning">   
                    <p> Debes <a href="PhpLoggin.php"> <span>  Iniciar Sesion </span></a>para alterar tú registro<p>
 <!--<a href="datosEmpleado.php?id=<?php echo $datos['curp'];?>" class="img-fluid"><span class="badge badge-pill badge-primary"> Editar Empleado</span> </a>-->
            </div>
        </div>

    </div> <!-- FIN FILA DOS-->
    <!--FILA TRES-->
    <div class="row">   
        <!--<p> Selecciona IDIOMA ====  <a href="#">Ingles</a> ====  <a href="#">Portugues</a></p>-->

    </div> <!-- FIN FILA TRES-->

</div><!-- FIN DEL CONTENEDOR PRINCIPAL-->

<div class="Container p-4">
    <div class = "row">
<!--        <div class = "col">
            <?php
            if (isset($_SESSION['message'])) {
                ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset();
            }
            ?>
            <div class="card card-body">
                FORMULARIO CON VALORES PRECARGADOS
                <form action ="includes/registro-empleado.php" method ="POST">
            <div class="form-row">
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="curp" class ="form-control"
                               placeholder="CURP" value="<?php echo $curp;?>">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="nombre"  class ="form-control"
                               placeholder="Nombre(s)" value="<?php echo $datos['nombre'];?>">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="apellidoP" value="<?php echo $datos['apellido_paterno'];?>" class ="form-control"
                               placeholder="Apellido Paterno">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="apellidoM" value="<?php echo $datos['apellido_materno'];?>" class ="form-control"
                               placeholder="Apellido Materno">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="direccion" value="<?php echo $datos['direccion_empleado'];?>" class ="form-control"
                               placeholder="Direccion">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="email" class="form-control" value="<?php echo $datos['email_empresa'];?>" name="email" placeholder="E-mail empresa">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="email" class="form-control" name="emailE"  value=" <?php echo $datos['email_personal'];?>" placeholder="E-mail Empleado">
                    </div> 
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="fechaI" value=" <?php echo $datos['fecha_ingreso'];?>" class ="form-control"
                               placeholder="Fecha ingreso">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="fechaB" value=" <?php echo $datos['fecha_baja'];?>" class ="form-control"
                               placeholder="Duración contrato">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="fechaN" value=" <?php echo $datos['fecha_nacimiento'];?>" class ="form-control"
                               placeholder="Fecha de Nacimiento">
                    </div>
                    <div class="form-group col-md-6"> 
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
                    </div>
 <div class="form-group col-md-6">
                        <label for="inputState">Status</label>
                        <select name="Puesto" class="form-control">
                            <option selected><?php echo $datos['id_puesto'];?></option>
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
                        <input type="text" name ="rfc" value=" <?php echo $datos['rfc'];?>" class ="form-control"
                               placeholder="RFC">
                    </div>    
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="nss" value=" <?php echo $datos['nss'];?>" class ="form-control"
                               placeholder="Número de Seguro Social (NSS)">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="nombreC" value=" <?php echo $datos['nombre_contacto'];?>" class ="form-control"
                               placeholder="Nombre de Contactos/Familiar">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Status</label>
                        <select name="status" class="form-control">
                            <option selected><?php echo $datos['status'];?></option>
                            <option>Baja</option>
                            <option>Baja Tempora</option>
                            <option>Permiso sin goce de sueldo</option>
                            <option>Suspendido</option>
                            <option>Renovar Contrato</option>
                        </select>
                    </div>
                    
                     <div class ="form-group col-md-6"> 
                        <input type="text" name ="telCasa" value=" <?php echo $datos['tel_casa'];?>" class ="form-control"
                               placeholder="Telefono de casa">
                    </div>
                    <div class ="form-group col-md-6"> 
                        <input type="text" name ="telMovil" value=" <?php echo $datos['tel_movil'];?>" class ="form-control"
                               placeholder="Telefono Móvil">
                    </div>
                      <div class ="form-group col-md-6"> 
                        <input type="text" name ="telContacto" value=" <?php echo $datos['tel_contacto'];?>" class ="form-control"
                               placeholder="Telefono Contacto/Familiar">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Status</label>
                        <select name="tipoS" class="form-control">
                            <option selected><?php echo $datos['tipo_sangre'];?></option>
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
        </div>-->
    </div>    
</div>   
<?php include_once "INCLUDES/footer.php" ?>