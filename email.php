<?php
session_start();

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

    $host='localhost';
	$user='root';
	$pw='';
	$conn=mysqli_connect($host,$user,$pw);
	$dbname='game_store';
	mysqli_select_db($conn,$dbname);
    
    if(isset($_POST['trova'])){
    $to=$_POST['Email'];
   $subject = $rpw['title'];
   $code = rand(1000,9999); 
   $message = $rpw['msg'].$code;
   $from = "wangyuheng115@gmail.com";
   $headers = "From: $from";
  
   mail($to, $subject, $message, $headers);

   $sql="
    INSERT INTO email_verifica
    (id,code,email_utente)
    VALUES('','$code','$to');
    ";
    mysqli_query($conn,$sql);
    
    echo"<script type='text/javascript'>alert('".$rpw['alert']."'); location='Verifica_code.php';</script>";
    };
?>

