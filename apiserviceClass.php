<?php

require_once("backend/config.php");
require_once("backend/".APP_SYSTEM_FOLDER."db-class.php");

class APIServiceClass {
    public $dbconn=false;
    public $tables=array(
        "posts"=>"posts",
        "skills"=>"skills",
        "social"=>"social",
    );

    function __construct(){
        $this->dbConnection();
    }

    function dbConnection(){
        $this->dbconn=new DatabaseClass(DATABASE['host'],DATABASE['user'],DATABASE['password'],DATABASE['database']);
    }

    function jsonResponse($response){
        $json=array();
        $i=0;
        foreach($response as $item){
            $json[$i]=$item;
            $i++;
        }
        return json_encode($json);
    }

    function read_all_posts(){
        $query="SELECT * FROM ".$this->tables['posts']." ORDER BY id ASC";
        $response=$this->dbconn->executeQuery($query);
        echo $this->jsonResponse($response);
    }

    function read_post($id){
        $query="SELECT * FROM ".$this->tables['posts']." WHERE id=".$id." LIMIT 1";
        $response=$this->dbconn->executeQuery($query);
        echo json_encode($response);
    }

    function read_all_skills(){
        $query="SELECT * FROM ".$this->tables['skills']." ORDER BY id ASC";
        $response=$this->dbconn->executeQuery($query);
        echo $this->jsonResponse($response);
        
    }

    function read_skill($id){
        $query="SELECT * FROM ".$this->tables['skills']." WHERE id=".$id." LIMIT 1";
        $response=$this->dbconn->executeQuery($query);
        echo json_encode($response);
    }

    function read_all_social(){
        $query="SELECT * FROM ".$this->tables['social']." ORDER BY id ASC";
        $response=$this->dbconn->executeQuery($query);
        echo $this->jsonResponse($response);
    }

    function read_social($id){
        $query="SELECT * FROM ".$this->tables['social']." WHERE id=".$id." LIMIT 1";
        $response=$this->dbconn->executeQuery($query);
        echo json_encode($response);
    }

}

?>