const uno1=document.getElementById("numero1");
let numero2=document.getElementById("__2");
let numero3=document.getElementById("__3");
let seleccion1=document.getElementById("b1");
let seleccion2=document.getElementById("b2");
let seleccion3=document.getElementById("b3");
let circulo1=document.getElementById("c1");
let circulo2=document.getElementById("c2");
let circulo3=document.getElementById("c3");
let minicirculo1=document.getElementById("cc1");
let minicirculo2=document.getElementById("cc2");
let minicirculo3=document.getElementById("cc3");
let minicirculo4=document.getElementById("cc4");
let cancelar=document.getElementById("procesoPedido__cancelar");
let save= document.getElementById('save');
let fordireccion=getElementById('form__datosDireccion');
let forpersona=getElementById('form__datosPersona');

cancelar.addEventListener("click",()=>{
    window.location="../../index.php";
});

document.addEventListener("DOMContentLoaded",()=>{
    seleccion2.style.display="none";
    seleccion3.style.display="none";
    uno1.style.fill="red";
    seleccion1.style.fill="red";
});
save.addEventListener("click",()=>{
    fordireccion.style.display="grid";
    forpersona.style.display="none";
})