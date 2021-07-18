<?php 
// `sp_Customer`(`opcion` VARCHAR(20), `id` INT, `id` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE,`estado` int)
require_once ("./resource/querys/QMenu.php");
class Menu {

    protected $id;
    protected $nombre;
    protected $descripcion;
    protected $urlImg;
    protected $idCategoria;
    protected $QMenu;

    function __construct($datosArray){
        $this->id=$datosArray["id"];
        $this->nombre=$datosArray["nombre"];
        $this->descripcion=$datosArray["descripcion"];
        $this->urlImg=$datosArray["urlImg"];
        $this->idCategoria=$datosArray["idCategoria"];
        $this->QMenu= new QMenu();
    }

    public function geturlImg(){
        return $this->urlImg;
    }
    public function seturlImg($urlImg){
        return $this->urlImg=$urlImg;
    }
    public function getidCategoria(){
        return $this->idCategoria;
    }
    public function setidCategoria($idCategoria){
        return $this->idCategoria=$idCategoria;
    }

    public function getid(){
        return $this->id;
    }

    public function getnombre(){
        return $this->nombre;
    }

    public function getdescripcion(){
        return $this->descripcion;
    }
    public function setid($id){
        return $this->id=$id;
    }

    public function setnombre($nombre){
        return $this->nombre=$nombre;
    }

    public function setdescripcion($descripcion){
        return $this->descripcion=$descripcion;
    }

    public function insertarNuevo(){          
        $this->QMenu->insertar($this->id,$this->nombre,$this->descripcion,$this->url,$this->idCategoria);
    }

    public function actualizarDatosGeneral(){          
        $this->QMenu->actualizarDatos($this->id,$this->nombre,$this->descripcion,$this->url,$this->idCategoria);
    }

    public function actualizarDatosValoracion(){          
        $this->QMenu->actualizarValoracion($this->id);
    }
    public function EliminarDatos(){          
        $this->QMenu->eliminar($this->id);
    }

    public function mostrarDatosId(){          
       return $this->QMenu->mostrarDatosPorId($this->id);
    }

    public function mostrarDatosNombre(){          
        $this->QMenu->mostrarDatosPorNombre($this->nombre);
    }

    public function mostrarDatosMenu(){          
       return $this->QMenu->mostrarDatos();
    }

}

?>