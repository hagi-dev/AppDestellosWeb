<?php $fondoNav="./public_html/js/fondoNav.js"?>
<?php $menuPerfil="./public_html/js/menuPerfil.js"?>
<?php $navInteraccion="./public_html/js/navInteraccion.js"?>
<?php $urlInicio="./index.php" ?>
<?php $urlCarta="./resource/views/carta.php" ?>
<?php $urlPedidos="./resource/views/carrito.php" ?>
<?php $urlPuntos="./resource/views/puntos.php" ?>
<?php $urlCompras="./resource/views/compras.php" ?>
<?php $title= "home-destellos" ?>
<?php $carritoHover="./public_html/js/hoverCarrito.js" ?>
<?php $urlcssheadNavigator= "./public_html/css/headNavigator.css" ?>
<?php $urlcsscontainerMain= "./public_html/css/containerMain.css" ?>
<?php $urlcsscontainerHome= "./public_html/css/containerHome.css" ?>
<?php $urlcsscontainerCarta= "./public_html/css/containerCarta.css" ?>
<?php $urlcssmenuCard= "./public_html/css/menuCard.css" ?>
<?php $urlcsscarrito= "./public_html/css/carrito.css" ?>
<?php $nameTitle="Bienvenido al polleria destellos..." ?>

<?php include ("./resource/templates/header.php")?>  
<div class="containerHome">
            <?php include ('./resource/templates/titleCarrito.php')?>
            <div class="containerHome__promocion">
                <p>Promocion del dia...</p>
            </div>
            <div class="containerHome__carrusel">
                <p><</p>
                <img src="./public_html/img/BLOG-POLLO-rectangular-.jpg" alt="">
                <p>></p>
            </div>
            <div class="containerHome__botones">
                <div class="containerHome__botones-acciones">
                    <a href="">Comprar ahora</a>
                    <a href="">Agregar a carrito</a>
                </div>
            </div>
        </div>
    
        <?php include ("./resource/templates/footer.php")?>   
    
