export function formatoJsonMenu(opcion,objeto,id,nombre,descripcion,urlImg,idCategoria){

    switch (objeto){

        case "Menu":
            let data = {
            objeto: objeto,
            opcion: opcion,
            id: id,
            nombre:nombre,
            descripcion:descripcion,
            urlImg:urlImg,
            idCategoria:idCategoria
            
            }
            return JSON.stringify(data);break;

    }
}