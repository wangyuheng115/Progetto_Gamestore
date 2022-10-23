<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ritrova Password</title>
	<link rel="stylesheet" href="css/stile_login_registra.css" media="screen">
	<script src="js/login_view_pw.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	<h1 align="center">Ritrova Password</h1>
	<div class="box">	
		<form action="email.php" method="post" enctype="application/x-www-form-urlencoded">
			<div class="datiuser">
				<div class="email">
				Email<input type="email" name="Email" id="email" required="required" >
                <input type="submit" name="trova" value="Commit" style="border:solid 2px black; background-color: white; cursor: pointer;"><br>
				<span id="controll_email" style="font-size: 18px;"></span>
				</div>
		</form>
	</div>

	<script>
		$(document).ready(function (){
    		$(".box").fadeIn(2500);
		})


		$('#email').blur(function(){
			 var email = $('#email').val();
			
			 $.post("./db/Verifica_email.php",{Email: email},function(data){
				if(data.trova === 0){
					var email = document.querySelectorAll("input");
					email[0].style.border = "solid 2px #f00";
					document.getElementById("controll_email").innerHTML = "Email non esiste!";
				}
				else{
						document.getElementById("controll_email").innerHTML = "<font color=#53E652>Email valido</font>";
						var email = document.querySelectorAll("input");
						email[0].style.border = "solid 2px #53E652";
				}
			 },"json");
		});	
	</script>
</body>
</html>
