let close2 = document.getElementById("close");
let card = document.getElementById("template_menuPollos");
let overlay = document.getElementById("overlay");
let poupMenu = document.getElementById("poupMenu");
let agregar = document.getElementById("agregar");

close2.addEventListener("click",cerrarPopupMenu);
agregar.addEventListener("click",botonAnimado);

function abrirPopupMenu(){
    overlay.classList.add("active");
    poupMenu.classList.add("active");
}
function cerrarPopupMenu(){
    overlay.classList.remove("active");
    poupMenu.classList.remove("active"); 
}
function botonAnimado(){
    agregar.style.transform='scale(1.1)';
    agregar.style.fontSize= '1.5em';
    regresar();
    cerrarPopup();

}
function regresar(){
    let timeoutId = setTimeout(function(){
        agregar.style.transform='scale(1)';
        agregar.style.fontSize= '1.3em';
      },200);
      return timeoutId;
}
function cerrarPopup(){
    let timeoutId = setTimeout(function(){
        overlay.classList.remove("active");
        poupMenu.classList.remove("active");
        window.location="./carrito.php";
      },300);
      return timeoutId;
}