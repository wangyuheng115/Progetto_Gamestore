<?php
 session_start();
 $email=$_SESSION['email'];

    $lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];

    $lang=strtolower(substr($lang,0,2));

    if($lang=="it"){
        include("languages/it.php");
    }
    elseif($lang=="fr"){
        include("languages/fr.php");
    }
    else if ($lang=="en"){
        include("languages/en.php");
    }
    else if ($lang=="zh"){
        include("languages/zh.php");
    }

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
	<div class="cotainer p-5 my-5 text-white">
	<div class="box" id="box">	
		<div class="row">
			<div class="col">
				<h1 align="center"><img src="img/logo.png" width="50px" title="GameStore"><?php echo $rpw['title']?></h1>
			</div>
		</div>
	
		<form action="code.php" method="post" enctype="application/x-www-form-urlencoded">

			<div class="row">
				<div class="col-sm-4 offset-sm-4 col-xxl-4 offset-xxl-4 col-xl-4 offset-xl-4">
					<div class="form-floating pb-3">
						<input type="text" name="Code" id="code" required="required" maxlength="4" class="form-control" placeholder="Inserisci codice" style="border: 0; border-bottom:2px solid black ; background: rgba(0 ,0 , 0, 0%);">
						<label for="Code"><?php echo $rpw['code']?></label>
					</div>	
				</div>
				<div class="col-sm-3 p-2 col-xxl-3 col-xl-3" id="buttone">
					<input type="submit" name="conferma" value="<?php echo $rpw['value']?>" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
	</div>
	<script>
		$(document).ready(function (){
    		$(".box").fadeIn(2500);
		})


        setTimeout("Scade()",10000);
        function Scade(){
		/*alert("Code scaduto!"); */
		location='Code_scade.php';
        }
		
	</script>
</body>
</html>
