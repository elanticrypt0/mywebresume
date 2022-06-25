<?php

require_once('config.php');
require_once('db-class.php');
require_once(APP_MODEL_FOLDER.'modelClass.php');
require_once(APP_CONTROLLER_FOLDER.'ControllerClass.php');


// current page es el nombre delcontrolador que estoy manejando.
$currentPage=ControllerClass::readURL_ctrl();
$currentController=ControllerClass::readURL_ctrl()."Controller";
$currentPageMethod=ControllerClass::readURL_mtd();
var_dump($currentController);
// si existe el controlador lo uso.
$controllerFile=APP_CONTROLLER_FOLDER.lcfirst($currentController).".php";

if(is_file($controllerFile)){
    require_once($controllerFile);
    $currentController=new $currentController();
    $currentController->$currentPageMethod();
}else{
    echo '404 - andá a tu casa';
}

?>