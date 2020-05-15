<?php

include_once 'repositorioEmpleado.php';

class validadorEmpleado {

    private $curp;
    private $nombre;
    private $apellidop;
    private $apellidom;
    private $direccion;
    private $email;
    private $emaile;
    private $fechain;
    private $fechab;
    private $fechaN;
    private $id_empleado;
    private $rfc;
    private $nss;
    private $nombreC;
    private $telC;
    private $status;
    private $telCasa;
    private $tipoS;
    
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
        if (!$this->variableIniciada($curp)) {
            $this->mensaje .= "Ingrese su CURP por favor." . $this->br;
            $this->estatus=0;
        }        
        if (strlen($curp) != 18) {
            $this->mensaje .= "El CURP debe contentener 18 caracteres [".strlen($curp)."]".$this->br;
            $this->estatus=0;
        }        
        if (repositorioEmpleado::curpExiste($curp, $this->conexion)) {
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
        if (repositorioEmpleado::emailExiste($this->conexion, $email)) {
            $this->mensaje .= "El Correo ya se encuentra en USO".$this->br;
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
}
?>


