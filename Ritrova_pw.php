<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ritrova Password</title>
	<link rel="stylesheet" href="css/stile_login.css" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="container p-5 my-5 text-white">
		<div class="box" id="box">
			<div class="row">
				<div class="col">
					<h1 align="center"><img src="img/logo.png" width="50px" title="GameStore">Ritrova Password</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 offset-sm-3 col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3">
					<form action="email.php" method="post" enctype="application/x-www-form-urlencoded">
						<div class="form-floating ">
							<input type="email" name="Email" id="email" required="required" class="form-control" placeholder="Inserisci Email" style="border: 0; border-bottom:2px solid black ; background: rgba(0 ,0 , 0, 0%);">
							<label for="email">Email</label>
						</div>
						<p id="controll_email" style="font-size: 18px;" align="center"></p>
				</div>
				<div class="col-sm-3 p-2 col-xxl-3 col-xl-3" id="buttone">
					<input type="submit" name="trova" value="Commit" class="btn btn-primary" id="buttone" />
				</div>


				</form>

			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$("#box").fadeIn(2500);
		})

		$('#email').mouseleave(function() {
			var email = $('#email').val();
			if (email === "") {
				document.getElementById("controll_email").innerHTML = ("<div class='alert alert-primary mt-3'> <strong>Inserisci</strong> il tuo email!</div>");
			} else {
				$.post("./db/Verifica_email.php", {
					Email: email
				}, function(data) {
					if (data.trova === 1) {
						var email = document.querySelectorAll("input");
						email[0].style.border = "solid 2px #53E652";
						document.getElementById("controll_email").innerHTML = ("<div class='alert alert-success mt-3'> <strong>Email</strong> valido!</div>");
					} else {
						document.getElementById("controll_email").innerHTML = ("<div class='alert alert-danger mt-3'> <strong>Email</strong> non esiste!</div>");
						var email = document.querySelectorAll("input");
						email[0].style.border = "solid 2px #f00";
					}
				}, "json");
			}
		});
	</script>
</body>

</html>
