<?php
class DatabaseConnection {
    private static $istanza=null;
  
    private $Database="game_store";
    private $server='localhost';  
    private $username='root';
    private $password="";
    private $connessione;
    //Costruttore connessione e selezione schema
    private function __construct(){        
        $this->connessione=mysqli_connect($this->server, $this->username, $this->password, $this->Database) or die("Connection errore");
    
        mysqli_select_db($this->connessione,$this->Database) or die("Selezione del database non riuscita");
    }
    //ritorna l’istanza della classe DB
    public static function getIstanza(){
        if (DatabaseConnection::$istanza===null){
            DatabaseConnection::$istanza = new DatabaseConnection();
        }
        return DatabaseConnection::$istanza;
    }
    public function getConnessione(){
        return $this->connessione;
    }
    public function getDatabase(){
return $this->Database;
    }
    public function getServer(){
        return $this->server;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
}
?>
