<?php

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

    $email = $_POST['Email'];
    if(isset($_POST['trova'])){
    include("db/database_manager.class.php");
    $client = new DatabaseManager();
    $trovato = $client->leggi('utenti', "Email='$email'", "Email", "1", "Email");
    if($trovato == false){
        echo"<script type='text/javascript'>alert('Email non esiste!!!'); location='Ritrova_pw.php';</script>";
    }
    else{
        session_start();
        $_SESSION['email']=$email;

    $to=$_POST['Email'];
    $subject = $rpw['title'];
    $code = rand(1000,9999); 
    $message = $rpw['msg'].$code;
    $from = "wangyuheng115@gmail.com";
    $headers = "From: $from";

    mail($to, $subject, $message, $headers);

    $input = new MongoDB\Driver\BulkWrite;
    $input->insert(["Codice"=>"$code","Email_Utente"=>"$to"]) ;
  
    $conn_mongo->executeBulkWrite("Verifica.Codes",$input);

    echo"<script type='text/javascript'>alert('".$rpw['alert']."'); location='Verifica_code.php';</script>";
    }
    }; 
?>

