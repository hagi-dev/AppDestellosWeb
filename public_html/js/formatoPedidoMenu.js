export function formatoPedidoMenu(opcion,objeto,idPedido,idMenu,cantidad,importe,precioVenta,Valoracion){

    switch (objeto){

        case "PedidoMenu":
            let data = {
            objeto: objeto,
            opcion: opcion,
            idPedido: idPedido,
            idMenu:idMenu,
            importe:importe,
            precioVenta:precioVenta,
            Valoracion:Valoracion,
            
            }
            return JSON.stringify(data);break;

    }
}