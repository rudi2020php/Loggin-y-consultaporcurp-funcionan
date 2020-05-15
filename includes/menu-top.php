<div class="card card-body">
    <form action ="datosEmpleado.php" method ="POST">
        <div class="main-menu-container">
            <div class ="form-group"> 
                <input type="text" name ="curp" class ="form-control"
                       placeholder="CURP del empleado" autofocus>
            </div>
            <input type="submit" class ="btn btn-success btn-block"
                   name="save_" value="Search">
        </div>
    </form>
</div>
<!-- SEARCH READ DOCUMENTATION -->
<ul class="cd-header-buttons" style="display: none;">
    <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
</ul> <!-- cd-header-buttons -->
    <div id="cd-search" class="cd-search" style="display: none;">
       <input type="text" value="" name="q" id="q" placeholder="Search...">
    </div>

</div>