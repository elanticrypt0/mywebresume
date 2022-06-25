<?php

require_once("apiserviceClass.php");
$api = new APIServiceClass();

$method=isset($_GET['action'])? strtolower($_GET['action']): false;

if($method!=false){
    if(isset($_GET['id'])){
        $api->$method($_GET['id']);
    }else{
        $api->$method();
    }
}else{
    echo 'Error';
}

?>