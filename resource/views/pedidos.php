<?php $urlInicio="../../index.php" ?>
<?php $urlCarta="./carta.php" ?>
<?php $urlPedidos="./carrito.php" ?>
<?php $menuPerfil="../../public_html/js/menuPerfil.js"?>
<?php $urlPuntos="./puntos.php" ?>
<?php $urlCompras="./compras.php" ?>
<?php $fondoNav="../../public_html/js/fondoNav.js"?>
<?php $navInteraccion="../../public_html/js/navInteraccion.js"?>
<?php $carritoHover="../../public_html/js/hoverCarrito.js" ?>
<?php $title="pedido" ?>
<?php $nameTitle="Proceso de Pedido..." ?>
<?php $urlcssheadNavigator= "../../public_html/css/headNavigator.css" ?>
<?php $urlcsscontainerMain= "../../public_html/css/containerMain.css" ?>
<?php $urlcsscontainerCarta= "../../public_html/css/containerCarta.css" ?>
<?php $urlcsscontainerPedido= "../../public_html/css/containerPedido.css" ?>
<?php $urlcssmenuCard= "../../public_html/css/menuCard.css" ?>
<?php $urlcsscarrito= "../../public_html/css/carrito.css" ?>
<?php include("../templates/header.php") ?>  
        <div class="containerPedido"> 
            <?php include ('../templates/titleCarrito.php')?>
            <div class="procesoPedido">
                <div class="procesoPedido__barraProgreso">
                    <svg xmlns="http://www.w3.org/2000/svg" width="511.354" height="291.753" viewBox="0 0 511.354 291.753">
                        <g id="pasos" transform="translate(-1290.646 -1219)">
                            <g id="pasos_2_" data-name="pasos (2)" transform="translate(1290 1219)">
                            <path id="__2" data-name="2" d="M247.336,62.09c-11.992,11.637-25.582,24.828-32.477,40.309a15,15,0,0,0,13.7,21.1H280.7a15,15,0,0,0,0-30H258.254c3.277-3.383,6.7-6.7,9.977-9.883,14.738-14.3,27.469-26.66,27.469-42.125A41.48,41.48,0,0,0,216,25.352a15,15,0,1,0,27.641,11.656A11.481,11.481,0,0,1,265.7,41.2c-1.152,4.188-11.492,14.223-18.359,20.891Zm0,0"/>
                            <path id="numero1" data-name="1" d="M26.258,58l6.352-6.355V93.379H22.121a15,15,0,0,0,0,30H73.09a15,15,0,1,0,0-30H62.609V15.4A15,15,0,0,0,37,4.8L5.035,36.793A15,15,0,1,0,26.258,58Zm0,0"/>
                            <path id="c3" d="M466.52,147.07A45.5,45.5,0,1,0,512,192.57,45.176,45.176,0,0,0,466.52,147.07Zm0,0"/>
                            <path id="c2" d="M254.852,238.066a45.5,45.5,0,0,0,0-90.992h0a45.5,45.5,0,0,0,0,90.992Zm0,0"/>
                            <path id="cc1" d="M137.32,193.9a14.148,14.148,0,1,0-14.148,14.156A14.152,14.152,0,0,0,137.32,193.9Zm0,0"/>
                            <path id="cc2" d="M191.82,193.9a14.146,14.146,0,1,0-14.145,14.156A14.149,14.149,0,0,0,191.82,193.9Zm0,0"/>
                            <path id="cc3" d="M345.973,193.9a14.148,14.148,0,1,0-14.148,14.156A14.15,14.15,0,0,0,345.973,193.9Zm0,0"/>
                            <path id="cc4" d="M400.477,193.9a14.148,14.148,0,1,0-14.148,14.156A14.15,14.15,0,0,0,400.477,193.9Zm0,0"/>
                            <path id="b2" d="M293.52,261.6H218.93a15,15,0,0,0,0,30h74.59a15,15,0,0,0,0-30Zm0,0"/>
                            <path id="__3" data-name="3" d="M466.082,123.832c22.613,0,40.836-18.039,41.484-41.07.164-5.883-.66-20.82-11.879-32.359a37.945,37.945,0,0,0-7.145-5.75L503.57,24.41A15,15,0,0,0,491.527.469H446.555a15,15,0,0,0,0,30h15.156l-10.145,13.66A15,15,0,0,0,463.609,68.07c4.918,0,8.477,1.094,10.57,3.246,2.652,2.73,3.488,7.418,3.4,10.605-.187,6.68-5.238,11.91-11.5,11.91a11.443,11.443,0,0,1-10.562-7A15,15,0,1,0,427.879,98.48a41.372,41.372,0,0,0,38.2,25.352Zm0,0"/>
                            <path id="c1" d="M254.852,238.066a45.5,45.5,0,0,0,0-90.992h0a45.5,45.5,0,0,0,0,90.992Zm0,0" transform="translate(-208.653 -0.004)"/>
                            <path id="b3" d="M293.52,261.6H218.93a15,15,0,0,0,0,30h74.59a15,15,0,0,0,0-30Zm0,0" transform="translate(203.284 -0.298)"/>
                            <path id="b1" d="M293.52,261.6H218.93a15,15,0,0,0,0,30h74.59a15,15,0,0,0,0-30Zm0,0" transform="translate(-203.284 0.151)"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="procesoPedido__ingresoDatos">
                    <div class="procesoPedido__ingresoDatos-formulario">
                        <form action="" id="form__datosPersona">
                            <div id="form__datosPersona-titulo"><h3>Completa tus datos </h3></div>
                            <div id="form__datosPersona-dni">
                                <label for="">DNI:</label>
                                <input type="text" id="dni">
                            </div>
                            <div id="form__datosPersona-celular">
                                <label for="">N?? celular:</label>
                                <input type="text" id="celular">
                            </div>
                            <div id="form__datosPersona-fechaNacimiento">
                                <label for="">Fecha de nacimiento:</label>
                                <input type="date" id="fechaNacimiento">
                            </div>
                            <div id="form__datosPersona-save"><button id="save">Guardar</button></div>
                        </form>
                        <form action="" id="form__datosDireccion">
                            <div id="form__datosDireccion-titulo">
                                <h3>direccion de envio </h3>
                            </div>
                            <div id="form__datosDireccion-departamento">
                                <label for="">Departamento:</label>
                                <select name="departamento" id="departamento"></select>
                            </div>
                            <div id="form__datosDireccion-provincia">
                                <label for="">Provincia:</label>
                                <select name="provincia" id="provincia"></select>
                            </div>
                            <div id="form__datosDireccion-distrito">
                                <label for="">Distrito:</label>
                                <select name="distrito" id="distrito"></select>
                            </div>
                            <div id="form__datosDireccion-direccion">
                                <label for="">Direccion:</label>
                                <input type="text" id="direccion">
                            </div>
                            <div id="form__datosDireccion-save"><button id="save">Guardar</button></div>
                        </form>
                    </div>
                    <div class="procesoPedido__ingresoDatos-imgExplicativo">
                        <img src="../../public_html/img/banner5.png" alt="">
                    </div>
                </div>
                <div class="procesoPedido__siguiente">
                    <button id="procesoPedido__cancelar">Cancelar</button>
                    <button id="procesoPedido__siguiente">Siguiente</button>
                </div>
            </div>
        </div>
        <script src="../../public_html/js/pasosAccion.js?v=<?php echo(rand()); ?>"></script>
<?php include ( "../templates/footer.php")?>
