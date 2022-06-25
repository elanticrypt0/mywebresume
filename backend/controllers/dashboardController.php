<?php

class DashboardController extends ControllerClass{

    function index(){
        $this->render("app-layout.php","index.php");
    }

    function read(){
        echo 'Acá estoy leyendo un registro. Que no es akashico.';
    }

}

?>