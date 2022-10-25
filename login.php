<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Game_store_Loginpage</title>
	<link rel="stylesheet" href="css/stile_login.css" media="screen">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">     
	<script src="js/login_view_pw.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
	<div class="container p-5 my-5 text-white" id="container">
    <div class="box" id="box">
        <div class="row">
            <div class="col-12"><h1 align="center"><img src="img/logo.png" width="50px" title="GameStore">Game<span style="color: red;">Store</span></h1></div>
        </div>
        <div class="row">
            <div class="col-12">   	
                    <form action="db/use_db.php" method="post" enctype="application/x-www-form-urlencoded">
                        <div class="row">
                            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                                <div class="email" align="center">
                                    <div class="form-floating ">
                                        <input type="email" name="Email" id="email" required="required" class="form-control form-control-sm" placeholder="Inserisci Email" style="border: 0; border-bottom:2px solid black ; background: rgba(0 ,0 , 0, 0%);">
                                        <label for="email">Email</label>
                                    </div>
                                    <span id="controll_email" style="font-size: 18px;"></span>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">  
                                <div class="pw" align="center">
                                    <div class="form-floating ">
                                        <input type="password" name="Password" id="password" required="required" class="form-control form-control-sm" placeholder="Inserisci Password" style="border: 0; border-bottom:2px solid black ; background: rgba(0 ,0 , 0, 0%);">
                                        <label for="password">Password</label>
                                        <div class="img"><img src="img/no_pw.png" id="view_pw" width="25px" onclick="VisualizzaPassword()"></div>
                                    </div>
                                    <span id="controll_password" style="font-size: 18px;"></span>
                                </div>
                            </div>                              
                        </div>    
                        
                                    <?php
                                    if(isset($_GET['msg'])){
                                            echo"<p style='color: red;' align='center'>Hai sbagliato Email o Password.</p>";
                                        }
                                    ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="Ritrova" align="center">
                                    <a href="Ritrova_pw.php" style="font-size: 15px; color: blue;">Ho dimenticato password</a><br>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="buttone" align="center">
                                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg" align="center">
                                    <input type="submit" onclick="window.location.href='registra.php'" value="Registra"class="btn btn-primary btn-lg">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
	</div>
    </div>
	<script>
		$(document).ready(function (){
    		$("#box").fadeIn(2500);
		})


		$('#email').blur(function(){
			 var email = $('#email').val();
			
			 $.post("./db/Verifica_email.php",{Email: email},function(data){
				if(data.trova === 0){
					var email = document.querySelectorAll("input");
					email[0].style.border = "solid 2px #f00";
					document.getElementById("controll_email").innerHTML = "<font color=#f00>Email non esiste!";
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
					document.getElementById("controll_password").innerHTML = "<font color=#f00>Password errato!";
				}
				else{
					document.getElementById("controll_password").innerHTML = "";
				}
			 },"json");
		});	
	</script>
</body>
</html>
