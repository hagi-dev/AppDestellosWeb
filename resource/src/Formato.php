<?php

namespace App;

class Formato 
{

    public static function JsonMenuMostrar($result,$opcion,$objeto)
    {
        try{
            $json = array();
            if(!empty($result)){

                if($objeto=="Menu"){
                    while($row = mysqli_fetch_array($result) ){
                        $json[]= array(
                            'descriptcion1'=> $row["MEN_descripcion"],
                            'idMenu'=> $row['MEN_id'],
                            'nameMenu'=> $row['MEN_name'],
                            'urlMenu'=> $row['MEN_urlimg'],
                            'idcategoria'=> $row['CAT_id'],
                        );
                    }
                }
                else if($objeto=="Porcion"){
                    while($row = mysqli_fetch_array($result) ){
                        $json[]= array(
                            'porcion'=> $row['POR_porcion'],
                            'precio'=> $row['POR_price'],
                            'idMenu'=> $row['MEN_id']
                        );
                    }
                }
                else if($objeto=="Usuario"){
                    while($row = mysqli_fetch_array($result) ){
                        $json[]= array(
                            'idCliente'=> $row['CUS_id'],
                        );
                    }
                }
                else if($objeto=="Pedido"){
                    while($row = mysqli_fetch_array($result) ){
                        $json[]= array(
                            'idPedido'=> $row['PED_id'],
                        );
                    }
                }
                else if($objeto=="PedidoMenu"){
                    while($row = mysqli_fetch_array($result) ){
                        $json[]= array(
                            'idPedido'=> $row['PED_id'],
                            'idMenu'=> $row['MEN_id'],
                            'cantidad'=> $row['ORM_amount'],
                            'importe'=> $row['ORM_importe'],
                            'precioVenta'=> $row['ORM_sales_price'],
                            'valoracion'=> $row['ORM_valoracion']

                        );
                    }
                }

            }
            else {
                $json[]= array(
                    'error'=> 'no hay datos que mostrar'
                );
            }
            $jsonString = json_encode($json);
            return  $jsonString;
        }catch(Exception $err){
            echo $err;
        }
    }

    public static function errorConsulta($result){
        if(!$result)
        {
            die("query Fail consulta");

        }
    }

}