export function fetchData(data,callback,callback2){
    try {
        let respuesta;
        const url = '../../servicio.php'
        const http= new XMLHttpRequest();
        // console.log("paso1");
        http.open("POST",url,true);
        http.setRequestHeader('Content-Type','application/x-www-form-urlencoded')

        http.onreadystatechange = function(){
            if(this.readyState===4 && this.status===200){
                console.log(this.responseText);
                respuesta = JSON.parse(this.responseText);
                callback(null,respuesta);
                callback2(null,respuesta);
        //     }else{
        //         const error= new Error('Error'+url,callback);
        //         callback(error,null);
        //         callback2(error,null);
        //     }
        // }
            }
        }
        http.send(data);
        return respuesta;
    } catch (error) {
        console.log(error);
        let message= error.statusText || " no se pudo conectar al servidor"
        document.getElementsByTagName("main").innerHTML=`
            <div><p>Error ${error.status}: ${message}</p> </div>
        `
    }
}