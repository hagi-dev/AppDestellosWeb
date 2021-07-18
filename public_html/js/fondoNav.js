let tituloPage= document.getElementById("titulo-pagina");
let nav1= document.getElementById("home");
let nav2= document.getElementById("carta");
let nav3= document.getElementById("pedidos");
let nav4= document.getElementById("puntos");
let nav5= document.getElementById("compras");
let contenido = tituloPage.innerHTML;
if(contenido==="Bienvenido al polleria destellos..."){
    nav1.style.background="#DA0D12";
}
else if(contenido==="Nuestra carta..." || contenido==="Pollos y parrillas con sabor..."|| 
contenido==="Anticuchos peruanos..." || contenido==="Combos familiares..." || contenido==="Extras y bebidas..."){
    nav2.style.background="#DA0D12";
}
else if(contenido==="Pedido..."){
    nav3.style.background="#DA0D12";
}
else if(contenido==="Carrito..."){
    nav3.style.background="#DA0D12";
}
else if(contenido==="Carrito..."){
    nav3.style.background="#DA0D12";
}
else if(contenido==="Carrito..."){
    nav3.style.background="#DA0D12";
}
// else if(contenido==="Carrito..."){
//     nav.style.background="#DA0D12";
// }
// else if(contenido==="Carrito..."){
//     nav.style.background="#DA0D12";
// }