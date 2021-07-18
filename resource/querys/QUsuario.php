<?php 

require_once ("../bd/Bdconexion.php");

class QUsuario
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
    
    public function mantenimiento($opcion,$idCliente,$password,$email)
    {
        $query= "CALL sp_user('".$opcion."','".$idCliente."','".$password."','".$email."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        validacionError($result);
    }    
    public function mostrarDatos($opcion, $idCliente,$email)
    {
        $query= "CALL sp_userList('".$opcion."','".$idCliente."','".$email."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        validacionError($result);
    }
}    

?>