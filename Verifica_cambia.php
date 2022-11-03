<?php
//include("db/database_manager.class.php");
include("email.php");
if (isset($_POST['cambia'])) {
        //$client = new DatabaseManager();
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
        $email = $_POST['Email'];
        $_POST['Password'] = md5($_POST['Password']);
        $pass = $_POST['Password'];

        // $client->modifica("utenti",$pass,"Email='$email'");

        $sql_1 = "
       UPDATE utenti SET Password = '$pass' 
       WHERE utenti.Email = '$email'
       ";
        mysqli_query($conn, $sql_1);

        echo "<script type='text/javascript'>alert('".$rpw['sucess']."'); location='login.php';</script>";
}
