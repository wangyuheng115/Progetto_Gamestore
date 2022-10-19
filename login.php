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
</head>
<body>
	<h1 align="center">Game<span>Store</span></h1>
	<div class="box">
		
		<form action="db/use_db.php" method="post" enctype="application/x-www-form-urlencoded">
			<div class="datiuser">
				Email<input type="email" name="Email" value="" required="required" ><br>
				Password<input type="password" name="Password" value="" required="required" ><br><br>
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
</body>
</html>
