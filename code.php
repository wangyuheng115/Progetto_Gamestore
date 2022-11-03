<?php
include("db/database_manager.class.php");

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

if(isset($_POST['conferma'])){
    $client = new DatabaseManager();
    
    $code = $_POST['Code'];

    $trovato = $client->leggi('email_verifica', "code='$code'", "code", "1", "code");

    if($trovato == false){
        echo"<script type='text/javascript'>alert('".$rpw['scadcode']."'); location='Verifica_code.php';</script>";
    }   
    
    else{
        $client->cancella("email_verifica","code='$code'");
        echo"<script type='text/javascript'>alert('".$rpw['yescode']."'); location='Cambia_pw.php';</script>";
    }
}
?>
