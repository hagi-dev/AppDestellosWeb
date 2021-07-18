<?php
class SesionLogin
{
    function __construct()
    {
        session_start();
    }
    
    public function setSesion($nombre,$valor,$valor2)
    {
        $_SESSION[$nombre] = $valor;
        $_SESSION['idCliente'] = $valor2;
    }
    
    public function getSesionNombre($nombre)
    {
        if (isset($_SESSION[$nombre])) 
        {
            return $_SESSION[$nombre] ;
        } 
        else 
        {
            return false;
        }
    }
    public function getSesionId()
    {
        if (isset($_SESSION['idCliente'])) 
        {
            return $_SESSION['idCliente'];
        } 
        else 
        {
            return false;
        }
    }
    
    public function delSesion($nombre)
    {
        unset($_SESSION[$nombre]);
    }
    
    public function finSesion()
    {
        $_SESSION = [];
        session_destroy();
    }
}
