<?php
class empleado{
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
    
    public function __construct($nombre, $apellido_paterno, $apellido_materno, $curp, $rfc, $direccion_empleado, $tel_casa, $tel_movil, 
            $tel_contacto, $email_personal, $id_puesto, $fecha_nacimiento, $fecha_ingreso, $fecha_baja, $nss, $status, $email_empresa,
            $nombre_contacto, $tipo_sangre) { //El orden de los campos debe ser el mismo al de la tabla origen

        $this->curp = $curp;
        $this->nombre = $nombre;
        $this->apellidop = $apellido_paterno;
        $this->apellidom = $apellido_materno;
        $this->direccion = $direccion_empleado;
        $this->email = $email_empresa;
        $this->emaile = $email_personal;
        $this->fechain = $fecha_ingreso;
        $this->fechab = $fecha_baja;
        $this->fechaN = $fecha_nacimiento;
        $this->id_puesto = $id_puesto;
        $this->rfc = $rfc;
        $this->nss = $nss;
        $this->nombreC = $nombre_contacto;
        $this->telC = $tel_contacto;
        $this->status = $status;
        $this->telCasa = $tel_casa;
        $this->tipoS = $tipo_sangre;
    }
    
    public function obtenerCurp() {
        return $this->curp;
    }
     public function obtenerNombre() {
        return $this->nombre;
    }
      public function obtenerApellidoP() {
        return $this->apellidop;
    }
      public function obtenerApellidoM() {
        return $this->apellidom;
    }
      public function obtenerDireccion() {
        return $this->direccion;
    }
    public function obtenerEmailempleado() {
        return $this->email_personal;
    }
    public function obtenerEmailempresa() {
        return $this->email;
    }
     public function obtenerFechaNac() {
        return $this->fechaN;
    }
     public function obtenerfechaIn() {
        return $this->fechain;
    }
     public function obtenerfechaBa() {
        return $this->fechab;
    }
        public function obtenerIdPuesto() {
        return $this->id_puesto;
    }
    public function obtenerrfc() {
        return $this->rfc;
    }
    public function obtenerNSS() {
        return $this->nss;
    }
    public function obtenerNombreC() {
        return $this->nombreC;
    }
        public function obtenerTelefonoCasa() {
        return $this->telCasa;
    }
        public function obtenerTelenofoConta() {
        return $this->telC;
    }
         public function obtenerStatus() {
        return $this->status;
    }
         public function obtenerTipoSang() {
        return $this->tipoS;
    }
}
?>