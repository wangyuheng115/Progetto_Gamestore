<?php
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

$lang = strtolower(substr($lang, 0, 2));

if ($lang == "it") {
    include("languages/it.php");
} elseif ($lang == "fr") {
    include("languages/fr.php");
} else if ($lang == "en") {
    include("languages/en.php");
} else if ($lang == "zh") {
    include("languages/zh.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vieta Visita</title>
    <link rel="stylesheet" href="css_bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/stile_homepage.css" media="screen" type="text/css">
	<script src="js_bootstrap/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="icons-1.9.1/font/bootstrap-icons.css">
</head>
<body>
<div id="wrap">
        <div class="container">
        <div class="row">
			<nav class="nav navbar-expand-lg bg-dark navbar-dark fixed-top">
				<a class="navbar-brand" href="home_page.php">
				<h1 alingn="center" class="small"><img src="img/logo.png" width="50px" title="GameStore">Game<span
							style="color: red;">Store</span></h1>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" href="#" id="select_nav" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								<?php echo($index["Genere"]); ?>
							</a>
							<ul class="dropdown-menu" aria-labelledby="select_nav">
								<li><a href="#" class="dropdown-item"><?php echo($index["Azione"]); ?></a></li>
								<li><button type="button" href="#"
										class="dropdown-item dropdown dropend dropdown-toggle"><?php echo($index["Avventure"]); ?></button></li>
								<li><a href="#" class="dropdown-item"><?php echo($index["Gare"]); ?></a></li>
								<li><a href="#" class="dropdown-item"><?php echo($index["Sportivo"]); ?></a></li>
								<li><a href="#" class="dropdown-item"><?php echo($index["Musica"]); ?></a></li>
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#" id="select_nav"><?php echo($index["Offerta"]); ?></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#" id="select_nav"><?php echo($index["Notizie"]); ?></a>
						</li>
						<li class="nav-item">
							<form action="" class="d-flex">
								<input type="search" class="form-control me-2" placeholder="<?php echo($index["Ricerca"]); ?>"
									aria-label="Ricerca">
								<button class="btn btn-primary text-nowrap" type="submit"><?php echo($index["Cerca"]); ?></button>
							</form>
						</li>
					</ul>
				</div>
			</nav><br>
		</div>

        <div class="row mt-5 p-5">
        <h5><i class="bi bi-emoji-dizzy" style="font-size: 200px;"></i>Per favore loggare prima per visitare questa pagina! <a href="login.php" class="text-primary"> <u>Vai a Login</u> </a></h5> 
        </div>

        </div>
        
        <div id="push"></div>
    </div>
    
    <div class="footer mt-5">
		<div class="container">
			<div class="row pt-3 mt-5 g-0">
			    <div class="icons">
				<a href="#"><i class="bi bi-facebook" style="font-size: 1.3rem;"></i></a>
				
				
				<a href="#"><i class="bi bi-youtube" style="font-size: 1.3rem;"></i></a>
			
		
					<a href="#"><i class="bi bi-twitter" style="font-size: 1.3rem;"></i></a>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-xl-3">
					<span class="text-secondary"><?php echo($index["Dettagli_del_contatto"]); ?></span>
					<div class="row mt-2 text-start">
						<p>Email:<a href="mailto:GameStore@gmail.com">GameStore@gmail.com</a></p>
						<p><?php echo($index["Telefono"]); ?>:123456789</p>
					</div>
				</div>

				<div class="col-xl-3">
					<span class="text-secondary"><?php echo($index["Di_gamestore"]); ?></span>
					<div class="row mt-2">
						<a href="#"><?php echo($index["Chi_siamo"]); ?></a>
					</div>
				</div>
			</div>
			<hr>
			<div class="row text-center">
				<div class="col">
					<span class="text-secondary" style="font-size: 0.9rem;"><?php echo($index["Copyright"]); ?>   </span>

					<h1 class="small text-end"><img src="img/logo.png" width="50px" title="GameStore">Game<span
						style="color: red;">Store</span></h1>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
