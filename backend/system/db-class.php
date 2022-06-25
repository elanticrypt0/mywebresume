<?php

class DatabaseClass{
    
    public $dbConn='';
    private $tables=['posts','skills','social','security_0'];
    public $debugMode=false;

    public function __construct($host='',$userDb='root',$passwDb='',$dbName){
        $this->dbConn= new mysqli($host,$userDb,$passwDb,$dbName);
        if ($this->dbConn->connect_errno) {
            echo "Falló la conexión con MySQL: (" . $this->dbConn->connect_errno . ") " . $this->dbConn->connect_error;
        }
    }

    public function closeConection(){
        //$this->dbConn->close
    }

    // comprueba la seguridad antes de ejecutar un query
    public function checkSecurity($passw){
        $query='SELECT * FROM '.$this->tables[3].' WHERE passw='.$passw.' LIMIT 1';
        return true; // acá tengo que comprobar que haya funcionado bien.
    }

    public function executeQuery($query){
        if($this->debugMode==true){
            $this->debugThis($query);
            return true;
        }
        if($response=$this->dbConn->query($query)){
            return is_object($response)? $response->fetch_assoc() : true;
        }else{
            echo 'error!';
            return false;
        }
    }

    private function debugThis($query){
        echo '================ DEBUG MODE ON ================';
        echo '<br>';
        var_dump($query);
        echo '<br><br><br>';
    }


}
?>