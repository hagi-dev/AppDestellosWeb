<?php 
// `sp_Customer`(`opcion` VARCHAR(20), `id` INT, `dni` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE,`idCliente` int)

require_once("../querys/QPedido.php");

class Pedido {

    protected $id;
    protected $fechaPedido;
    protected $idCliente;
    protected $estado; 
    protected $QPedido;

    function __construct($data){
        // $this->id=$id;
        $this->id=$data['idPedido'];
        $this->idCliente=$data['idCliente'];
        $this->QPedido= new QPedido();
    }

    public function getid(){
        return $this->id;
    }

    public function getfechaPedido(){
        return $this->fechaPedido;
    }

    public function getidCliente(){
        return $this->idCliente;
    }

    public function setid($id){
        return $this->id=$id;
    }

    public function setfechaPedido($fechaPedido){
        return $this->fechaPedido=$fechaPedido;
    }

    public function setidCliente($idCliente){
        return $this->idCliente=$idCliente;
    }

    public function insertarNuevo(){          
        $this->QPedido->insertar($this->id,$this->idCliente);
    }
    public function mostrarDatosId(){          
        $this->QPedido->mostrarDatosPorId($this->id);
    }
    public function mostrarDatosIdCliente(){          
        return $this->QPedido->mostrarDatosPorIdCliente($this->idCliente);
    }
    public function EliminarDatos(){          
        $this->QPedido->eliminar($this->id);
    }

    public function mostrarDatosPedido(){          
        $this->QPedido->mostrarDatos();
    }

}

?>