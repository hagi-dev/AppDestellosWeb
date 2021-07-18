<?php 

require_once ("./resource/bd/Bdconexion.php");

class QMenu
{
    protected $conexion;
    function __construct(){
        $this->conexion= new Bdconexion();
    }

    public function insertar($id,$nombre,$descripcion,$url,$idCategoria)
    {
        $query= "CALL sp_menu('insert',0,'".$nombre."','".$descripcion."','".$url."','".$idCategoria."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }    

    public function actualizarDatos($id,$nombre,$descripcion,$url,$idCategoria)
    {
        $query= "CALL sp_menu('update-general','".$id."','".$nombre."','".$descripcion."','".$url."','".$idCategoria."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
         if(!$result)
        {
            die("query Fail consulta");
        }
        if(!$result)
        {
            die("query Fail consulta");
        }
    }

    public function actualizarValoracion($id)
    {
        $query= "CALL sp_menu('update-valoracion','".$id."','','','','')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
         if(!$result)
        {
            die("query Fail consulta");
        }
        
    }

    public function eliminar($id)
    {
        $query= "CALL sp_menu('delete','".$id."','','','','')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
         if(!$result)
        {
            die("query Fail consulta");
        }
    }

    public function mostrarDatosPorId($id)
    {
        $query= "CALL sp_MenuList('Id','".$id."','')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
         if(!$result)
        {
            die("query Fail consulta");
        }
        return $result;
    }
    public function mostrarDatos()
    {
        $query= "CALL sp_MenuList('general',0,'')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
         if(!$result)
        {
            die("query Fail consulta");
        }
        return $result;

    }

    public function mostrarDatosPorNombre($nombre)
    {
        $query= "CALL sp_MenuList('_name',0,'".$nombre."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
         if(!$result)
        {
            die("query Fail consulta");
        }
    }
}    

?>