<?php
 session_start();
 $email=$_SESSION['email'];

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
    $conn_mongo = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $input = new MongoDB\Driver\BulkWrite;
    $input->delete(["Email_Utente"=>$email],["limit"=>"1"]);
    $conn_mongo->executeBulkWrite("Verifica.Codes",$input);

    echo"<script type='text/javascript'>alert('".$rpw['msgscade']."'); location='Ritrova_pw.php';</script>";
     
}  
    ?>
