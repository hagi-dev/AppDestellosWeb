<?php 

require_once ("../bd/Bdconexion.php");

class QCliente
{
    protected $conexion;
    function __construct(){
        $this->conexion= new Bdconexion();
    }
    public function insertar($id,$dni,$nombre,$apellidos,$sexo,$fechaNacimiento)
    {
        $query= "CALL sp_Customer('insert','".$id."','".$dni."','".$nombre."','".$apellidos."','".$sexo."','".   $fechaNacimiento."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }

    }    

    public function actualizarDatosFaltantes($id,$dni,$sexo,$fechaNacimiento)
    {
        $query= "CALL sp_Customer('update-partes','".$id."','".$dni."','','','".$sexo."','".   $fechaNacimiento."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }

    public function actualizarDatos($id,$dni,$nombre,$apellidos,$sexo,$fechaNacimiento)
    {
        $query= "CALL sp_Customer('update-general','".$id."','".$dni."','".$nombre."','".$apellidos."','".$sexo."','".   $fechaNacimiento."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }

    public function eliminar($id)
    {
        $query= "CALL sp_Customer('delete','".$id."','".$dni."','".$nombre."','".$apellidos."','".$sexo."','".   $fechaNacimiento."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }

    public function mostrarDatosPorId($id)
    {
        $query= "CALL sp_CustomerList('id','".$id."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }
    public function mostrarDatos()
    {
        $query= "CALL sp_CustomerList('general',0)";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }

    }
}    

?>