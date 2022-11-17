<?php
    include("error.php");
    include_once("conn_database.class.php");
    class DatabaseManager {
        private static $istanza_connessione = null;
        
        public function  __construct() {
            DatabaseManager::$istanza_connessione = DatabaseConnection::getIstanza();
        }
        
        public function DatabaseManager(){
            self::__construct();
        } 
        //operazione di inserimento nel database
        //INPUT
        // dati è un array associativo contenente i dati che devono essere inseriti
        // OUTPUT
        //Ritorna true o false a seconda dell'esito dell'operazione
        public function inserisci($tabella,$dati,$stampa=false){
            $campiTabella="(";
            $valoriTabella="(";
            $query="insert into ".$tabella." ";
            //lettura dei dati da inserire
            foreach($dati as $key => $valore){
                $campiTabella.=$key.",";
                $valore=trim($this->pulisciStringa($valore));
                $valoriTabella.="'".$valore."',"; 
            }
            //eliminazione dell'ultima virgola
            $campiTabella=substr($campiTabella,0,-1);

            $valoriTabella=substr($valoriTabella,0,-1);
        //chiusura parentesi
        $campiTabella.=")";
        $valoriTabella.=")";
        //completamento query
        $query.=$campiTabella." values ".$valoriTabella;
        if ($stampa==true) exit("la query è:".$query);
        mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),"SET NAMES 'utf8'");  
	mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),$query);
        return mysqli_insert_id(DatabaseManager::$istanza_connessione->getConnessione());
    }
    
     public function inserisciSecurity($dati){
        $campiTabella="(";
        $valoriTabella="(";
        $query="insert into security_mappatura ";
        //lettura dei dati da inserire
        foreach($dati as $key => $valore){
            $campiTabella.=$key.",";
            $valore=str_replace("'", "\'", $valore);
            $valoriTabella.="'".$valore."',";
        }

        //eliminazione dell'ultima virgola
        $campiTabella=substr($campiTabella,0,-1);
        $valoriTabella=substr($valoriTabella,0,-1);
        //chiusura parentesi
        $campiTabella.=")";
        $valoriTabella.=")";
        //completamento query
        $query.=$campiTabella." values ".$valoriTabella;
        mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),$query);
        return true;
    }
     

    public function cancella($tabella,$condition){
        $where=" where ".$condition;
        $query="delete from ".$tabella.$where;
        return mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),$query);
    }
    
   
  

    public function leggi($tabella,$condition="",$orderBy="",$limit="",$selectColumn="*",$printQuery=false){
        mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),"SET NAMES 'utf8'");
        
        $where="";
        if($condition) $where  =" where ".$condition; 
	if($orderBy)   $orderBy=" order by ".$orderBy;

    if($limit) $limit=" limit ".$limit;
        $query="select ".$selectColumn." from ".$tabella.$where." ".$orderBy." ".$limit;
        if ($printQuery) echo ($query);
        $rs=mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),$query); 
        if (!$rs) {
           // echo $query;
            return false;
        }     
      
        $trovato=mysqli_num_rows($rs);
    
        if (!$trovato) return false;
        $arrayRitorno=array();
        while($row = mysqli_fetch_assoc($rs)){
            array_push($arrayRitorno, $row);
        }
        return $arrayRitorno;
    }

    public function eseguiQuery($query){
        mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),"SET NAMES 'utf8'");


        $rs=mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),$query);
        if (!$rs) {
            echo $query;
            return false;
        }

        $trovato=mysqli_num_rows($rs);

        if (!$trovato) return false;
        $arrayRitorno=array();
        while($row = mysqli_fetch_assoc($rs)){
            array_push($arrayRitorno, $row);
        }
        return $arrayRitorno;
    }

    public function modifica($tabella,$dati,$condition=""){
        $where="";
        if($condition) $where=" where ".$condition;
        $set="";
        $query="update ".$tabella." ";
        //lettura dei dati da inserire
        foreach($dati as $key => $valore){
            $valore=trim($this->pulisciStringa($valore));
            $set.=$key."=".$valore."',";
          //  $tentativoIniezione=$this->tryInjection($valore);
        }
        //eliminazione dell'ultima virgola
        $set=substr($set,0,-1);
        mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),"SET NAMES 'utf8'");
        //completamento query
        $query.=" set ".$set.$where;
        
        return mysqli_query(DatabaseManager::$istanza_connessione->getConnessione(),$query);
    }
    public function pulisciStringa($stringa){
        $stringa=str_replace("\"", "&rsquo;", $stringa);
        $stringa=str_replace("â€","", $stringa);
        $stringa=str_replace("","", $stringa);
        $stringa=str_replace("Â","", $stringa);
        $stringa=str_replace("'", "&rsquo;", $stringa);  
        $stringa=str_replace("'","&rsquo;", $stringa);
        $stringa=str_replace("à", "&agrave;", $stringa);
        $stringa=str_replace("è", "&egrave;", $stringa);
        $stringa=str_replace("ì", "&igrave;", $stringa);
        $stringa=str_replace("ò", "&ograve;", $stringa);
        $stringa=str_replace("ù", "&ugrave;", $stringa);
        $stringa=strtolower($stringa);
        return $stringa;
    }


    }?>
