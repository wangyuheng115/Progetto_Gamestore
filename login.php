<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Game_store_Loginpage</title>
	<link rel="stylesheet" href="css/stile_login_registra.css" media="screen">
	<script src="js/login_view_pw.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	<h1 align="center">Game<span>Store</span></h1>
	<div class="box">	
		<form action="db/use_db.php" method="post" enctype="application/x-www-form-urlencoded">
			<div class="datiuser">
				<div class="email">
				Email<input type="email" name="Email" id="email" required="required" ><br>
				<span id="controll_email" style="font-size: 18px;"></span>
				</div>

				<div class="pw">
				Password<input type="password" name="Password" id="password" required="required" ><img src="img/no_pw.png" id="view_pw" width="25px" onclick="VisualizzaPassword()" style="position:relative; top: 10px;"><br>
				<span id="controll_password" style="font-size: 18px;"></span>
				</div>
			</div>
			<?php
			if(isset($_GET['msg'])){
					echo"<p style='color: red;'>Hai sbagliato Email o Password.</p>";
				}
			?>
			<input type="submit" name="login" value="Login" class="btn">
			<input type="submit" onclick="window.location.href='registra.php'" value="Registra"class="btn">
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

		$('#password').blur(function(){
			 var pw = $('#password').val();
			
			 $.post("./db/Verifica_pw.php",{Password: pw},function(data){
				if(data.trova === 0){
					document.getElementById("controll_password").innerHTML = "Password errato!";
				}
				else{
					document.getElementById("controll_password").innerHTML = "";
				}
			 },"json");
		});	
	</script>
</body>
</html>

<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Game_store_Loginpage</title>
	<link rel="stylesheet" href="css/stile_login_registra.css" media="screen">
	<script src="js/login_view_pw.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	<h1 align="center">Game<span>Store</span></h1>
	<div class="box">	
		<form action="db/use_db.php" method="post" enctype="application/x-www-form-urlencoded">
			<div class="datiuser">
				<div class="email">
				Email<input type="email" name="Email" id="email" required="required" ><br>
				<span id="controll_email" style="font-size: 18px;"></span>
				</div>

				<div class="pw">
				Password<input type="password" name="Password" id="password" required="required" ><img src="img/no_pw.png" id="view_pw" width="25px" onclick="VisualizzaPassword()" style="position:relative; top: 10px;"><br>
				<span id="controll_password" style="font-size: 18px;"></span>
				</div>
			</div>
			<?php
			if(isset($_GET['msg'])){
					echo"<p style='color: red;'>Hai sbagliato Email o Password.</p>";
				}
			?>
			<input type="submit" name="login" value="Login" class="btn">
			<input type="submit" onclick="window.location.href='registra.php'" value="Registra"class="btn">
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

		$('#password').blur(function(){
			 var pw = $('#password').val();
			
			 $.post("./db/Verifica_pw.php",{Password: pw},function(data){
				if(data.trova === 0){
					document.getElementById("controll_password").innerHTML = "Password errato!";
				}
				else{
					document.getElementById("controll_password").innerHTML = "";
				}
			 },"json");
		});	
	</script>
</body>
</html>

