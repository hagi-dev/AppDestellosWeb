<?php 

require_once ("./resource/bd/Bdconexion.php");

class QPorcion
{
    protected $conexion;
    function __construct(){
        $this->conexion= new Bdconexion();
    }
   
    public function mostrarDatosPorId($idMenu)
    {
        try
        {
        $query= "select * from porciones where MEN_id= '$idMenu'; ";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
        }catch(Exception $err){
            echo $err;
        }
        return $result;
    }
}
?>