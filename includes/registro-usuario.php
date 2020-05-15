<?php
extract($_POST);
include_once 'conexion.php';
include_once 'usuario.php';
include_once 'repositorioUsuario.php';
include_once 'ValidadorRegistro.php';

conexion::abrirConexion();
//echo "<pre>";print_r($_POST);
//die();
$obj = new validadorRegistro();
$validador = $obj->validarDatos($_POST, Conexion::obtenerConexion());
//echo "<pre>";print_r($validador);
//die();
if ($validador["estatus"] == 1) {
//    extract($_POST);
//    print_r($_POST);
    $usuario = new usuario($_POST['CURP'], $_POST['email'],
            password_hash($_POST['password2'], PASSWORD_DEFAULT), $_POST['id_empleado']);
//    print_r($usuario);
//    die();
    $insertar_usuario = repositorioUsuario::insertarUsuario(Conexion::obtenerConexion(), $usuario);
    if ($insertar_usuario) {//VACIA LA VARIABLE LOCAL $insertar_usuario, Y REDIRECCIONA A LA MISMA PÁGINA.
        $insertar_usuario = null;
        include '../registro.php';
//        include_once '../registro.php';
    } else {
        echo "no insertado";
    }
} else {
            echo $validador["mensaje"];
}
//secho json_encode($error);
Conexion::cerrarConexion();
?>

