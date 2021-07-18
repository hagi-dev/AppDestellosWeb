<?php 
// `sp_Customer`(`opcion` VARCHAR(20), `id` INT, `dni` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE,`idCliente` int)

require_once("./resource/querys/QPorcion.php");

class Porcion {

    protected $id;
    protected $precio;
    protected $porcion;
    protected $stock;
    protected $idMenu;
    protected $QPorcion;

    function __construct($data){
        $this->id=$data['id'];
        $this->precio=$data['precio'];
        $this->stock=$data['stock'];
        $this->idMenu=$data['idMenu'];
        $this->porcion=$data['porcion'];
        $this->QPorcion= new QPorcion();
    }

    public function getid(){
        return $this->id;
    }

    public function getprecio(){
        return $this->precio;
    }

    public function getstock(){
        return $this->stock;
    }

    public function getidMenu(){
        return $this->idMenu;
    }

    public function setid($id){
        return $this->id=$id;
    }

    public function setprecio($precio){
        return $this->precio=$precio;
    }

    public function setstockstock($stock){
        return $this->stock=$stock;
    }

    public function setidMenu($idMenu){
        return $this->idMenu=$idMenu;
    }

    public function mostrarId(){          
        return $this->QPorcion->mostrarDatosPorId($this->idMenu);
    }

}

?>