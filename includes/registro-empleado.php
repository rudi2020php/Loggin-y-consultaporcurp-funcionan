<?php
extract($_POST);
include_once 'conexion.php';
include_once 'empleado.php';
include_once 'repositorioEmpleado.php';
include_once 'ValidadorEmpleado.php';

conexion::abrirConexion();
//echo "<pre>";print_r($_POST);
//die();
$obj = new validadorEmpleado();
$validador = $obj->validarDatos($_POST, Conexion::obtenerConexion());
//echo "<pre>";print_r($validador);
//die();
if ($validador["estatus"] == 1) {

    $usuario = new empleado($_POST['nombre'], $_POST['apellidoP'],$_POST['apellidoM'],$_POST['curp'], $_POST['rfc'],
            $_POST['direccion'], $_POST['telCasa'], $_POST['telMovil'], $_POST['telContacto'], $_POST['emailE'], $_POST['id_puesto'],
            $_POST['fechaN'], $_POST['fechaI'], $_POST['fechaB'], $_POST['nss'], $_POST['status'], $_POST['email'], $_POST['nombreC'],
            $_POST['tipoS'],);

    $insertar_empleado = repositorioEmpleado::insertarEmpleado(Conexion::obtenerConexion(), $usuario);
    if ($insertar_empleado) {
        $insertar_empleado = null;
        header("Location: ../index.php");
    } else {
        echo "no insertado";
    }
} else {
            echo $validador["mensaje"];
}
//secho json_encode($error);
Conexion::cerrarConexion();
?>

