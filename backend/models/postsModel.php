<?php

class PostsModel extends ModelClass{

    public $table="posts";
    public $modelFields=array("id","title","content","lang","position","created_at","updated_at");

}

?>