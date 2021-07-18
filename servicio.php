<?php 
require_once __DIR__ . "/vendor/autoload.php";
try{
    if(isset($_POST)){
        $data= file_get_contents('php://input');
        $data = json_decode( $data, true );
        $_objeto = $data['objeto'];
        $_opcion = $data['opcion'];
        // $objeto=="Pedido"? $Pedido = new Pedido(0,'','','','') : null; 
        // $objeto=="Direccion"? $Direccion = new Direccion(0,'','','','') : null; 
        // $objeto=="Telefono"? $Telefono = new Telefono(0,'','','','') : null; 
        // $objeto=="Cliente"? $Cliente = new Cliente(0,'','','','') : null; 
        // $objeto=="Pago"? $Pago = new Pago(0,'','','','') : null; 
        // $objeto=="PedidoMenu"? $PedidoMenu = new PedidoMenu(0,'','','','') : null; 
        // $objeto=="Usuario"? $Usuario = new Usuario(0,'','','','') : null;
        
        switch ($_objeto){

            case 'Menu': 
                if($_opcion=="listar"){
                    $menu = new Menu($data);
                    $result = $menu->mostrarDatosMenu();
                    consultaError($result);
                    echo formatoJSON($result,$_opcion,$_objeto);
                } 
                else if($_opcion=="id"){
                    $menu = new Menu($data);
                    $result = $menu->mostrarDatosId();
                    consultaError($result);
                    echo formatoJSON($result,$_opcion,$_objeto);
                } break
                ;
            case 'Porcion':
                if($_opcion=="id"){
                    $porcion = new Porcion($data);
                    $result = $porcion->mostrarId();
                    consultaError($result);
                    echo formatoJSON($result,$_opcion,$_objeto);
                } break;
            case 'Usuario':
                if($_opcion=="validar"){
                    $Login = new Login($data);
                    $result = $Login->login();
                    consultaError($result);
                    print_r($result);
                    echo formatoJSON($result,$_opcion,$_objeto);
                } break;    
            case 'Pedido':
                if($_opcion=="insert"){
                    $Pedido = new Pedido($data);
                    $result = $Pedido->mostrarDatosIdCliente();
                    consultaError($result);
                    echo "se ingrso correctamnete" ;
                }
                if($_opcion=="list"){
                    $Pedido = new Pedido($data);
                    $result = $Pedido->mostrarDatosIdCliente();
                    consultaError($result);
                    print_r($result);
                    echo formatoJSON($result,$_opcion,$_objeto);
                }
                break;
            case 'PedidoMenu':
                if($_opcion=="insert y lista"){
                    $PedidoMenu = new PedidoMenu($data);
                    $result = $PedidoMenu->insertarp();
                    $result2 = $PedidoMenu->mostrarPedidoMenu();
                    consultaError($result);
                    print_r($result);
                    echo formatoJSON($result2,$_opcion,$_objeto);
                } break;   
        }
    }
    else {
        echo "no hay datos enviados ";
    }
} catch(Exception $er){
    echo $er;
}