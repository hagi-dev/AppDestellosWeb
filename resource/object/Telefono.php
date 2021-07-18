<?php 
// `sp_Customer`(`opcion` VARCHAR(20), `id` INT, `dni` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE,`idCliente` int)

require_once("../querys/QTelefono.php");

class Telefono {

    protected $id;
    protected $numero;
    protected $estado;
    protected $idCliente; 
    protected $QTelefono;

    function __construct($id,$numero,$idCliente){
        $this->id=$id;
        $this->numero=$numero;
        $this->idCliente=$idCliente;
        $this->QTelefono= new QTelefono();
    }

    public function getid(){
        return $this->id;
    }

    public function getnumero(){
        return $this->numero;
    }

    public function getidCliente(){
        return $this->idCliente;
    }
    public function setid($id){
        return $this->id=$id;
    }

    public function setnumero($numero){
        return $this->numero=$numero;
    }

    public function setidCliente($idCliente){
        return $this->idCliente=$idCliente;
    }

    public function mentenimientoTelefono($opcion){          
        $this->QTelefono->mantenimiento($opcion,$this->id,$this->numero,$this->idCliente);
    }
    public function mostrarDatosTelefono($opcion){          
        $this->QTelefono->mostrarDatos($opcion, $this->idCliente);
    }
}

?>