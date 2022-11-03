<?php
include("db/database_manager.class.php");
include("email.php");
if(!isset($_POST['Code'])){
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
$client = new DatabaseManager();
$client->cancella("email_verifica","code='$code'");

echo"<script type='text/javascript'>alert('".$rpw['msgscade']."'); location='Ritrova_pw.php';</script>";
     
    }  
    ?>
