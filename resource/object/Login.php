<?php
require_once ("../bd/Bdconexion.php");
class Login{
    protected $conexion;
    protected $gmail;
    protected $password;
    function __construct(){
        $this->conexion= new Bdconexion();
    }
    
    function login($gmail, $password){
        $query= "call sp_userList('emailypassword',0,'".$gmail."','".$password."');";
        $result = mysqli_query( $this->conexion->getConexion(),$query);
        if(!$result)
        {
            die("query Fail consulta");
        }else{

            $row1 = mysqli_fetch_array($result);
            if(!empty($row1['CUS_id'])){

                return $row1;//mo hay considencia tanto gmail como password
            }
            else {
                return 0;//el usuario si existe
            }
            
        }
        
        
    }    
}