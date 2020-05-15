 <?php

class repositorioUsuario {

    public static function insertarUsuario($conexion, $usuario) {
        $usuarioInsertado = false;
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO acceso (curp, email, password, id_puesto) values (:curp, :Email, :password, :id_empleado)";

                $sentencia = $conexion->prepare($sql);
                extract($_POST);
                $pas = password_hash($password1, PASSWORD_DEFAULT);
                $sentencia->bindParam(':Email', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':curp', $CURP, PDO::PARAM_STR);
                $sentencia->bindParam(':password', $pas, PDO::PARAM_STR);
                $sentencia->bindParam(':id_empleado', $id_empleado, PDO::PARAM_STR);

                $usuarioInsertado = $sentencia->execute();

                $usuarioInsertado = true; //true
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
            }
        }
        return $usuarioInsertado; //true or false
    }

    public static function obtenerUsuarioEmail($conexion, $email) {
        $usuario = null;
        if (isset($conexion)) {
            try {
                include_once 'usuario.php';
                $sql = "SELECT * FROM acceso WHERE email = :email";

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                if (!empty($resultado)) {
                    $usuario = new usuario($resultado['curp'], $resultado['email'], $resultado['password'], $resultado['id_puesto']);
                }
                else{
//                    echo "<br/> usuario no existe";
                    header("Location: ../PhpLoggin.php");
                    die();
                }
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
                die();
            }
        }
        return $resultado;
    }

    public static function curpExiste($curp, $conexion) {

        $curpExiste = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM acceso WHERE curp = ?";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(1, $curp, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    $curpExiste = true;
                } else {
                    $curpExiste = false;
                }
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
            }
        }
        return $curpExiste;
    }
    public static function emailExiste($conexion, $email) {
        $emailExiste = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM acceso WHERE email = :email";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    $emailExiste = true;
                } else {
                    $emailExiste = false;
                }
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
            }
        }
        return $emailExiste;
    }
}
?>
