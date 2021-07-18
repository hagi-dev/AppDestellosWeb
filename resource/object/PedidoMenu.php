<?php 
// `sp_Customer`(`opcion` VARCHAR(20), `id` INT, `dni` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE,`idCliente` int)

require_once("../querys/QPedidoMenu.php");

class PedidoMenu {

    protected $idPedido;
    protected $idMenu;
    protected $fechaPedido;
    protected $cantidad;
    protected $importe;
    protected $precioVenta;
    protected $valoracion;
    protected $QPedidoMenu;

    function __construct($data){
        $this->idPedido=$data['idPedido'];
        $this->idMenu= $data['idMenu'];
        $this->cantidad=$data['cantidad'];
        $this->importe=$data['importe'];
        $this->precioVenta=$data['precioVenta'];
        $this->valoracion=$data['valoracion'];
        $this->QPedidoMenu= new QPedidoMenu();
    }

    public function getvaloracion(){
        return $this->valoracion;
    }
    public function setvaloracion($valoracion){
        return $this->valoracion=$valoracion;
    }

    public function getimporte(){
        return $this->importe;
    }
    public function setimporte($importe){
        return $this->importe=$importe;
    }
    public function getprecioVenta(){
        return $this->precioVenta;
    }
    public function setprecioVenta($precioVenta){
        return $this->precioVenta=$precioVenta;
    }

    public function getidPedido(){
        return $this->idPedido;
    }

    public function getcantidad(){
        return $this->cantidad;
    }

    public function setidPedido($idPedido){
        return $this->idPedido=$idPedido;
    }

    public function setcantidad($cantidad){
        return $this->cantidad=$cantidad;
    }

    public function mantenimientoPedidoMenu($opcion){          
        $this->QPedidoMenu->mantenimiento($opcion,$this->idPedido,$this->idMenu,$this->cantidad,$this->importe,$this->precioVenta,$this->valoracion);
    }
    public function mostrarPedidoMenu(){          
        return $this->QPedidoMenu->mostrarDatos("idMostrar", $this->idPedido);
    }

    public function insertarp(){
       return $this->QPedidoMenu->insertar($this->idPedido,$this->idMenu,$this->cantidad,$this->importe,$this->precioVenta,$this->valoracion);
    }

}

?>