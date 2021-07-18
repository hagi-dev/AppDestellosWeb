export function formatoJsonPorcion(opcion,objeto,id,porcion,precio,stock,idMenu){

    switch (objeto){

        case "Porcion":
            let data = {
            objeto: objeto,
            opcion: opcion,
            id: id,
            porcion:porcion,
            precio:precio,
            stock:stock,
            idMenu:idMenu,
            
            }
            return JSON.stringify(data);break;

    }
}