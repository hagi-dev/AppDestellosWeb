<?php 

class Bdconexion{
    
    protected $conexion1;


    function __construct()
    {
        $this->conexion1= mysqli_connect(
            'localhost',
            'root',
            '', 
            'salesdestellosweb'               
        );
        mysqli_set_charset($this->conexion1,"utf8");
    }

    public function setConexion($conexion)
    {
       $this->conexion1= $conexion;
    }

    public function getConexion()
    {
        return $this->conexion1;
    }

}

?>