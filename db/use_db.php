<?php
include("database_manager.class.php");
include("error.php");

unset($_POST['submit']);
$client = new DatabaseManager();

if (isset($_POST['registra'])) {
    unset($_POST['registra']);
    unset($_POST['conf_pw']);
    $_POST['Password'] = md5($_POST['Password']);
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    $trovato = $client->leggi('utenti', "Email='$email'", "Email", "1", "Email");
    if($trovato == false){
        $client->inserisci("utenti", $_POST);
        echo "<script type='text/javascript'>alert('Registrazione riuscito!');location='../login.php';</script>";
    }
    
    else{
        $msg="../Registra.php?msg=error";
        header("location:$msg");
    }
} 

else if (isset($_POST['login'])) {
    $_POST['Password'] = md5($_POST['Password']);
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    $trovato = $client->leggi('utenti', "Email='$email' and Password='$pass'", "Email", "1", "Email,Password");
    if ($trovato == false) {   
        $msg="../login.php?msg=error";
        header("location:$msg");
    }

    else{
        $rls = $client->leggi('utenti', "Email='$email'", "Nickname", "1");
        session_start();
        $_SESSION['email']=$email;
        $name=$rls[0]["Nickname"];

        $_SESSION['name']=$name;

         echo "<script type='text/javascript'>alert('Accesso riuscito!'); location='../home_page.php';</script>";
    }
}

else if (isset($_POST['salva'])) {

    $host='localhost';
	$user='root';
	$pw='';
	$conn=mysqli_connect($host,$user,$pw);
	$dbname='game_store';
	mysqli_select_db($conn,$dbname);

    $email = $_POST["Email"];
    $namemod=$_POST["Nickname"];
    $hobby=$_POST["Hobby"];
    $country=$_POST["Country"];
    $nascita=$_POST["Nascita"];
    $introduzione=$_POST["Introduzione"];

           $sql = "
                UPDATE utenti
                SET Nickname='$namemod', Hobby='$hobby', Country='$country', Nascita='$nascita', Introduzione='$introduzione'
                WHERE utenti.Email = '$email'
                ";
        mysqli_query($conn, $sql);

        echo "<script type='text/javascript'>alert('Modifica riuscito!'); location='../Profilo.php';</script>";
} 
?>
