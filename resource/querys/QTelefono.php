<?php 

require_once ("../bd/Bdconexion.php");

class QTelefono
{
    protected $conexion;
    function __construct(){
        $this->conexion= new Bdconexion();
    }

    public function validacionError($result)
    {
        if(!$result)
        {
            die("query Fail consulta");
        }
    }
    
    public function mantenimiento($opcion,$id,$numero,$idCliente)
    {
        $query= "CALL sp_phone('".$opcion."','".$id."','".$numero."','".$idCliente."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        validacionError($result);
    }    
    public function mostrarDatos($opcion, $idCliente)
    {
        $query= "CALL sp_TelefonoList('".$opcion."','".$idCliente."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        validacionError($result);
    }
}    

?>