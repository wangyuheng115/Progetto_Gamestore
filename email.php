<?php
session_start();
    $host='localhost';
	$user='root';
	$pw='';
	$conn=mysqli_connect($host,$user,$pw);
	$dbname='game_store';
	mysqli_select_db($conn,$dbname);
    
    if(isset($_POST['trova'])){
    $to=$_POST['Email'];
   $subject = "Ritrova password";
   $code = rand(1000,9999); 
   $message = "Il tuo codice è: $code";
   $from = "wangyuheng115@gmail.com";
   $headers = "From: $from";
  
   mail($to, $subject, $message, $headers);

   $sql="
    INSERT INTO email_verifica
    (id,code,email_utente)
    VALUES('','$code','$to');
    ";
    mysqli_query($conn,$sql);
    
    echo"<script type='text/javascript'>alert('Codice inviato!'); location='Verifica_code.php';</script>";
    };
?>

