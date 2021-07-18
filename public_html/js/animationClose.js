let close1= document.getElementById("close");
let circulo = document.getElementById("Elipse_37");
let x = document.getElementById("X");
close1.addEventListener("mouseover",prende);
close1.addEventListener("mouseout", apagar1);

function prende(){
    circulo.style.opacity=1;
    x.style.opacity=1;
}
function apagar1(){
    circulo.style.opacity=0.4;
    x.style.opacity=0.4;
}