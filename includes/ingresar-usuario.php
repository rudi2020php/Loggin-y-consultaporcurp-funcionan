<?php
include_once 'conexion.php';
include_once 'usuario.php';
include_once 'repositorioUsuario.php';
include_once 'validadorLogin.php';

Conexion::abrirConexion();

$obj = new validadorLogin();
$validador = $obj->validarDatos($_POST, Conexion::obtenerConexion());

if ($validador["error"] == 3) {

//    echo " =Bienvenido = " .$validador["area"]." " .$validador["Usuario"]." " .$validador["pass"];
//    die();
    switch ($validador['area']) {
        case 32:
            header("Location: ../PhpHomeRH.php");
            break;
         case 29:
            header("Location: ../registro.php");
            break;
//        case 23:
//            header(".php");
//            break;
//          case 22:
//            header(".php");
//            break;

        default:
            header("Location: ../Mensajes.php");
            break;
    }
//    if ($validador['area'] == 32) {
//        header("Location: ../PhpHomeRH.php");
//    }
//    else{
//        header("Location: ../Mensajes.php");
//    }
   
} else {
//    print_r($validador);
//    echo $_POST['email'];
    echo $validador["mensaje"];
}
Conexion::cerrarConexion();
?>

