<?php
header("Content-Type:text/html;charset=utf-8");
?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GameStore Registrazione</title>
<link rel="stylesheet" href="css/stile_registra.css" media="screen">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">  
	<script src="js/Controlla_campo.js"></script>
	<script src="js/login_view_pw.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<div class="container p-5 my-5 text-white">	
	<div class="box" id="box">
			<div class="row">
				<div class="col-12">
					<h1 align="center"><img src="img/logo.png" width="50px" title="GameStore">Registrazione</h1>
				</div>
			</div>
			<form action="db/use_db.php" method="post" enctype="application/x-www-form-urlencoded">
				
				<!-- <div class="datiuser"> -->
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
							<div class="d-flex justify-content-center">
										<div class="p-2 bg-primary">Email</div>
										<input type="email" class="" name="Email" id="email" required="required">
							</div>

							<div class="d-flex justify-content-center">
								<span id="controll_email" style="font-size: 18px;"></span>
							</div>
						</div>
					</div>
				
			
				<div class="row">
					<div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
						<div class="d-flex justify-content-center mt-3">
						<div class="p-2 bg-primary">Password</div>
						<input type="password" id="password" name="Password"  required="required">
						<div class="img"><img src="img/no_pw.png" id="view_pw" width="25px" onclick="VisualizzaPassword()"></div>
						</div>

						<div class="d-flex justify-content-center mt-1">
						<span id="controll_password" style="font-size: 18px;"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
						<div class="d-flex justify-content-center mt-3">
						<div class="p-2 bg-primary">Conferma Password</div>
						<input type="password" id="conf_pw" onkeyup="ConfermaPassword()" name="conf_pw" required="required"><br>
						</div>

						<div class="d-flex justify-content-center">
						<span id="conferma_password" style="font-size: 18px;"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
						<div class="d-flex justify-content-center mt-3">
						<div class="p-2 bg-primary">Età</div>
						<input type="text" id="eta" name="Eta" onkeyup="VerificaEta()" required="required"><br>
						</div>

						<div class="d-flex justify-content-center">
						<span id="controll_eta" style="font-size: 18px;"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
						<div class="d-flex justify-content-center mt-3">
						<div class="p-2 bg-primary">Hobby</div>
						<input type="text" id="hobby" name="Hobby" onkeyup="VerificaHobby()" required="required"><br>
						</div>

						<div class="d-flex justify-content-center">
						<span id="controll_hobby" style="font-size: 18px;"></span>
						</div>
					</div>	
				</div>

				<div class="row">
					<div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
						<div class="d-flex justify-content-center mt-3">
						<div class="p-2 bg-primary">Nazione</div>
						<input type="text" id="nazione" name="Country" onkeyup="VerificaNazione()" required="required"><br>
						</div>

						<div class="d-flex justify-content-center">
						<span id="controll_nazione" style="font-size: 18px;"></span>
						</div>
					</div>
				</div>	
				<?php
				if(isset($_GET['msg'])){
						echo"<p style='color: red;' align='center'>Email già registrato.</p>";
					}
				?>
				<div class="row">
					<div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
						<div class="d-flex justify-content-center mt-3">
						<input type="submit" onclick=""	name="registra" value="Conferma" class="btn btn-primary btn-lg">
						<div class="p-2"></div>
						<input type="button" onclick="window.location.href='login.php'" value="Ritorno login" class="btn btn-primary btn-lg">
						</div>
					</div>
				</div>
				</div>	
				</div>
				</form>
		</div>
	</div>
		<script>
			$(document).ready(function (){
			$('#password').one("focus",function(){
				document.getElementById("controll_password").innerHTML=("<div class='alert alert-danger'> <strong>Password</strong> deve avere seguente caratere: <br> <span id='controll_password_1' style='font-size: 18px;'>-Una lettera maiuscola e minuscola</span><br> <span id='controll_password_2' style=font-size: '18px;'>-Un numero</span><br> <span id='controll_password_3' style=font-size: '18px;'>-Un simbolo speciale come @.+-_</span><br> <span id='controll_password_4' style='font-size: 18px;'>-Lunghezza tra 8-30</span> </div>");
						var pw = document.querySelectorAll("input");
						pw[1].style.border = "solid 2px #f00";
					});
    			});

		$(document).ready(function (){
			$('#password').blur(function(){
				var password = document.getElementById('password').value;
    			var reg_pw=/(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[^a-zA-Z0-9]).{8,30}/;

   				 if(reg_pw.test(password) == true){
					document.getElementById("controll_password").innerHTML=("<div class='alert alert-success'> <strong>Password</strong> valido!</div>");
       				var pw = document.querySelectorAll("input");
					pw[1].style.border = "solid 2px #53E652";
    				}
					else{
						document.getElementById("controll_password").innerHTML=("<div class='alert alert-danger'> <strong>Password</strong> deve avere seguente caratere: <br> <span id='controll_password_1' style='font-size: 18px;'>-Una lettera maiuscola e minuscola</span><br> <span id='controll_password_2' style=font-size: '18px;'>-Un numero</span><br> <span id='controll_password_3' style=font-size: '18px;'>-Un simbolo speciale come @.+-_</span><br> <span id='controll_password_4' style='font-size: 18px;'>-Lunghezza tra 8-30</span> </div>");
						var pw = document.querySelectorAll("input");
						pw[1].style.border = "solid 2px #f00";
					}
    		
		});
		})

		$('#email').blur(function(){
			 var email = $('#email').val();
			
			 $.post("./db/Verifica_email.php",{Email: email},function(data){
				if(data.trova === 1){
					var email = document.querySelectorAll("input");
					email[0].style.border = "solid 2px #f00";
					document.getElementById("controll_email").innerHTML = "<font color=#f00>Email già registrato!";
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
						document.getElementById("controll_email").innerHTML = "<font color=#f00>Email non valido!";
					}
				}

			 },"json");
		});	
	</script>
</body>

</html>
