<?php
        //include("db/database_manager.class.php");
include ("email.php");
        if(isset($_POST['cambia'])){
            //$client = new DatabaseManager();
        $email=$_POST['Email'];
        $_POST['Password'] = md5($_POST['Password']);
        $pass = $_POST['Password'];

           // $client->modifica("utenti",$pass,"Email='$email'");

       $sql_1="
       UPDATE utenti SET Password = '$pass' 
       WHERE utenti.Email = '$email'
       ";
       mysqli_query($conn,$sql_1);

       echo"<script type='text/javascript'>alert('Password cambiato!'); location='login.php';</script>";
        }
?>
