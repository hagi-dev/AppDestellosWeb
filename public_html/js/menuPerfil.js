let menuPerfil= document.getElementById("navegacion-perfil");
let linea1 = document.getElementById("Línea_1");
let linea2 = document.getElementById("Línea_2");
let linea3 = document.getElementById("Línea_3");
let perfilMenu = document.getElementById("cabecera__perfil-menu");
let estado= !1;
perfilMenu.addEventListener("click",verMenuPerfil);

function verMenuPerfil(){
    
   if(estado){
       console.log(estado);
    menuPerfil.classList.remove("active");
    // linea1.style.transform="rotateY(90deg)";
    linea2.style.opacity ="100%";
    // linea3.style.transform ="rotateY(90deg)";
   }else
   {
    console.log("dos:"+estado);
    menuPerfil.classList.add("active");
    linea1.style.transform="translate(400 200)"
    linea2.style.opacity ="50%";
    linea3.style.transform="translate(350 700)"
   }
   estado = !estado
}