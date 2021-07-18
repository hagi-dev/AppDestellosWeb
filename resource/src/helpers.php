<?php

function formatoJSON($result,$opcion,$objeto){

    return App\Formato::JsonMenuMostrar($result,$opcion,$objeto);

}

function consultaError($result){
    return App\Formato::errorConsulta($result);
}