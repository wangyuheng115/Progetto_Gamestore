<?php
	 session_start();
	 $email=$_SESSION['email'];

    $lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];

    $lang=strtolower(substr($lang,0,2));

    if($lang=="it"){
        include("languages/it.php");
		echo '<script src="js/Conferma_pw_it.js"></script>';
    }
    elseif($lang=="fr"){
        include("languages/fr.php");
		echo '<script src="js/Conferma_pw_fr.js"></script>';
    }
    else if ($lang=="en"){
        include("languages/en.php");
		echo '<script src="js/Conferma_pw_en.js"></script>';
    }
    else if ($lang=="zh"){
        include("languages/zh.php");
		echo '<script src="js/Conferma_pw_zh.js"></script>';
    }

?>
<html>

<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $rpw['title']?></title>
	<link rel="stylesheet" href="css/stile_login.css" media="screen">
	<script src="js/login_view_pw.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
	
</head>

<body>
	<div class="cotainer p-5 my-5 text-white">
	<div class="box" id="box">
		<div class="row">
			<div class="col">
				<h1 align="center"><img src="img/logo.png" width="50px" title="GameStore"><?php echo $rpw['title']?></h1>
			</div>
		</div>
	
		<form action="Verifica_cambia.php" method="post" enctype="application/x-www-form-urlencoded">
			
			<div class="row">
				<div class="col-sm-6 offset-sm-3 col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3">
					<div class="form-floating">
						<input type="password" id="password" name="Password" required="required" class="form-control" placeholder="Inserisci nuova password" style="border: 0; border-bottom:2px solid black ; background: rgba(0 ,0 , 0, 0%);">
						<label for="password"><?php echo $login['pw'];?></label>
						<div class="img_rp" style="width: 30px; height: 30px; float: right; position: relative; bottom: 30px;"><img src="img/no_pw.png" id="view_pw" width="25px" onclick="VisualizzaPassword()"></div>
					</div>
					<span id="controll_password" style="font-size: 18px;"></span>
				</div>	
			</div>

			<div class="row">
				<div class="col-sm-6 offset-sm-3 col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3">
					<div class="form-floating">
						<input type="password" id="conf_pw" onkeyup="ConfermaPassword()" name="conf_pw" required="required" class="form-control" placeholder="Conferma password" style="border: 0; border-bottom:2px solid black ; background: rgba(0 ,0 , 0, 0%);">
						<label for="conf_pw"><?php echo $rpw['conf_pw']?></label>
					</div>
					<p id="conferma_password" style="font-size: 18px;" align="center"></p>
				</div>
			</div>
		
				<div class="row">
					<div class="col-sm-4 offset-sm-4 col-xxl-4 offset-xxl-4 col-xl-4 offset-xl-4 col-md-4 offset-md-4 col-lg-4 offset-lg-4">
						<div class="buttone" align="center"><input type="submit" name="cambia" value="<?php echo $rpw['value']?>" class="btn btn-primary btn-lg"></div>
					</div>
				</div>
			</form>
			</div>
		</div>
		<script>
			$(document).ready(function (){
			$('#password').one("focus",function(){
				document.getElementById("controll_password").innerHTML=("<div class='alert alert-danger'><?php echo $rpw['reg_pw'];?></div>");
						var pw = document.querySelectorAll("input");
						pw[0].style.border = "solid 2px #f00";
					});
    			});

			$(document).ready(function (){
			$('#password').blur(function(){
				var password = document.getElementById('password').value;
    			var reg_pw=/(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[^a-zA-Z0-9]).{8,30}/;

   				 if(reg_pw.test(password) == true){
					document.getElementById("controll_password").innerHTML=("<div class='alert alert-success'><?php echo $rpw['validepw'];?></div>");
       				var pw = document.querySelectorAll("input");
					pw[0].style.border = "solid 2px #53E652";
    				}
					else{
						document.getElementById("controll_password").innerHTML=("<div class='alert alert-danger'><?php echo $rpw['reg_pw'];?></div>");
						var pw = document.querySelectorAll("input");
						pw[0].style.border = "solid 2px #f00";
					}
    		
			});
		})
	</script>
</body>

</html>
