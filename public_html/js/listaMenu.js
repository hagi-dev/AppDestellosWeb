import { fetchData } from "../../public_html/js/fetchData.js";
import { pintarMenu } from "../../public_html/js/pintarMenu.js";
import { pintarPopup } from "../../public_html/js/pintarPopup.js";
import { formatoJsonMenu } from "./formatoJsonMenu.js";
export function listaMenu(){
    let datos = formatoJsonMenu("listar","Menu",'','','','','');
    let data = fetchData(datos,pintarMenu,pintarPopup);
    
}