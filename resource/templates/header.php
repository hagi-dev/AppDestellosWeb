<?php session_start();
    if(empty($_SESSION['nombre'])){
        header('Location: ../../../../resource/views/login.php');
    }else{
        // header('Location: ../../../../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="<?php echo $urlcssheadNavigator ?>?v=<?php echo(rand()); ?>" />
    <link rel= "stylesheet" href="<?php echo $urlcsscontainerMain ?>?v=<?php echo(rand()); ?>">
    <link rel= "stylesheet" href="<?php echo $urlcsscontainerHome ?>?v=<?php echo(rand()); ?>">
    <link rel= "stylesheet" href="<?php echo $urlcsscontainerCarta ?>?v=<?php echo(rand()); ?>">
    <link rel= "stylesheet" href="<?php echo $urlcssmenuCard ?>?v=<?php echo(rand()); ?>">
    <link rel= "stylesheet" href="<?php echo $urlcssmenuAnticuchos ?>?v=<?php echo(rand()); ?>">
    <link rel= "stylesheet" href="<?php echo $urlcssmenuCombos ?>?v=<?php echo(rand()); ?>">
    <link rel= "stylesheet" href="<?php echo $urlcssmenuExtras ?>?v=<?php echo(rand()); ?>">
    <link rel= "stylesheet" href="<?php echo $urlcsspopup ?>?v=<?php echo(rand()); ?>">
    <link rel= "stylesheet" href="<?php echo $urlcsscarrito ?>?v=<?php echo(rand()); ?>">
    <link rel= "stylesheet" href="<?php echo $urlcsscontainerPedido ?>?v=<?php echo(rand()); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@400;700&display=swap" rel="stylesheet">  
    <title><?php echo $title; ?> </title>
</head>
<body>
    <header class="cabecera">
        <p class="id" id="id2">
        <?php echo $_SESSION['idCliente'];?>
        </p>
        <div class="cabecera__logo">
        <img src="https://i.ibb.co/Kq2sp5m/logo8.png" alt="logo8" >
        </div>
        <div class="cabecera__nav">
            <ul>
                <li>
                    <a href="<?php echo $urlInicio?>" id= "home">
                    <img src="https://i.ibb.co/syHsYQf/home.png" alt="home">
                        <h3>Inicio</h3>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $urlCarta?>?id=<?php $id = isset($_GET["id"])?$_GET["id"]:null;  
                         echo $id?>" id="carta">
                    <img src="https://i.ibb.co/X2ppJxF/carta.png" alt="carta">
                        <h3>Carta</h3>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $urlPedidos?>" id="pedidos">
                    <img src="https://i.ibb.co/1054bt9/pedido.png" alt="pedido">
                        <h3>Pedidos</h3>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $urlPuntos?>" id="puntos">
                    <img src="https://i.ibb.co/vPzrhpW/puntos.png" alt="puntos" >
                        <h3>puntos</h3> 
                    </a>
                </li>
                <li>
                    <a href="<?php echo $urlCompras?>" id="compras">
                    <img src="https://i.ibb.co/J3SjsDd/historial.png" alt="historial" >
                        <h3>Compras</h3> 
                    </a>
                </li>
            </ul>
        </div>
        <div class="cabecera__perfil" >
            <div class="cabecera__perfil-foto"><img src="https://www.dzoom.org.es/wp-content/uploads/2020/02/portada-foto-perfil-redes-sociales-consejos.jpg" alt="Capa-1"></div>
            <div class="cabecera__perfil-name"><h1><?php echo $_SESSION['nombre'];?></h1></div>
            <div class="cabecera__perfil-menu" id="cabecera__perfil-menu">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="17" viewBox="0 0 30 17">
                        <g id="iconperfil" transform="translate(-292.5 -968.5)">
                            <line id="Línea_1" data-name="Línea 1" x2="27" transform="translate(294 970)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                            <line id="Línea_2" data-name="Línea 2" x2="27" transform="translate(294 977)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                            <line id="Línea_3" data-name="Línea 3" x2="27" transform="translate(294 984)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                        </g>
                    </svg>
                </div>
                <div class= "navegacion-perfil" id="navegacion-perfil" >
                    <nav class= "navegacion-perfil-lista">
                        <ul>
                            <li><a href="#">Pelfil</a></li>
                            <li><a href="../../resource/views/login.php?page=logout">Cerrar Sesion</a></li>
                        </ul>
                    </nav>
                </div>        
            </div>
        </div>
    </header>
    <main>
  