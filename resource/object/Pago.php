<?php 
// `sp_Customer`(`opcion` VARCHAR(20), `id` INT, `dni` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE,`idCliente` int)

require_once("../querys/QPago.php");

class Pago {

    protected $idPedido;
    protected $idTipo;
    protected $fechaPago;
    protected $importe;
    protected $importePagado;
    protected $idCliente; 
    protected $QPago;

    function __construct($idPedido,$idTipo,$fechaPago,$importe,$importePagado){
        $this->idPedido=$idPedido;
        $this->idTipo=$idTipo;
        $this->fechaPago=$fechaPago;
        $this->importe=$importe;
        $this->importePagado=$importePagado;
        $this->QPago= new QPago();
    }

    public function getidPedido(){
        return $this->idPedido;
    }

    public function getidTipo(){
        return $this->idTipo;
    }

    public function getfechaPago(){
        return $this->fechaPago;
    }

    public function getimporte(){
        return $this->importe;
    }

    public function getimportePagado(){
        return $this->importePagado;
    }

    public function setid($idPedido){
        return $this->idPedido=$idPedido;
    }

    public function setidTipo($idTipo){
        return $this->idTipo=$idTipo;
    }

    public function setfechaPago($fechaPago){
        return $this->fechaPago=$fechaPago;
    }

    public function setimporte($importe){
        return $this->importe=$importe;
    }

    public function setimportePagado($importePagado){
        return $this->importePagado=$importePagado;
    }


    public function insertarNuevo(){          
        $this->QPago->insertar($this->idPedido,$this->idTipo,$this->fechaPago,$this->importe,$this->importePagado);
    }
    public function mostrarId(){          
        $this->QPago->mostrarDatosPorId($this->idPedido);
    }
    public function mostrarIdCliente(){          
        $this->QPago->mostrarDatosPorIdCliente($this->idCliente);
    }
    public function mostrarDatosPagos(){          
        $this->QPago->mostrarDatos();
    }

}

?>