<?php
include("db/database_manager.class.php");
include("db/error.php");

unset($_POST['submit']);
$client = new DatabaseManager();
$_POST['Password'] = md5($_POST['Password']);
$email = $_POST['Email'];
$pass = $_POST['Password'];
if (isset($_POST['registra'])) {
    unset($_POST['registra']);
    $trovato = $client->leggi('utenti', "Email='$email'", "Email", "1", "Email");
    if($trovato == false){
        $client->inserisci("utenti", $_POST);
        echo "<script type='text/javascript'>alert('Registrazione riuscito!');location='login.php';</script>";
    }
    
    else{
        $msg="Registra.php?msg=error";
        header("location:$msg");
    }
} 

else if (isset($_POST['login'])) {
  
    $trovato = $client->leggi('utenti', "Email='$email' and Password='$pass'", "Email", "1", "Email,Password");
    if ($trovato == false) {   
        $msg="login.php?msg=error";
        header("location:$msg");
    }
    echo "<script type='text/javascript'>alert('Accesso riuscito!'); location='home_page.php';</script>";
}
