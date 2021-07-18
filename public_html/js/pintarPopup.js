import { fetchData } from "../../public_html/js/fetchData.js";
import { formatoJsonMenu } from "./formatoJsonMenu.js";
import { formatoJsonPorcion } from "./formatoJsonPorcion.js";
import { formatoPedido } from "../../public_html/js/formatoPedido.js";
import { formatoPedidoMenu } from "../../public_html/js/formatoPedidoMenu.js";
import { formatoTraerId } from "../../public_html/js/formatoTraerId.js";
export function pintarPopup(error,data1){
    if(error) return console.log(error);
    const botones = document.querySelectorAll('.menu__card button');
    let imgMenu= document.getElementById("img-menu");
    let titulo= document.querySelector('#titulo');
    let agregarPedido= document.querySelector('#agregar');
    let selectPorcion= document.querySelector('.select');
    let descripcion=document.querySelector('#contenido');
    let porcionPedido =document.querySelector('#vistaImporte');
    let cantidadPedido= document.getElementById("cantidad");
    let idCliente=document.getElementById("idcliente");
    let id= document.getElementById("id2");
    let suma=document.getElementById("suma");
    let resta=document.getElementById("resta");
    botones.forEach(btn => {
        btn.addEventListener('click', () => {
            let data=formatoJsonMenu("id","Menu",btn.dataset.id,"","","","");
            fetchData(data,pintarpop1,prueba);
            function pintarpop1(error,datos){
                console.log("cuerpo: "+datos);
                datos.forEach(function(data){
                    if(btn.dataset.id=data.idMenu){
                        imgMenu.setAttribute('src',data.urlMenu);
                        console.log(data.descriptcion1);
                        titulo.textContent = data.nameMenu;
                        descripcion.textContent=data.descriptcion1;
                        agregarPedido.dataset.id=data.idMenu;
                        console.log("este es el boton agrgar",agregarPedido.dataset.id);
                        console.log("este es el id cliente"+id);

                    }  
                });
            }

            let data2=formatoJsonPorcion("id","Porcion",0,"","","",btn.dataset.id);
            fetchData(data2,pintarBotones,prueba);
            function pintarBotones(error,data1){
                while (selectPorcion.options.length > 0) {
                    selectPorcion.remove(0);
                }
                data1.forEach(function(data){
                    console.log(data);
                    if(btn.dataset.id===data.idMenu){
                        let option = document.createElement("option");
                        option.value = data.precio;
                        option.text = data.porcion; 
                        console.log("funciona");
                        selectPorcion.append(option);
                        
                    }
                    
                 });
                 console.log(selectPorcion);
                 porcionPedido.textContent= selectPorcion.value;
                 cantidadPedido.innerHTML="1";

                
            }
             function prueba(error,data){}//console.log(data);}
        })

    })
    let selectPorcion2= document.getElementById('porcion');
    let cantidadP= parseFloat(cantidadPedido.innerHTML);
    let precioM= parseFloat(selectPorcion2.value);
    selectPorcion2.addEventListener("change",()=>{
        let cantidadP= parseFloat(cantidadPedido.innerHTML);
        let precioM= parseFloat(selectPorcion2.value);
        porcionPedido.textContent= selectPorcion2.value;
        let importe = cantidadP * precioM;
        porcionPedido.innerHTML= importe;
        cantidadPedido.innerHTML=cantidadP;
    });
    
    suma.addEventListener("click",()=>{    
        let cantidadP= parseFloat(cantidadPedido.innerHTML);
        let precioM= parseFloat(selectPorcion2.value);
        if(cantidadP<=30){
            cantidadP= cantidadP + 1;
            let importe = cantidadP * precioM;
            porcionPedido.innerHTML= importe;
            cantidadPedido.innerHTML=cantidadP;
        }
    });

    resta.addEventListener("click",()=>{
        let cantidadP= parseFloat(cantidadPedido.innerHTML);
        let precioM= parseFloat(selectPorcion2.value);  
        if(cantidadP>=2){
            cantidadP= cantidadP - 1;
            let importe = cantidadP * precioM;
            porcionPedido.innerHTML= importe;
            cantidadPedido.innerHTML=cantidadP;
        }
    });

     
}