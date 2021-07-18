export function pintarMenu(error,data1){
    // if(error) return console.log(error);
    let opcion;
    let categoria= document.getElementById('titulo-pagina');
    let contentCategoria=categoria.innerHTML;
    const Menu = document.querySelector('#menu');
    const template =document.querySelector('#template_menu').content;
    const fragment = document.createDocumentFragment();
    if(contentCategoria==='Pollos y parrillas con sabor...'){
        opcion ='1';
        document.getElementById("path").innerHTML="Carta / pollos y parillas"
    }
    else if(contentCategoria==='Anticuchos peruanos...'){
        opcion ='2';
        document.getElementById("path").innerHTML="Carta / Anticuchos"
    }
    else if(contentCategoria==='Combos familiares...'){
        opcion ='3';
        document.getElementById("path").innerHTML="Carta / Combos"
    }
    else if(contentCategoria==='Extras y bebidas...'){
        opcion ='4';
        document.getElementById("path").innerHTML=" Carta / Extras"
    }
    // console.log(template);
    data1.forEach(function(menu1){
        // console.log(opcion);
        if(menu1.idcategoria===opcion){

        template.querySelector('img').setAttribute('src',menu1.urlMenu);
        template.querySelector('h5').textContent = menu1.nameMenu;
        template.querySelector('p').textContent = menu1.precioMenu;
        template.querySelector('button').dataset.id = menu1.idMenu;
        template.querySelector('h6').textContent= menu1.descriptcion1;
        const clone= template.cloneNode(true)
        fragment.appendChild(clone)
        
        }
        
    });
    Menu.appendChild(fragment);
}