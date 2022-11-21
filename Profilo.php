<?php
include("db/database_manager.class.php");
session_start();
$client = new DatabaseManager();

if(!isset($_SESSION["email"])){
	header("location: Vieta_Visita.php");
}
else{
	$email = $_SESSION['email'];
	$rls = $client->leggi('utenti', "Email='$email'", "Nickname", "1");
    $name=$rls[0]["Nickname"];
    $hobby=$rls[0]["Hobby"];
    $country=$rls[0]["Country"];
    $nascita=$rls[0]["Nascita"];
    $introduzione=$rls[0]["Introduzione"];
}

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Un sito che fornisce tutte le video giochi più popolari!|FIFA23, GTA5....">
	<title>Game Store</title>
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
				
				<div id="salute" class="user_name d-flex justify-content-end align-self-center pe-5" style="display: block !important; max-width: 300px; overflow: hidden !important; text-overflow : ellipsis !important;">
				
				</div>
				<div class="Utente">
					<form action="db/Verifica_logout.php" method="post" class="d-flex position-absolute end-0 pt-5">
						<input type="button" name="Utente" id="Utente" value="" class="position-absolute top-50 end-0 translate-middle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<ul class="dropdown-menu" aria-labelledby="Utente">
							<li><a class="dropdown-item" href="carrello_page.php"><?php echo($index["Lista_del_desiderio"]); ?></a></li>
							<li><a class="dropdown-item" href="#"><?php echo($index["Profilo_Personale"]); ?></a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><input name="logout" class="dropdown-item" type="submit" value="<?php echo($index["logout"]); ?>"></li>
						</ul>
					</form>
				</div>
			</nav><br>
		</div>

        <div class="row mt-5" style="background: #202020;">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <i class="bi bi-person-circle" style="font-size: 100px;"></i>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <div class="dati" style="font-size: 40px;">
                            <strong><?php echo $name;?></strong><br>
                            <span class="text-secondary"><?php echo $introduzione;?></span>
                        </div>
                    </div>
                
                    <div class="col-md-2 position-relative d-flex align-items-center">
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mod_profilo"><i class="bi bi-pencil-square"></i>Modifica Profilo</button>
                    </div>

					<div class="modal fade text-black modal-xl" id="mod_profilo" tabindex="-1" aria-labelledby="Modal" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="Modal"><i class="bi bi-pencil-square" style="color: black;"></i>Modifica Profilo</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="db/use_db.php" method="post">
									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">
												<label for="Email" class="form-label">Email</label>
												<input name="Email" value="<?php echo $email;?>" type="email" class="form-control" id="Email" readonly>
											</div>

											<div class="col-md-12">
												<label for="Nickname" class="form-label">Nickname</label>
												<input name="Nickname" value="<?php echo $name;?>" type="text" class="form-control" id="Nickname" minlength="4" maxlength="20">
											</div>

											<div class="col-12">
												<label for="Introduzione" class="form-label">Introduzione</label>
												<input name="Introduzione" type="text" class="form-control" id="Introduzione" placeholder="Ciao tutti..." maxlength="50" value="<?php echo $introduzione;?>">
											</div>

											<div class="col-md-6">
												<label for="Country" class="form-label">Country</label>
												<input value="<?php echo $country;?>" name="Country" type="text" class="form-control" id="Country" placeholder="Italia/Cina/America..." maxlength="50">
											</div>

											<div class="col-md-6">
												<label for="nascita" class="form-label">Data di nascita</label>
												<input value="<?php echo $nascita;?>" name="Nascita" type="date" class="form-control" id="nascita" placeholder="01/01/2022">
											</div>

											<div class="col-md-12">
												<label for="hobby" class="form-label">Hobby</label>
												<input value="<?php echo $hobby;?>" name="Hobby" type="text" class="form-control" id="hobby" placeholder="Giochi sportivi..." maxlength="50">
											</div>
										</div>
									</div>

									<div class="modal-footer text-center">
										<input type="reset" class="btn btn-danger" value="Reset">
										<input type="submit" class="btn btn-primary" value="Salva" name="salva">
									</div>
								</form>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-md-8 mb-3" style="background: #202020;">

                <div class="row">
                    <div class="col text-center">
                        <span>MIA LIBRERIA</span>
                    </div>
                </div>

                <div class="row p-3 mb-3" style="background: #202020;">
                    <div class="col-sm-3">
                        <div class="mask w-100" id="mask">
                            <img src="img/dl2.jpg" class="w-100" id="img_giochi_popolari">
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="row mt-3">
                            <div class="col-sm-12 d-flex justify-content-between">
                                <span class="badge bg-secondary"><?php echo $index['tipo']; ?></span>
                                <span class="price">59.99€</span>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <span>Dying Light 2 Stay Human</span>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <?php echo $dettagligioco['autorimborsabile']; ?><a href="#" data-bs-toggle="tooltip" data-bs-html="true" class="inf_rimborso" title="<span class='text-secondary small text-wrap'><?php echo $dettagligioco['refund']; ?></span>"><i class="bi bi-patch-question"></i></a>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-sm-12 d-flex justify-content-between">
                                <div class="piattform align-self-center">
                                    <i class="bi bi-windows"></i>
                                </div>

                                <div class="oper">
                                    <button type="button" class="btn btn-outline-danger btn-sm" id="btn"><?php echo $index['Rimuovi']; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="col-md-4">
                <div class="row gx-1">
                    <div class="col-5  text-center" style="background: #202020;">
                        <span class="ticket"><i class="bi bi-joystick"></i>Giochi</span><br>
                        <span>1</span>
                    </div>
                    <div class="col-5 offset-2 text-center" style="background: #202020;">
                        <span class="ticket"><i class="bi bi-star-fill"></i>Seguito</span><br>
                        <span>1</span>
                    </div>
                </div>

                <div class="row gx-1 mt-3">
                    <div class="col-5  text-center" style="background: #202020;">
                        <span class="ticket"><i class="bi bi-chat-square-text"></i>Valutazioni</span><br>
                        <span>1</span>
                    </div>
                    <div class="col-5 offset-2 text-center" style="background: #202020;">
                        <span class="ticket"><i class="bi bi-cart-fill"></i>Lista</span><br>
                        <span>1</span>
                    </div>
                </div>
            </div>
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

	<script>
		var inf = document.getElementsByClassName('inf_rimborso');

		for (var i = 0; i < inf.length; i++) {
		var tooltip = inf[i];
		var tooltip = new bootstrap.Tooltip(inf[i],{
		boundary: 'window',
		animation: true
		 });
	}   
	</script>
</body>
</html>
