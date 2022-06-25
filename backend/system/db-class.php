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
            // si tiene un solo elemento entonces lo devuelvo con un fetch.
            if(is_object($response)){
                return ($response->num_rows > 1) ? $response: $response->fetch_assoc();
            }
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