<?php 

require_once ("../bd/Bdconexion.php");

class QPago
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

    public function insertar($idPedido,$idTipo,$fechaPago,$importe,$importePagado)
    {
        $query= "CALL sp_payment('insert','".$idTipo."','".$idPedido."','".$fechaPago."','".$importe."','".$importePagado."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        validacionError($result);
    }    
    public function mostrarDatosPorId($idPedido)
    {
        $query= "CALL sp_PaymentList('id','".$idPedido."',0)";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        validacionError($result);
    }
    public function mostrarDatos()
    {
        $query= "CALL sp_PaymentList('general',0,0)";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        validacionError($result);

    }

    public function mostrarDatosPorIdCliente($idCliente)
    {
        $query= "CALL sp_PaymentList('id',0,'".$idCliente."')";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        validacionError($result);
    }
}    

?>