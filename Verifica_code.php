<?php


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
		<form action="code.php" method="post" enctype="application/x-www-form-urlencoded">
			<div class="datiuser">
				<div class="email">
				Code<input type="text" name="Code" id="code" required="required" maxlength="4">
                <input type="submit" name="conferma" value="conferma" style="border:solid 2px black; background-color: white; cursor: pointer;"><br>
				</div>
		</form>
	</div>

	<script>
		$(document).ready(function (){
    		$(".box").fadeIn(2500);
		})


        setTimeout("Scade()",1000*60*5);
        function Scade(){
            alert("Code scaduto!");
            location("Codescade.php");
        }
		
	</script>
</body>
</html>
