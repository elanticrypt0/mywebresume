<?php

class SocialController extends ControllerClass{

    function index(){
        $this->model=$this->loadModel();
        $data=$this->model->read_all();
        $this->render("app-layout.php","index.php",$data);
    }

    function create(){
        $this->render("app-layout.php","create.php");
    }

    function read(){
        echo 'Acá estoy leyendo un registro. Que no es akashico.';
    }

    function store(){
        $this->model=$this->loadModel();
        $social=array("id"=>0,"name"=>htmlspecialchars($_POST['name']),"url"=>htmlspecialchars($_POST['url']),"detail"=>$_POST['detail'],"icon"=>$_POST['icon'],"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s"));

        if(!isset($_GET['id'])){
            $this->model->create($social);
        }else{
            $social['id']=$_GET['id'];
            $this->model->update($_GET['id'],$social);
        }
        // redirect
        $this->redirect("?ctrl=social");
    }

    function update(){
        $this->model=$this->loadModel();
        $data=$this->model->read($_GET['id']);
        $this->render("app-layout.php","update.php",$data);
    }

    function delete(){
        $this->model=$this->loadModel();
        $this->model->delete($_GET['id']);
        $this->redirect("?ctrl=social");
    }

}

?>