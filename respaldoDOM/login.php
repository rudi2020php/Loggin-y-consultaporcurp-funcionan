<?php include_once "includes/header.php" ?>
<!--formulario loggin-->

<div class="container p-5">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card card-body">
                <form action="includes/ingresar-usuario.php" method="POST">  
                    <div class="panel-heading text-center" class="col-md-5 mx-auto">
                        <h2>== LOGGIN ==</h2>
                    </div>
                    <div class="panel-body">
                        <h4>E-mail: </h4>
                        <input type:="text" class="form-control" name="email" placeholder="Usuario"><br>
                        <h4>Password: </h4>
                        <input type="password" name="password" class="form-control" placeholder="Password">   <br>                 
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary"> Ingresar </button>
                        <!--<button class="btn btn-default" onclick="window.location.href = 'registro.php'"> Registrar </button>-->
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
<?php include_once "includes/footer.php" ?>