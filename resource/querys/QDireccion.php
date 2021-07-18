<?php 

require_once ("../bd/Bdconexion.php");

class QDireccion
{
    protected $conexion;
    function __construct(){
        $this->conexion= new Bdconexion();
    }
    public function insertar($id,$departamento,$provincia,$distrito,$direccion,$idCliente)
    {
        $query= "CALL sp_streetaddress('insert','".$id."','".$departamento."','".$provincia."','".$distrito."','".$direccion."','".   $idCliente."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }

    }    

    public function actualizarDatos($id,$departamento,$provincia,$distrito,$direccion)
    {
        $query= "CALL sp_streetaddress('update-general','".$id."','".$departamento."','".$provincia."','".$distrito."','".$direccion."',0)";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }

    public function eliminar($id)
    {
        $query= "CALL sp_streetaddress('delete','".$id."','','','','',0)";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }

    public function mostrarDatosPorId($idCliente)
    {
        $query= "CALL sp_direccionList('porCliente','".$idCliente."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }
}    

?>