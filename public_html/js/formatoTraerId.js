export function formatoTraerId(opcion,objeto){

    switch (objeto){

        case "Pedido":
            let data = {
            objeto: objeto,
            opcion: opcion,
            
            }
            return JSON.stringify(data);break;

    }
}