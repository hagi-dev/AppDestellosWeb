export function formatoPedido(opcion,objeto,id,fechaPedido,idCliente){

    switch (objeto){

        case "Pedido":
            let data = {
            objeto: objeto,
            opcion: opcion,
            id: id,
            fechaPedido:fechaPedido,
            idCliente:idCliente,
            
            }
            return JSON.stringify(data);break;

    }
}