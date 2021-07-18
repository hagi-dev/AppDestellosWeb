<?php 

require_once ("../bd/Bdconexion.php");

class QPedidoMenu
{
    protected $conexion;
    function __construct(){
        $this->conexion= new Bdconexion();
    }
    
    public function mantenimiento($opcion,$idPedido,$idMenu,$cantidad,$importe,$precioVenta,$valoracion)
    {
        $query= "CALL sp_orders_menu('".$opcion."','".$idPedido."','".$cantidad."','".$importe."','".$precioVenta."','".$valoracion."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
    }   
    
    public function insertar($idPedido,$idMenu,$cantidad,$importe,$precioVenta,$valoracion)
    {
        $query= "CALL sp_insertarPedidoMenuValidado('".$idPedido."','".$idMenu."','".$cantidad."','".$importe."','".$precioVenta."','".$valoracion."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
        return $result ;
    } 
    public function mostrarDatos($opcion, $idPedido)
    {
        $query= "CALL sp_orderMenuList('".$opcion."','".$idPedido."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }
        return $result ;
    }
}    

?>