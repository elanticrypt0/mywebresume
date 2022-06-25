<?php


class ControllerClass{

    public $controller='';
    public $method='';
    public $model='';
    public $viewFolder='view/';
    public $viewFile='';
    public $view2render=false;
    public $layoutFile='';

    // tomo el controlador que le paso y lo pongo en mayusculas.
    static function readURL_ctrl(){
        return ucfirst((isset($_GET['ctrl']))? $_GET['ctrl'] : 'dashboard');
    }

    // tomo el método a ejecutar
    static function readURL_mtd(){
        return ucfirst((isset($_GET['mtd']))? $_GET['mtd'] : 'index');
    }

    function __construct(){
        $this->controller=ControllerClass::readURL_ctrl();
        $this->method=ControllerClass::readURL_mtd();
        $this->loadModel();
    }

    function loadModel(){
        // si el controlador tiene un modelo entonces lo trae e instancia.
        $model=$this->controller."Model";
        if(file_exists(APP_MODEL_FOLDER.$model.".php")){
            require_once(APP_MODEL_FOLDER.lcfirst($model).".php");
            $this->model=new $model();
        }else{
            $this->model=false;
        }
        return $this->model;
    }

    function getView($viewFile,$data='',$layout=true){
        $viewFile=APP_VIEW_FOLDER.$this->controller."/".$viewFile;
        if(file_exists($viewFile)){
            $this->viewFile=$viewFile;
            $this->view2render=require_once($viewFile);
        }
    }

    public function renderLayaout($layoutFile=false){
        if(!$layoutFile){
            $layoutFile=APP_LAYOUT_FOLDER.$this->layoutFile;
        }else{
            $layoutFile=APP_LAYOUT_FOLDER.$layoutFile;
        }
        if(file_exists($layoutFile)){
            require_once($layoutFile);
            $this->layoutFile=$layoutFile;
        }
    }

    public function renderView(){
        echo (!$this->view2render)? $this->view2render : 'Vista no encontrada';
    }

    // render
    public function render($layout,$view,$data=null){
        $this->renderLayaout($layout);
        $this->getView($view,$data);
    }

    // redirect
    public function redirect($url){
        header("Location: ".$url, TRUE, 301);
    }

}


?>