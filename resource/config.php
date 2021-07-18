<?php
$config = array(
    "db"=>array(
        "dbName"=>"salesdestellosweb",
        "userName"=>"root",
        "password"=>"",
        "host"=>"localhost"
    ),
    "urls"=>array(
        
    ),
    "paths"=>array(
        "resource"=>"/path/to/resource",
        "img"=>array(
            "content"=> $_SERVER["DOCUMENT_ROOT"] . "/img"
        )
    )
        );

defined("LIBRARY_PATH")
        or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '../resource/library'));
defined("TEMPLATES_PATH")
        or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '../resource/templates'));

ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
?>