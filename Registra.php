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
	<h1 align="center">Registrazione</h1>
	
	<div class="box">
		<form action="db/use_db.php" method="post" enctype="application/x-www-form-urlencoded">
			<div class="datiuser">
				<div class="emai">
				Email<input type="email" name="Email" id="email" required="required"><br>
				<span id="controll_email" style="font-size: 18px;"></span>
				</div>

				<div class="password">
				Password<input type="password" id="password" name="Password" onkeyup="VerificaPassword()" required="required">
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

				<div class="eta">
				Età<input type="text" id="eta" name="Eta" onkeyup="VerificaEta()" required="required"><br>
				<span id="controll_eta" style="font-size: 18px;"></span>
				</div>

				<div class="hobby">
				Hobby<input type="text" id="hobby" name="Hobby" onkeyup="VerificaHobby()" required="required"><br>
				<span id="controll_hobby" style="font-size: 18px;"></span>
				</div>
				
				<div class="nazione">
				Nazione<input type="text" id="nazione" name="Country" onkeyup="VerificaNazione()" required="required"><br>
				<span id="controll_nazione" style="font-size: 18px;"></span>
				</div>
			</div>
			<?php
			if(isset($_GET['msg'])){
					echo"<p style='color: red;'>Email già registrato.</p>";
				}
			?>
			<input type="submit" onclick=""	name="registra" value="Conferma" class="btn">
			<input type="button" onclick="window.location.href='login.php'" value="Ritorno login" class="btn">
			</form>
			</div>
		<script>
		$(document).ready(function (){
    		$(".box").fadeIn(2500);
		})

		$('#email').blur(function(){
			 var email = $('#email').val();
			
			 $.post("./db/Verifica_email.php",{Email: email},function(data){
				if(data.trova === 1){
					var email = document.querySelectorAll("input");
					email[0].style.border = "solid 2px #f00";
					document.getElementById("controll_email").innerHTML = "Email già registrato!";
				}
				else if(data.trova === 0){
					var email = document.getElementById('email').value;
   					var reg_email=/^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/;

					if(reg_email.test(email) == true){
						document.getElementById("controll_email").innerHTML = "<font color=#53E652>Email valido</font>";
						var email = document.querySelectorAll("input");
						email[0].style.border = "solid 2px #53E652";
					}
					else{
						var email = document.querySelectorAll("input");
						email[0].style.border = "solid 2px #f00";
						document.getElementById("controll_email").innerHTML = "Email non valido!";
					}
				}

			 },"json");
		});	
	</script>
</body>

</html>
