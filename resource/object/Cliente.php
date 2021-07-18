<?php 
// `sp_Customer`(`opcion` VARCHAR(20), `id` INT, `dni` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE,`estado` int)

require_once("../querys/QCliente.php");

class Cliente {

    protected $id;
    protected $dni;
    protected $nombre;
    protected $apellidos;
    protected $sexo;
    protected $fechaNacimiento;
    protected $QCliente;

    function __construct($id,$dni,$nombre,$apellidos,$sexo,$fechaNacimiento){
        $this->id=$id;
        $this->dni=$dni;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->sexo=$sexo;
        $this->fechaNacimiento=$fechaNacimiento;
        $this->QCliente= new QCliente();
    }

    public function getid(){
        return $this->id;
    }

    public function setid($id){
        $this->id=$id;
    }


    public function getdni(){
        return $this->dni;
    }

    public function getnombre(){
        return $this->nombre;
    }

    public function getapellidos(){
        return $this->apellidos;
    }

    public function getsexo(){
        return $this->sexo;
    }

    public function getfechaNacimento(){
        return $this->fechaNacimento;
    }

    public function setdni($dni){
        return $this->dni=$dni;
    }

    public function setnombre($nombre){
        return $this->nombre=$nombre;
    }

    public function setapellidos($apellidos){
        return $this->apellidos=$apellidos;
    }

    public function setsexo($sexo){
        return $this->sexo=$sexo;
    }

    public function setfechaNacimento($fechaNacimiento){
        return $this->fechaNacimento=$fechaNacimiento;
    }

    public function insertarNuevo(){          
        $this->QCliente->insertar($this->id,$this->dni,$this->nombre,$this->apellidos,$this->sexo,$this->fechaNacimiento);
    }
    public function actualizarDatosFaltantes(){          
        $this->QCliente->actualizarDatosFaltantes($this->id,$this->dni,$this->sexo,$this->fechaNacimiento);
    }
    public function actualizarDatosGeneral(){          
        $this->QCliente->actualizarDatos($this->id,$this->dni,$this->nombre,$this->apellidos,$this->sexo,$this->fechaNacimiento);
    }
    public function EliminarDatos(){          
        $this->QCliente->eliminar($this->id);
    }

    public function mostrarDatosId(){
        $this->QCliente->mostrarDatosPorId($this->id);
    }

    public function mostrarDatos(){
        $this->QCliente->mostrarDatos();
    }

}

?>