<?php
 session_start();
 $email=$_SESSION['email'];

$lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];

$lang=strtolower(substr($lang,0,2));

if($lang=="it"){
    include("languages/it.php");
}
elseif($lang=="fr"){
    include("languages/fr.php");
}
else if ($lang=="en"){
    include("languages/en.php");
}
else if ($lang=="zh"){
    include("languages/zh.php");
}
$conn_mongo = new MongoDB\Driver\Manager("mongodb://localhost:27017");

if(isset($_POST['conferma'])){   
    $code = $_POST['Code'];
    
    $condizione = ["Codice"=>"$code"];
    $options = [
        "projection"=>["_id"=>0,"Email_Utente"=>0]
    ];

    $query = new MongoDB\Driver\Query($condizione,$options);
    $result = $conn_mongo->executeQuery("Verifica.Codes",$query);
     foreach($result as $data){
        print_r($data,true);
    }

 if(empty($data) == true){
        echo"<script type='text/javascript'>alert('".$rpw['scadcode']."'); location='Verifica_code.php';</script>"; 
    }   
    
    else{
        
          $delet = new MongoDB\Driver\BulkWrite;
        $delet->delete(["Codice"=>"$code"]);
        $writerConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 5000);

        $drop_code = $conn_mongo->executeBulkWrite("Verifica.Codes",$delet,$writerConcern);
        echo"<script type='text/javascript'>alert('".$rpw['yescode']."'); location='Cambia_pw.php';</script>";
    } 
}
?>
