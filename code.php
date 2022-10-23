<?php
include("db/database_manager.class.php");

if(isset($_POST['conferma'])){
    $client = new DatabaseManager();
    
    $code = $_POST['Code'];

    $trovato = $client->leggi('email_verifica', "code='$code'", "code", "1", "code");

    if($trovato == false){
        echo"<script type='text/javascript'>alert('Codice sbagliato o scaduto!'); location='Verifica_code.php';</script>";
    }   
    
    else{
        $client->cancella("email_verifica","code='$code'");
        echo"<script type='text/javascript'>alert('Codice giusto!'); location='Cambia_pw.php';</script>";
        //header("location:Cambia_pw.php");


    }
}
?>
