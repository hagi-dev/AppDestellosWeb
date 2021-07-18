<?php 

require_once ("../bd/Bdconexion.php");

class QPedido
{
    protected $conexion;
    function __construct(){
        $this->conexion= new Bdconexion();
    }
    public function insertar($idPedido,$idCliente)
    {
        $query= "call sp_insertarPedidoValidado(,'".$idPedido."','".$idCliente."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
        return $result;
    }    

    public function eliminar($id)
    {
        $query= "CALL sp_orders('delete','".$id."','','')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }

    public function mostrarDatosPorId($id)
    {
        $query= "CALL sp_orderList('id','".$id."',0)";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }
    public function mostrarDatos()
    {
        $query= "CALL sp_orderList('general',0,0)";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }

    }

    public function mostrarDatosPorIdCliente($idCliente)
    {
        $query= "CALL sp_orderList('mostrarPorCliente',0,'".$idCliente."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }
}    

?>