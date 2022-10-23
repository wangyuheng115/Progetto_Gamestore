<?php
header("Content-Type:text/html;charset=utf-8");
?>
<html>

<head>
	<meta charset="utf-8">
	<title>GameStore Registrazione</title>
	<link rel="stylesheet" href="css/stile_login_registra.css" media="screen">
	<script src="js/Controlla_campo.js"></script>
	<script src="js/login_view_pw.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
	<h1 align="center">Ritrova Password</h1>
	
	<div class="box">
		<form action="Verifica_cambia.php" method="post" enctype="application/x-www-form-urlencoded">
			<div class="datiuser">
                <div class="email">
				Email<input type="email" name="Email" id="email" required="required" >
				<span id="controll_email" style="font-size: 18px;"></span>
				</div>

				<div class="password">
				Nuova Password<input type="password" id="password" name="Password" onkeyup="VerificaPassword()" required="required">
				<img src="img/no_pw.png" id="view_pw" width="25px" onclick="VisualizzaPassword()" style="position:relative; top: 10px;"><br>
				<span id="controll_password" style="font-size: 18px;"></span>
				<span id="controll_password_1" style="font-size: 18px;"></span>
				<span id="controll_password_2" style="font-size: 18px;"></span>
				<span id="controll_password_3" style="font-size: 18px;"></span>
				<span id="controll_password_4" style="font-size: 18px;"></span>
				</div>

				<div class="conf_pw">
				Conferma Password<input type="password" id="conf_pw" onkeyup="ConfermaPassword()" name="conf_pw" required="required"><br>
				<span id="conferma_password" style="font-size: 18px;"></span>
				</div>

			</div>
			
			    <input type="submit" name="cambia" value="Conferma" class="btn">
			
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
