import { fetchData } from "../../public_html/js/fetchData.js";
import { pintarMenu } from "../../public_html/js/pintarMenu.js";
import { pintarPopup } from "../../public_html/js/pintarPopup.js";
import { formatoPedido } from "../../public_html/js/formatoPedido.js";
import { formatoPedidoMenu } from "../../public_html/js/formatoPedidoMenu.js";
import { formatoTraerId } from "../../public_html/js/formatoTraerId.js";
export function listarPedido(){
    let idCliente =document.getElementById("id2").innerHTML;
    let  cantidad2=document.getElementById("cantidad");
    let importe =document.getElementById("vistaImporte");
    let selectPorcion3= document.querySelector('.select');
    // let idCliente =document.getElementById("id2").innerHTML;
    // let idCliente =document.getElementById("id2").innerHTML;
    // let idCliente =document.getElementById("id2").innerHTML;
    let agregation = document.getElementById("agregar");
    console.log(agregation)
    agregation.addEventListener("click",()=>{
        let datos = formatoPedido("insert","Pedido",0,idCliente);
        fetchData(datos,consultaId,prueba);
        console.log("pedido:"+datos);

        function consultaId(error,data){
            
            let datos3 = formatoTraerId("list","Pedido");
            fetchData(datos3,ingresarPedidoMenu,prueba);
            console.log("list pedi:"+datos3);

            }

        function ingresarPedidoMenu(error,data)
        {
            data.forEach(function(data2){
                console.log(data2)
                let datos2 = formatoPedidoMenu("insert y lista","PedidoMenu",data2.idPedido,agregation.dataset.id
                ,cantidad2.innerHTML,0,selectPorcion3.value,4);
            })
            fetchData(datos2,pintarPedidos,prueba);
        }

        function pintarPedidos(error,data)
        {
                console.log(data2)
                const pedido = document.querySelector('#pedido');
                const template2 =document.querySelector('#card-pedido').content;
                const fragment = document.createDocumentFragment();
                data1.forEach(function(menu1){
                    // console.log(opcion);
                    if(menu1.idcategoria===opcion){
            
                    template2.querySelector('img').setAttribute('src',menu1.urlMenu);
                    template2.querySelector('h5').textContent = menu1.nameMenu;
                    template2.getElementById('pedido_contenido').textContent = menu1.precioMenu;
                    template2.getElementById('pedido_importe').textContent = menu1.precioMenu;
                    template2.getElementById('modificacion__cantidad').dataset.id = menu1.idMenu;
                    template2.getElementById('modificacion__eliminar').dataset.id = menu1.idMenu;
                    template2.querySelector('h6').textContent= menu1.descriptcion1;
                    const clone= template2.cloneNode(true)
                    fragment.appendChild(clone)
                    
                    }
                    
                });
                pedido.appendChild(fragment);
        }

        function prueba(error,data)
        {
            data.forEach(function(data2){
                console.log(data2)
            })
        }
        
    });
    
    
    
}