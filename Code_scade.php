<?php
include("db/database_manager.class.php");
include("email.php");
if(!isset($_POST['Code'])){
$client = new DatabaseManager();
$client->cancella("email_verifica","code='$code'");

echo"<script type='text/javascript'>alert('Codice scatuto! Richidi un'altra!'); location='Ritrova_pw.php';</script>";
     
    }  
    ?>
