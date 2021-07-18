<?php 
// `sp_Customer`(`opcion` VARCHAR(20), `id` INT, `dni` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE,`idCliente` int)

require_once("../querys/QUsuario.php");

class Usuario {

    protected $idCliente;
    protected $password;
    protected $email; 
    protected $QUsuario;

    function __construct($idCliente,$password,$email){
        $this->idCliente=$idCliente;
        $this->password=$password;
        $this->email=$email;
        $this->QUsuario= new QUsuario();
    }

    public function getpassword(){
        return $this->password;
    }
    public function setpassword($password){
        return $this->password=$password;
    }

    public function getidCliente(){
        return $this->idCliente;
    }

    public function getemail(){
        return $this->email;
    }
    public function setidCliente($idCliente){
        return $this->idCliente=$idCliente;
    }

    public function setemail($email){
        return $this->email=$email;
    }

    public function mantenimientoUsuario($opcion){          
        $this->QUsuario->mantenimiento($opcion,$this->idCliente,$this->password,$this->email);
    }
    public function mostrarDatosUsuario($opcion){          
        $this->QUsuario->mostrarDatos($opcion, $this->idCliente,$this->email);
    }

}

?>