<?php $fondoNav="../../public_html/js/fondoNav.js"?>
<?php $navInteraccion="../../public_html/js/navInteraccion.js"?>
<?php $menuPerfil="../../public_html/js/menuPerfil.js"?>
<?php $urlInicio="../../index.php" ?>
<?php $urlCarta="./carta.php" ?>
<?php $urlPedidos="./carrito.php" ?>
<?php $urlPuntos="./puntos.php" ?>
<?php $urlCompras="./compras.php" ?>
<?php $title="menu/extras" ?>
<?php $nameTitle="Extras y bebidas..." ?>
<?php $carritoHover="../../public_html/js/hoverCarrito.js" ?>
<?php $carritoHover="../../public_html/js/hoverCarrito.js" ?>
<?php $carritoHover="../../public_html/js/hoverCarrito.js" ?>
<?php $urlcssheadNavigator= "../../public_html/css/headNavigator.css" ?>
<?php $urlcsscontainerMain= "../../public_html/css/containerMain.css" ?>
<?php $urlcsscontainerCarta= "../../public_html/css/containerCarta.css" ?>
<?php $urlcssmenuCard= "../../public_html/css/menuCard.css" ?>
<?php $urlcsspopup= "../../public_html/css/popup.css" ?>
<?php $urlcsscarrito= "../../public_html/css/carrito.css" ?>
<?php $urlcssmenuExtras= "../../public_html/css/menuExtras.css" ?>
<?php include("../templates/header.php") ?> 
        <div class="containerMenuExtras"> 
        <?php include ('../templates/titleCarrito.php')?>
        <div class="menu" id="menu">        
                </div>
        </div>
        <?php include ("../templates/poupMenu.php")?>
        <?php include ("../templates/cardMenu.php")?>
        <script src="../../public_html/js/app.js?v=<?php echo(rand()); ?>" type="module"></script>  
        <script src="../../public_html/js/animationClose.js?v=<?php echo(rand()); ?>"></script> 
        <script src="../../public_html/js/accionesPopupMenu.js?v=<?php echo(rand()); ?>"></script> 
<?php include ( "../templates/footer.php")?>