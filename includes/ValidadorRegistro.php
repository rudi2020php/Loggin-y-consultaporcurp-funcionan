<?php

include_once 'repositorioUsuario.php';

class validadorRegistro {

    private $CURP;
    private $email;
    private $password;
    private $id_empleado;
    private $erroCURP;
    private $erroremail;
    private $errorPassword1;
    private $errorPassword2;
    private $errorid_empleado;
    private $conexion;
    private $estatus;
    private $mensaje;
    private $br;

    //public function _construct($CURP, $email, $id_empleado, $password1, $password2, $conexion) {
    public function _construct() {
    }
    
    
    
    public function validarDatos($post, $conexion){
        $this->conexion = $conexion;
        $this->mensaje = "";
        $this->br = "<br/>";
        $this->estatus = 1;
//        if($conexion != null){
//            echo "Si hay conexion".$this->br;
//        }
        extract($_POST);
//        print_r($_POST);
//        die();
        if (!$this->variableIniciada($CURP)) {
            $this->mensaje .= "Ingrese su CURP por favor." . $this->br;
            $this->estatus=0;
        }        
        if (strlen($CURP) != 18) {
            $this->mensaje .= "El CURP debe contentener 18 caracteres [".strlen($CURP)."]".$this->br;
            $this->estatus=0;
        }        
        if (repositorioUsuario::curpExiste($CURP, $this->conexion)) {
            $this->mensaje .= "CURP ya está en USO, pongase en contacto con el administrador".$this->br;
            $this->estatus=0;
        }
        //validar email
        if (!$this->variableIniciada($email)) {
            $this->mensaje .= "Ingresa tú Correo electronico, por favor".$this->br;
            $this->estatus=0;
        } 
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            $this->mensaje .= "Este correo ($email) no es valido, ejemplo usuario@allie.mx".$this->br;
            $this->estatus=0;
        }
        if (repositorioUsuario::emailExiste($this->conexion, $email)) {
            $this->mensaje .= "El Correo ya se encuentra en USO".$this->br;
            $this->estatus=0;
        }
         if (!$this->variableIniciada($id_empleado)) {
            $this->mensaje .= "Ingresa el puesto del empleado".$this->br;
            $this->estatus=0;
        }
         if (!$this->variableIniciada($password1)) {
           $this->mensaje .= "Ingresá tú contraseña".$this->br;
           $this->estatus=0;
        }
        if (strlen($password1) < 6) {
            $this->mensaje .= "Por segurida la contraseña debe contener mínimo 6 caracteres".$this->br;
            $this->estatus=0;
        }
        if ($CURP === $password1) {
            $this->mensaje .= "Por seguridad tú contraseña no debe ser la CURP".$this->br;
            $this->estatus=0;
        }
        if (!$this->variableIniciada($password2)) {
             $this->mensaje .= "Confirme la contraseña".$this->br;
             $this->estatus=0;
        }
        if ($password1 !== $password2) {
            $this->mensaje .= "La contraseña NO coincide".$this->br;
            $this->estatus=0;
        }
        return  array(
            "mensaje"=>$this->mensaje,
            "estatus"=>$this->estatus
                );
    }
    
    //INICIAR VARIABLES
    private function variableIniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

    //GET VARIABLES
    public function obtenerCURP() {
        return $this->CURP;
    }

    public function obtenerEmail() {
        $this->email = $email;
        return $this->email;
    }

    public function obtenerid_empleado() {
        return $this->id_empleado;
    }

    public function obtenerPassword() {
        return $this->password;
    }

    public function obtenerErrorCURP() {
        return $this->erroCURP;
    }

    public function obtenerErrorEmail() {
        return $this->erroremail;
    }

    public function obtenerErrorid_empleado() {
        return $this->errorid_empleado;
    }

    public function obtenerErrorPassword1() {
        return $this->errorPassword1;
    }

    public function obtenerErrorPassword2() {
        return $this->errorPassword2;
    }

    public function registroValido() {
        if ($this->erroCURP === "" && $this->erroremail === "" && $this->errorid_empleado === "" && $this->errorPassword1 === "" && $this->errorPassword2 === "") {
            return true;
        } else {
            return false;
        }
    }
}
?>
