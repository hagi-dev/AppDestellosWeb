<?php 
// `sp_Customer`(`opcion` VARCHAR(20), `id` INT, `dni` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE,`idCliente` int)

require_once("../querys/QDireccion.php");

class Direccion {

    protected $id;
    protected $departamento;
    protected $provincia;
    protected $distrito;
    protected $direccion;
    protected $idCliente; 
    protected $QDireccion;

    function __construct($id,$departamento,$provincia,$distrito,$direccion,$idCliente){
        $this->id=$id;
        $this->departamento=$departamento;
        $this->provincia=$provincia;
        $this->distrito=$distrito;
        $this->direccion=$direccion;
        $this->idCliente=$idCliente;
        $this->QDireccion= new QDireccion();
    }

    public function getid(){
        return $this->id;
    }

    public function getdepartamento(){
        return $this->departamento;
    }

    public function getprovincia(){
        return $this->provincia;
    }

    public function getdistrito(){
        return $this->distrito;
    }

    public function getdireccion(){
        return $this->direccion;
    }

    public function getidCliente(){
        return $this->idCliente;
    }
    public function setid($id){
        return $this->id=$id;
    }

    public function setdepartamento($departamento){
        return $this->departamento=$departamento;
    }

    public function setprovincia($provincia){
        return $this->provincia=$provincia;
    }

    public function setdistrito($distrito){
        return $this->distrito=$distrito;
    }

    public function setdireccion($direccion){
        return $this->direccion=$direccion;
    }

    public function setidCliente($idCliente){
        return $this->idCliente=$idCliente;
    }

    public function insertarNuevo(){          
        $this->QDireccion->insertar($this->id,$this->departamento,$this->provincia,$this->distrito,$this->direccion,$this->idCliente);
    }

    public function actualizarDatosGeneral(){          
        $this->QDireccion->actualizarDatos($this->id,$this->departamento,$this->provincia,$this->distrito,$this->direccion);
    }
    public function EliminarDatos(){          
        $this->QDireccion->eliminar($this->id);
    }

    public function mostrarDatosIdCliente(){          
        $this->QDireccion->mostrarDatosPorId($this->idCliente);
    }

}

?>