<<<<<<< HEAD
<?php
    include("database_manager.class.php");
    include("error.php");

    

    $client = new DatabaseManager();
    $u = $_POST["Email"];
    $trovato = $client->leggi('utenti', "Email='$u'", "Email", "1", "Email");
    if($trovato == false){

        echo json_encode(array("trova"=>0,"data" =>"non trovato nessun utente"));
    }
    else{
        echo json_encode(array("trova"=>1,"data" =>"trovato un'utente"));
    }

?>
=======
<?php
    include("database_manager.class.php");
    include("error.php");

    

    $client = new DatabaseManager();
    $u = $_POST["Email"];
    $trovato = $client->leggi('utenti', "Email='$u'", "Email", "1", "Email");
    if($trovato == false){

        echo json_encode(array("trova"=>0,"data" =>"non trovato nessun utente"));
    }
    else{
        echo json_encode(array("trova"=>1,"data" =>"trovato un'utente"));
    }

?>
>>>>>>> 825adae (prova)
