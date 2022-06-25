<?php

class PostsController extends ControllerClass{

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
        $post=array("id"=>0,"title"=>htmlspecialchars($_POST['title']),"content"=>htmlspecialchars($_POST['content']),"lang"=>$_POST['lang'],"position"=>$_POST['position'],"created_at"=>date("Y-m-d H:i:s"),"updated_at"=>date("Y-m-d H:i:s"));

        if(!isset($_GET['id'])){
            $this->model->create($post);
        }else{
            $post['id']=$_GET['id'];
            $this->model->update($_GET['id'],$post);
        }
        // redirect
        $this->redirect("?ctrl=posts");
    }

    function update(){
        $this->model=$this->loadModel();
        $data=$this->model->read($_GET['id']);
        $this->render("app-layout.php","update.php",$data);
    }

    function delete(){
        $this->model=$this->loadModel();
        $this->model->delete($_GET['id']);
        $this->redirect("?ctrl=posts");
    }

}

?>