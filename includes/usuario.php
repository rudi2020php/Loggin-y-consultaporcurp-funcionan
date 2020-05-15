<?php
class usuario{
    private $curp;
    private $email;
    private $password;
    private $id_empleado;
    
    public function __construct($curp, $email, $password, $id_puesto) { //El orden de los campos debe ser el mismo al de la tabla origen
        
        $this->curp = $curp;
        $this->email = $email;   
        $this->password = $password; 
        $this->id_empleado = $id_puesto; 
    }
    
    public function obtenerCurp() {
        return $this->curp;
    }
    public function obtenerEmail() {
        return $this->email;
    }
     public function obtenerPassword() {
        return $this->password;
    }
        public function obtenerIdEmpleado() {
        return $this->id_empleado;
    }
     
    public function log($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }
}
?>

