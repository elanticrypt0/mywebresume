<?php

/**
 * Este controlador restaura los valores de la base de datos, para la versión de prueba.
*/

class DbrestoreController extends ControllerClass{

    function index(){
        $this->model=$this->loadModel(true);
        // primero hace un truncate table y después rellena.
        $query="TRUNCATE TABLE posts; TRUNCATE TABLE skills; TRUNCATE TABLE social";
        $this->model->query($query);
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

}

?>