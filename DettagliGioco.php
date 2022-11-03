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
<html lang="it">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dying Light 2 Stay Human Acquistalo e Scaricalo subito">
	<title><?php echo $dettagligioco['titolo']?></title>
	
	
	<link rel="stylesheet" href="css_bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/stile_homepage.css" media="screen" type="text/css">
    <link rel="stylesheet" href="kartik-v-bootstrap-star-rating-46c21f5/css/star-rating.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="kartik-v-bootstrap-star-rating-46c21f5/themes/krajee-svg/theme.css" media="all" type="text/css"/>
	<link rel="stylesheet" href="icons-1.9.1/font/bootstrap-icons.css">

	
    <script src="jquery-3.6.1.min.js"></script>
    <script src="kartik-v-bootstrap-star-rating-46c21f5/js/star-rating.js"></script>
    <script src="kartik-v-bootstrap-star-rating-46c21f5/themes/krajee-svg/theme.js"></script>
    <script src="kartik-v-bootstrap-star-rating-46c21f5/js/locales/LANG.js"></script>
	<script src="js_bootstrap/bootstrap.bundle.min.js"></script>
		<style>
		.checked {
		  color: orange;
		}
		#more {display: none;}

		</style>
		<script>
			new Raty(document.getElementById("star"));

			var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
			var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
			return new bootstrap.Tooltip(tooltipTriggerEl)
			})
		</script>
</head>

<body>
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
			<div class="col-sm-6 text-start">
				<h1 style="font-size: 2rem;">Dying Light 2 Stay Human</h1>
				<input id="valutazione" name="input-3" value="4.6" class="rating-loading" data-size="xs">
			</div>
		</div>

		<div class="row mt-3">
			<div class="col-7">
				<iframe class="w-100 h-100" src="https://www.youtube.com/embed/2MD4gTitmzw"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
			</div>
			<div class="col-5">
				<div class="row">
					<div class="col text-center">
						<img src="img/copertina1.jpg" alt="gioco" class="w-75">
					</div>
				</div>
			
					<div class="row">
						<div class="col-10 offset-1 text-center">
							<div class="row">
								<div class="col text-start">
									<label for="Acquista">59,99€</label>
								</div>
							</div>
							<button class="btn btn-primary w-100" name="Acquista"><?php echo $dettagligioco['acquista']; ?></button>
						</div>
					</div>

					<div class="row mt-2">
						<div class="col-10 offset-1 text-center">
							<button class="btn btn-outline-secondary w-100" name="add_list"><i class="bi bi-bookmark-plus"></i><?php echo $dettagligioco['aggiungilista']; ?></button>
						</div>
					</div>

					<div class="row mt-2">
						<div class="col-10 offset-1">	
							<ul class="list-group text-start" >
								<li class="list-group-item text-secondary border-0 small" style="background: rgba(0,0,0,0); border-bottom:solid 1px gray !important;">
									<div class="d-flex justify-content-between">
										<div class="text-secondary"><?php echo $dettagligioco['tiporimborso']; ?></div>
										<div class="text-white"><?php echo $dettagligioco['autorimborsabile']; ?> <a href="#" data-bs-toggle="tooltip" data-bs-html="true" id="inf_rimborso" title="<span class='text-secondary small text-wrap'> <?php echo $dettagligioco['refund'];?></span>"><i class="bi bi-patch-question" ></i></a></div>
								    </div>
								</li>
								<li class="list-group-item text-secondary border-0 small" style="background: rgba(0,0,0,0); border-bottom:solid 1px gray !important;">
									<div class="d-flex justify-content-between">
										<div class="text-secondary"><?php echo $dettagligioco['sviluppatore']; ?></div>
										<div class="text-white">Techland</div>
								    </div>
								</li>
								<li class="list-group-item text-secondary border-0 small" style="background: rgba(0,0,0,0); border-bottom:solid 1px gray !important;">
									<div class="d-flex justify-content-between">
										<div class="text-secondary"><?php echo $dettagligioco['editore']; ?></div>
										<div class="text-white">Techland</div>
								    </div>
								</li>
								<li class="list-group-item text-secondary border-0 small" style="background: rgba(0,0,0,0); border-bottom:solid 1px gray !important;">
									<div class="d-flex justify-content-between">
										<div class="text-secondary"><?php echo $dettagligioco['datauscita']; ?></div>
										<div class="text-white">04/02/22</div>
								    </div>
								</li>

								<li class="list-group-item text-secondary border-0 small" style="background: rgba(0,0,0,0); border-bottom:solid 1px gray !important;">
									<div class="d-flex justify-content-between">
										<div class="text-secondary"><?php echo $dettagligioco['piattaforma']; ?></div>
										<div class="text-white"><i class="bi bi-windows"></i></div>
								    </div>
								</li>
								
							</ul>
						</div>
					</div>
			
			</div>
		</div>


		<div class="row mt-5" style="padding-bottom: 50px;">
			<div class="col" style="border-left:2px solid grey">
				<h5><?php echo $dettagligioco['genere']; ?></h5>
				<a href><?php echo $dettagligioco['azione']; ?></a>,
				<a href>Horror</a>,
				<a href>GDR</a>,
				<a href><?php echo $dettagligioco['primapersona']; ?></a>,
				<a href><?php echo $dettagligioco['mondoaperto']; ?></a>,
				<a href><?php echo $dettagligioco['sopravvivenza']; ?></a>
			</div>
			<div class="col" style="border-left:2px solid grey">
				<h5><?php echo $dettagligioco['caratteristiche'];?></h5>
				<a href><?php echo $dettagligioco['salvataggi'];?></a>,
				<a href><?php echo $dettagligioco['traguardi'];?></a>,
				<a href><?php echo $dettagligioco['controller'];?></a>,
				<a href><?php echo $dettagligioco['single'];?></a>,
				<a href><?php echo $dettagligioco['cooperativo'];?></a>,
				<a href><?php echo $dettagligioco['multi'];?></a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p style="color:gray"><?php echo $dettagligioco['reducedtext']; ?> <span id="dots">...</span><span id="more">
					<?php echo $dettagligioco['expandedtext']; ?>

					</span></p>
				<div class="d-grid gap-2 col-6 mx-auto">
					<button class="btn btn-outline-dark" onclick="myFunction()" id="myBtn"><?php echo $dettagligioco['expandbutt'];?></button>
				</div>
			</div>
		</div>
	
	</div>


</body>



<script>
	$(document).ready(function(){
    $('#valutazione').rating({displayOnly: true, step: 0.1});
	});
	
	var inf = document.getElementById('inf_rimborso');
	var tooltip = new bootstrap.Tooltip(inf, {
	boundary: 'window',
	animation:true
	})

	function myFunction() {
		var dots = document.getElementById("dots");
		var moreText = document.getElementById("more");
		var btnText = document.getElementById("myBtn");

		if (dots.style.display === "none") {
			dots.style.display = "inline";
			btnText.innerHTML = "<?php echo $dettagligioco['expandbutt'];?>";
			moreText.style.display = "none";
		} else {
			dots.style.display = "none";
			btnText.innerHTML = "<?php echo $dettagligioco['less'];?> ";
			moreText.style.display = "inline";
		}
	}

</script>

</html>
