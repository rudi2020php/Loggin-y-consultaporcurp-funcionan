<?php

class validadorLogin {

    private $user;
    private $usuario;
    private $mensaje;
    private $error;
    private $contra;
    private $cla;
    private $area;

    public function validarDatos($post, $conexion) {
        $this->mensaje = "excelent";
        $this->error = 1;
        extract($_POST);
        try {

            if (!$this->variable_iniciada($email) || !$this->variable_iniciada($password)) {
                $this->usuario = null;
                $this->mensaje = "Sus datos ingresados no son correctos";
                $this->error = 0;
            } else {
                $user = repositorioUsuario::obtenerUsuarioEmail($conexion, $email);
            $this->cla = $user['curp'];
            $this->id_empleado = $user['id_puesto'];
            $this->contra = $user['password'];
//            echo $this ->contra;
//            die();  
                if (password_verify($password, $this->contra)) {                
                    $this->error = 3;
                }
                else{
                    $this->mensaje = "Contraseña incorrecta";
                }
            }
            return array(
                "mensaje" => $this->mensaje,
                "error" => $this->error,
                "Usuario" => $this->cla,
                "pass" => $this->contra,
                "area" => $this->id_empleado,
            );
        } catch (PDOException $ex) {
            print "Error " . $ex->getMessage() . "<br>";
        }
    }

    private function variable_iniciada($variable) {
        if (!isset($variable) && empty($variable)) {
            return false;
        } else {
            return true;
        }
    }
}
?>
