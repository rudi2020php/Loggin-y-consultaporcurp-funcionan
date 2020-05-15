<?php
include_once "includes/header.php";
include_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
?>
<!--formulario registro usuario-->
<div class="container p-6">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body">
                 <div class="panel-heading text-center">
                <h2>== REGISTRO USUARIO ==</h2>
            </div>
                <form action="includes/registro-usuario.php" method="POST">  
                    <div class="panel-body">
                        <h4>CURP: </h4>
                        <input type="text" class="form-control" name="CURP" required><br>
                        <h4>Usuario: </h4>
                        <input type="email" class="form-control" name="email" required><br>
                        <h4>Puesto: </h4>
                        <select name="id_empleado" id="rh_empleado" class="form-control" required>
                        <?php
                        $registro = pg_query($conexion, "SELECT * FROM rh_puesto");
                        while ($reg = pg_fetch_array($registro)) {
                            ?>
                            <option value=" <?php echo $reg['id_puesto'] ?>">
                                <?php echo $reg['puesto']; ?>
                            </option>   
                        <?php } ?>  
                    </select> 
                        <br>
                        <h4>Password: </h4>
                        <input type="password" class="form-control" name="password1"> <br>
                        <h4>Repite Password: </h4>
                        <input type="password" class="form-control" name="password2" placeholder="repite el password"> <br>
                    </div>
                    <div cla="panel-footer">
                        <button type="submit" class="btn btn-warning"> Registrar </button>
                        <button type="button" onclick="window.location.href = 'login.php'" class="btn btn-default"> Ingresar </button>
                    </div>
                </form>
            </div>                   
        </div>
    </div>    
</div>
<?php
include_once "includes/footer.php";
  pg_close($conexion);
?>