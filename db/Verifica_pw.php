<?php
    include("database_manager.class.php");
    include("error.php");

    

    $client = new DatabaseManager();
    
    $_POST['Password'] = md5($_POST['Password']);
    $u = $_POST["Password"];
    $trovato = $client->leggi('utenti', "Password='$u'", "Password", "1", "Password");
    if($trovato == false){
        echo json_encode(array("trova"=>0,"data" =>"Password sbagliato!"));
    }
    else{
        echo json_encode(array("trova"=>1,"data" =>"Password corretto!"));
    }

?>
