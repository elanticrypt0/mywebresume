<?php

class ModelClass{

    public $tableName='';
    public $dbConn='';
    public $modelFields;
    

    function __construct($debugMode=false){
        $this->dbConn=new DatabaseClass(DATABASE['host'],DATABASE['user'],DATABASE['password'],DATABASE['database']);
        $this->dbConn->debugMode=$debugMode;
    }

    // combierte un array a string para un SQL query
    public function array2String($arrayIn){
        return "'".implode("','",$arrayIn)."'";
    }

    // combierte un array a string para un SQL query
    public function array2String_simple($arrayIn){
        return "".implode(",",$arrayIn)."";
    }

    // combierte un array a string para un SQL query para UPDATE
    public function array2StringByPairs($arrayIn){
        $stringOut='';
        $arrayLength=count($arrayIn);
        $arrayPosition=0;
        foreach($arrayIn as $key => $value){
            $stringOut.="`".$key."` = '".$value."'";
            // mientras el elemento no sea el último agrego una coma al final para concatenar.
            $stringOut.=($arrayPosition < $arrayLength -1)? ' , ' : '';
            $arrayPosition++;
        }
        return $stringOut;
    }


    public function read_all($where=''){
        $query='SELECT * FROM '.$this->table.' '.$where.' ORDER BY id DESC';
        return $this->dbConn->executeQuery($query);
    }

    public function create($toInsert){
        $query='INSERT INTO '.$this->table.' ('.$this->array2String_simple($this->modelFields).') VALUES ('.$this->array2String($toInsert).')';
        $this->dbConn->executeQuery($query);
    }

    public function read($id){
        $query="SELECT * FROM ".$this->table." WHERE id=".$id." LIMIT 1";
        return $this->dbConn->executeQuery($query);
    }

    public function update($id,$toUpdate){
        $query="UPDATE ".$this->table." SET ".$this->array2StringByPairs($toUpdate)." WHERE id=".$toUpdate['id']." LIMIT 1";
        return $this->dbConn->executeQuery($query);
        
    }
    
    public function delete($id){
        $query="DELETE FROM ".$this->table." WHERE id=".$id;
        return $this->dbConn->executeQuery($query);
    }
    

}

?>