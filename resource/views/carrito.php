<?php $urlInicio="../../index.php" ?>
<?php $urlCarta="./carta.php" ?>
<?php $urlPedidos="./carrito.php" ?>
<?php $urlPuntos="./puntos.php" ?>
<?php $urlCompras="./compras.php" ?>
<?php $fondoNav="../../public_html/js/fondoNav.js"?>
<?php $navInteraccion="../../public_html/js/navInteraccion.js"?>
<?php $carritoHover="../../public_html/js/hoverCarrito.js" ?>
<?php $title="Pedido" ?>
<?php $nameTitle="Pedido..." ?>
<?php $urlcssheadNavigator= "../../public_html/css/headNavigator.css" ?>
<?php $urlcsscontainerMain= "../../public_html/css/containerMain.css" ?>
<?php $urlcsscontainerCarta= "../../public_html/css/containerCarta.css" ?>
<?php $urlcssmenuCard= "../../public_html/css/menuCard.css" ?>
<?php $urlcsspopup= "../../public_html/css/popup.css" ?>
<?php $urlcsscarrito= "../../public_html/css/carrito.css" ?>
<?php include("../templates/header.php") ?>  
        <div class="containerCarrito"> 
            <?php include ('../templates/titleCarrito.php')?>
            <div class="pedido" id="pedido">                          
            </div>
            <div class="importePagar"><p id="importePagar">S/.0.00</p></div>
            <div class="botonesCompra" id="botonesCompra">
                <div class="botonesCompra__Comprando" id="botonesCompra__Comprando">
                    <button id="comprando">Seguir comprando</button>
                </div>
                <div class="botonesCompra__pagar">
                    <button id="pagar"><a href="./pedidos.php">Pagar</a></button>
                </div>
            </div>              
        </div>
        <template id="card-pedido">
            <div id="pedido__card" class="pedido__card"> 
                <div class="pedido__card-img">
                    <div class="img__circulo"> 
                        <img src="../../public_html/img/pollo-a-la-brasa-Perú-e1595255452282.jpg" alt="">
                    </div>       
                </div>
                <div class="pedido__card-title">
                    <h5 id= "pedido__titulo">Pollo ala brasa 1 c/u</h5>
                        <p id= "pedido__contenido">* Viene con.... <br>+ Porcion Papas fritas <br>+ Porcion ensalada <br>+ crema especial <br>+ Ají, mayonesa, mostaza</p>
                    <p id= "pedido__importe">S/.60.00</p>
                </div>
                <div class="pedido__card-modificacion">
                    <button class="modificacion__cantidad" id="modificacion__cantidad">
                        <select name="" id="cantidad-pedido">
                            <option value="">1</option>
                        </select>
                    </button>
                    <button class="modificacion__eliminar" id="modificacion__eliminar">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.
                        org/1999/xlink" width="41" height="48" viewBox="0 0 41 48">
                            <defs>
                                <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 205 245">
                                <image width="205" height="245" xlink:href="data:image/png;base64,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"/>
                                </pattern>
                            </defs>
                            <rect id="delete" width="41" height="48" fill="url(#pattern)"/>
                            </svg>
                    </button>
                    
                </div>
            </div>
        </template>
        <script src="../../public_html/js/app.js?v=<?php echo(rand()); ?>" type="module"></script> 
<?php include ( "../templates/footer.php")?>
