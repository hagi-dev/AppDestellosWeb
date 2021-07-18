let carritoCompras= document.getElementById("carritoCompras");
let carrito= document.getElementById("carrito");
let circle1= document.getElementById("circulo");

carritoCompras.addEventListener("mouseover", prender);
carritoCompras.addEventListener("mouseout", apagar);

function prender(){
    //carrito.style.fill="#8a6b64";
    circle1.style.fill="#8a6b64";
}

function apagar(){
    carrito.style.fill="#fbf2c0";
    circle1.style.fill="#392B28";
}