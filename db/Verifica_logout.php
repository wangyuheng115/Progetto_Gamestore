<?php
$lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];

$lang=strtolower(substr($lang,0,2));

if($lang=="it"){
    include("../languages/it.php");
}
else if ($lang=="en"){
    include("../languages/en.php");
}

    if(isset($_POST["logout"])){
        session_start();
        session_destroy();

        echo "<script type='text/javascript'>alert('".$texts["logout"]."'); location='../login.php';</script>";
    }
?>
