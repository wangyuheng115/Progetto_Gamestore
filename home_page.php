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


<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Un sito che fornisce tutte le video giochi più popolari!|FIFA23, GTA5....">
	<title>Game Store</title>
	<link rel="stylesheet" href="css_bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/stile_homepage.css" media="screen" type="text/css">
	<script src="js_bootstrap/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="icons-1.9.1/font/bootstrap-icons.css">
</head>

<body id="home">
	<div class="container-sm">
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
				<div class="Utente">
					<form action="home_page.php" method="post" class="d-flex position-absolute end-0 pt-5">
						<input type="button" name="Utente" id="Utente" value=""
							class="position-absolute top-50 end-0 translate-middle dropdown-toggle"
							data-bs-toggle="dropdown" aria-expanded="false">
						<ul class="dropdown-menu" aria-labelledby="Utente">
							<li><a class="dropdown-item" href="#"><?php echo($index["Lista_del_desiderio"]); ?></a></li>
							<li><a class="dropdown-item" href="#"><?php echo($index["Profilo_Personale"]); ?></a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><input class="dropdown-item" type="submit" value="<?php echo($index["logout"]); ?>"></li>
						</ul>
					</form>
				</div>
			</nav><br>
		</div>

		<div class="row mt-5">
			<div class="col-md-9">
				<div class="slid_game" id="slid_game">
					<div id="giochi_push" class="carousel slide w-100" data-bs-ride="carousel">
						<ol class="carousel-indicators">
							<li data-bs-target="#giochi_push" data-bs-slide-to="0" class="active"></li>
							<li data-bs-target="#giochi_push" data-bs-slide-to="1"></li>
							<li data-bs-target="#giochi_push" data-bs-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/FIFA23.jpg" alt="FIFA23" class="d-block w-100 img-fluid">
							</div>

							<div class="carousel-item">
								<img src="img/red.jpg" alt="Red Dead Redemption 2" class="d-block w-100 img-fluid">
							</div>

							<div class="carousel-item">
								<img src="img/GTA5.jpg" alt="GTA5" class="d-block w-100 img-fluid">
							</div>
						</div>
						<a href="#giochi_push" class="carousel-control-prev" role="button" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?php echo($index["Precedente"]); ?></span>
						</a>

						<a href="#giochi_push" class="carousel-control-next" role="button" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?php echo($index["Prossimo"]); ?></span>
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-3 text-center justify-content-center" id="paneltop5">


				<div class="row">
					<div class="col">
						<h5 class="pt-2"><span class="badge bg-primary"><?php echo($index["Top5"]); ?></span></h5>
						<hr>
					</div>
				</div>
				<div class="row text-center align-items-center" id="top_5">
					<div class="col-8">
						<a href="#"><img src="img/FIFA23.jpg" alt="FIFA23" class="w-100"></a>
					</div>
					<div class="col-4"><a href="#">
							<h5 class="text-wrap" id="top_name">FIFA23</h5>
						</a></div>
				</div>

				<div class="row text-center align-items-center pt-3" id="top_5">
					<div class="col-8">
						<a href="#"><img src="img/red.jpg" alt="Red Dead Redemption 2" class="w-100"></a>
					</div>
					<div class="col-4"><a href="#">
							<h5 class="" id="top_name">Red Dead Redemption 2</h5>
						</a></div>
				</div>

				<div class="row text-center align-items-center pt-3" id="top_5">
					<div class="col-8">
						<a href="#"><img src="img/GTA5.jpg" alt="GTA5" class="w-100"></a>
					</div>
					<div class="col-4"><a href="#">
							<h5 class="" id="top_name">Grand Theft Auto V</h5>
						</a></div>
				</div>

				<div class="row text-center align-items-center pt-3" id="top_5">
					<div class="col-8">
						<a href="#"><img src="img/GTA4.jpg" alt="GTA4" class="w-100"></a>
					</div>
					<div class="col-4"><a href="#">
							<h5 class="" id="top_name">Grand Theft Auto IV</h5>
						</a></div>
				</div>

				<div class="row text-center align-items-center pt-3" id="top_5">
					<div class="col-8">
						<a href="#"><img src="img/cyberpunk.jpg" alt="Cyperpunk2077" class="w-100"></a>
					</div>
					<div class="col-4"><a href="#">
							<h5 class="" id="top_name">Cyperpunk 2077</h5>
						</a></div>
				</div>
			</div>

		</div>

		<div class="row mt-5">
			<div class="col-sm-3">
				<a href="#" >
					<h5 id="title_sezione"><img src="img/hot.png" width="50px"><?php echo($index["Giochi_popolari"]); ?></h5>
				</a>
			</div>
		</div>

		<div class="row mt-3">
			<div class="col-sm-12">
				<div class="giochi_popolari d-flex justify-content-start" id="giochi_popolari">
					<div class="card align-items-center w-25 text-center"
						style="width: 18rem; background: none; border: 0;" id="giochi">
						<div class="mask w-75" id="mask">
						<img src="img/fallout3.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
						</div>
						<div class="card-body">
							<h5 class="card-title">Fallout 3: Game of the Year Edition</h5>
							<p class="card-text">6,59€</p>
							<a href="#" class="btn btn-primary"><?php echo($index["Scopri_di_piu"]); ?></a>
						</div>
					</div>

					<div class="card align-items-center w-25 text-center"
						style="width: 18rem; background: none; border: 0;" id="giochi">
						<div class="mask w-75" id="mask">
						<img src="img/fallout3.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
						</div>
						<div class="card-body">
							<h5 class="card-title">Fallout 3: Game of the Year Edition</h5>
							<p class="card-text">6,59€</p>
							<a href="#" class="btn btn-primary"><?php echo($index["Scopri_di_piu"]); ?></a>
						</div>
					</div>

					<div class="card align-items-center w-25 text-center"
						style="width: 18rem; background: none; border: 0;" id="giochi">
						<div class="mask w-75" id="mask">
						<img src="img/fallout3.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
						</div>
						<div class="card-body">
							<h5 class="card-title">Fallout 3: Game of the Year Edition</h5>
							<p class="card-text">6,59€</p>
							<a href="#" class="btn btn-primary"><?php echo($index["Scopri_di_piu"]); ?></a>
						</div>
					</div>

					<div class="card align-items-center w-25 text-center"
						style="width: 18rem; background: none; border: 0;" id="giochi">
						<div class="mask w-75" id="mask">
						<img src="img/fallout3.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
						</div>
						<div class="card-body">
							<h5 class="card-title">Fallout 3: Game of the Year Edition</h5>
							<p class="card-text">6,59€</p>
							<a href="#" class="btn btn-primary"><?php echo($index["Scopri_di_piu"]); ?></a>
						</div>
					</div>

					<div class="card align-items-center w-25 text-center"
						style="width: 18rem; background: none; border: 0;" id="giochi">
						<div class="mask w-75" id="mask">
						<img src="img/fallout3.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
						</div>
						<div class="card-body">
							<h5 class="card-title">Fallout 3: Game of the Year Edition</h5>
							<p class="card-text">6,59€</p>
							<a href="#" class="btn btn-primary"><?php echo($index["Scopri_di_piu"]); ?></a>
						</div>
					</div>

					<div class="card align-items-center w-25 text-center"
						style="width: 18rem; background: none; border: 0;" id="giochi">
						<div class="mask w-75" id="mask">
						<img src="img/fallout3.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
						</div>
						<div class="card-body">
							<h5 class="card-title">Fallout 3: Game of the Year Edition</h5>
							<p class="card-text">6,59€</p>
							<a href="#" class="btn btn-primary"><?php echo($index["Scopri_di_piu"]); ?></a>
						</div>
					</div>

					<div class="card align-items-center w-25 text-center"
						style="width: 18rem; background: none; border: 0;" id="giochi">
						<div class="mask w-75" id="mask">
						<img src="img/fallout3.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
						</div>
						<div class="card-body">
							<h5 class="card-title">Fallout 3: Game of the Year Edition</h5>
							<p class="card-text">6,59€</p>
							<a href="#" class="btn btn-primary"><?php echo($index["Scopri_di_piu"]); ?></a>
						</div>
					</div>

					
			</div>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-sm-3">
				<a href="#">
					<h5 id="title_sezione"><img src="img/gratis.png" width="50px"> <?php echo($index["Giochi_gratis"]); ?></h5>
				</a>
			</div>
		</div>

		<div class="row mt-3" id="giochi_gratis">
			<div class="col-sm-4">
				<div class="card w-100" style="width: 18rem; background: none; border: 0;" id="giochi">
						<div class="mask w-100" id="mask">
						<img src="img/roket_league.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
						</div>
						<div class="card-body">
							<h5 class="card-title">Rocket League</h5>
							<p class="card-text text-secondary"><?php echo($index["Rocket_league"]); ?></p>
							<a href="#" class="btn text-white"><?php echo($index["Scopri_di_piu"]); ?></a>
						</div>
					</div>
			</div>

			<div class="col-sm-4">
				<div class="card w-100" style="width: 18rem; background: none; border: 0;" id="giochi">
					<div class="mask w-100" id="mask">
					<img src="img/fall_guys.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
					</div>
					<div class="card-body">
						<h5 class="card-title">Fall Guys</h5>
						<p class="card-text text-secondary"><?php echo($index["Fall_Guys"]); ?></p>
						<a href="#" class="btn text-white"><?php echo($index["Scopri_di_piu"]); ?></a>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="card w-100" style="width: 18rem; background: none; border: 0;" id="giochi">
						<div class="mask w-100" id="mask">
						<img src="img/fortnite.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
						</div>
						<div class="card-body">
							<h5 class="card-title">Fortnite</h5>
							<p class="card-text text-secondary"><?php echo($index["Fortnite"]); ?></p>
							<a href="#" class="btn text-white"><?php echo($index["Scopri_di_piu"]); ?></a>
						</div>
					</div>
			</div>
		</div>
		<div class="card w-100 mb-3" style="width: 18rem; background: none; border: 0;" id="giochi">
		<div class="row mt-5 g-0">
			
			<div class="col-sm-6">
				<div class="mask w-100" id="mask">
					<img src="img/giochi.jpg" class="card-img-top w-100" alt="Fallout3" id="img_giochi_popolari">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card-body">
					<h5 class="card-title"><?php echo($index["Esplora_negozio"]); ?></h5>
					<p class="card-text text-secondary"><?php echo($index["Sfoglia"]); ?></p>
					<a href="#" class="btn btn-primary"><?php echo($index["Scopri_di_piu"]); ?></a>
				</div>
			</div>
			</div>
		</div>
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
				<div class="col-sm-3">
					<span class="text-secondary"><?php echo($index["Dettagli_del_contatto"]); ?></span>
					<div class="row mt-2 text-start">
						<p>Email:<a href="mailto:GameStore@gmail.com">GameStore@gmail.com</a></p>
						<p><?php echo($index["Telefono"]); ?>:123456789</p>
					</div>
				</div>

				<div class="col-sm-3">
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

					<h1 class="small text-end"><img src="img/logo.png" width="50px" title="GameStore"><?php echo($index["Gioco"]); ?><span
						style="color: red;"><?php echo($index["Store"]); ?></span></h1>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
