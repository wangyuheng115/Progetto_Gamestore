<?php
header("Content-Type:text/html;charset=utf-8");
?>
<html>

<head>
	<meta charset="utf-8">
	<title>iShop Registrazione</title>
	<link rel="stylesheet" href="css/stile_login_registra.css" media="screen" type="text/css">
</head>

<body>
	<h1 align="center">Registrazione</h1>
	<div class="box">

		<form action="use_db.php" method="post" enctype="application/x-www-form-urlencoded">
			<div class="datiuser">
				Email<input type="email" name="Email" value="" required="required"><br>
				Password<input type="password" name="Password" value="" required="required"><br>
				Età<input type="text" name="Eta" value="" required="required"><br>
				Hobby<input type="text" name="Hobby" value="" required="required"><br>
				Nazionalità<input type="text" name="Country" value="" required="required"><br>
			</div>
			<?php
			if(isset($_GET['msg'])){
					echo"<p style='color: red;'>Email già registrato.</p>";
				}
			?>
			<input type="submit" name="registra" value="Conferma" class="btn">
			<input type="button" onclick="window.location.href='login.php'" value="Ritorno login" class="btn">
		</form>
	</div>
</body>

</html>
