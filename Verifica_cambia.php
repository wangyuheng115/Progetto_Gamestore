<?php

session_start();
$email=$_SESSION['email'];

if (isset($_POST['cambia'])) {

        $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

        $lang = strtolower(substr($lang, 0, 2));

        if ($lang == "it") {
                include("languages/it.php");
        } elseif ($lang == "fr") {
                include("languages/fr.php");
        } else if ($lang == "en") {
                include("languages/en.php");
        } else if ($lang == "zh") {
                include("languages/zh.php");
        }
        $_POST['Password'] = md5($_POST['Password']);
        $pass = $_POST['Password'];

        $host='localhost';
	$user='root';
	$pw='';
	$conn=mysqli_connect($host,$user,$pw);
	$dbname='game_store';
	mysqli_select_db($conn,$dbname);

           $sql = "
                UPDATE utenti SET Password = '$pass' 
                WHERE utenti.Email = '$email'
                ";
        mysqli_query($conn, $sql);

        echo "<script type='text/javascript'>alert('".$rpw['sucess']."'); location='login.php';</script>";
}
