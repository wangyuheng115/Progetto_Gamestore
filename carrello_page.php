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
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $index['title_page_carrello'] ?></title>

    <link href="css_bootstrap/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/stile_homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="icons-1.9.1/font/bootstrap-icons.css">

    <script src="js_bootstrap/bootstrap.bundle.min.js"></script>
</head>

<body ng-app="myapp" ng-controller="pricectrl">
<div id="wrap">
    <div class="container">
        <div class="row">
            <nav class="nav navbar-expand-lg bg-dark navbar-dark fixed-top">
                <a class="navbar-brand" href="home_page.php">
                    <h1 alingn="center" class="small"><img src="img/logo.png" width="50px" title="GameStore">Game<span style="color: red;">Store</span></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="select_nav" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo ($index["Genere"]); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="select_nav">
                                <li><a href="#" class="dropdown-item"><?php echo ($index["Azione"]); ?></a></li>
                                <li><button type="button" href="#" class="dropdown-item dropdown dropend dropdown-toggle"><?php echo ($index["Avventure"]); ?></button></li>
                                <li><a href="#" class="dropdown-item"><?php echo ($index["Gare"]); ?></a></li>
                                <li><a href="#" class="dropdown-item"><?php echo ($index["Sportivo"]); ?></a></li>
                                <li><a href="#" class="dropdown-item"><?php echo ($index["Musica"]); ?></a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" id="select_nav"><?php echo ($index["Offerta"]); ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" id="select_nav"><?php echo ($index["Notizie"]); ?></a>
                        </li>
                        <li class="nav-item">
                            <form action="" class="d-flex">
                                <input type="search" class="form-control me-2" placeholder="<?php echo ($index["Ricerca"]); ?>" aria-label="Ricerca">
                                <button class="btn btn-primary text-nowrap" type="submit"><?php echo ($index["Cerca"]); ?></button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="Utente">
                    <form action="home_page.php" method="post" class="d-flex position-absolute end-0 pt-5">
                        <input type="button" name="Utente" id="Utente" value="" class="position-absolute top-50 end-0 translate-middle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu" aria-labelledby="Utente">
                            <li><a class="dropdown-item" href="#"><?php echo ($index["Lista_del_desiderio"]); ?></a></li>
                            <li><a class="dropdown-item" href="#"><?php echo ($index["Profilo_Personale"]); ?></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><input class="dropdown-item" type="submit" value="<?php echo ($index["logout"]); ?>"></li>
                        </ul>
                    </form>
                </div>
            </nav><br>
        </div>

        <div class="row mt-5">
            <div class="col-sm-4">
                <span id="title"><?php echo $index['title_carrello']; ?></span>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-8">

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
                                    <i class="bi bi-windows "></i>
                                </div>

                                <div class="oper">
                                    <a href="#" class="btn btn-outline-success active btn-sm" role="button" data-bs-toggle="button" aria-pressed="true" ng-click="statselect()"><span class="stat_select"><?php echo $index['stat_select']; ?></span></a>
                                    <button type="button" class="btn btn-outline-danger btn-sm" id="btn"><?php echo $index['Rimuovi']; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row p-3 mb-3" style="background: #202020;">
                    <div class="col-sm-3">
                        <div class="mask w-100" id="mask">
                            <img src="img/fallout3.jpg" class="w-100" id="img_giochi_popolari">
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="row mt-3">
                            <div class="col-sm-12 d-flex justify-content-between">
                                <span class="badge bg-secondary"><?php echo $index['tipo']; ?></span>
                                <span class="price">19.99€</span>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <span>Fallout 3: Game of the Year Edition</span>
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
                                    <i class="bi bi-windows "></i>
                                </div>

                                <div class="oper">
                                    <a href="#" class="btn btn-outline-success active btn-sm" role="button" data-bs-toggle="button" aria-pressed="true" ng-click="statselect()"><span class="stat_select"><?php echo $index['stat_select']; ?></span></a>
                                    <button type="button" class="btn btn-outline-danger btn-sm" id="btn"><?php echo $index['Rimuovi']; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row p-3 mb-3" style="background: #202020;">
                    <div class="col-sm-3">
                        <div class="mask w-100" id="mask">
                            <img src="img/naraka.jpg" class="w-100" id="img_giochi_popolari">
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="row mt-3">
                            <div class="col-sm-12 d-flex justify-content-between">
                                <span class="badge bg-secondary"><?php echo $index['tipo']; ?></span>
                                <span class="price">19.99€</span>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <span>NARAKA: BLADEPOINT</span>
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
                                    <i class="bi bi-windows "></i>
                                </div>

                                <div class="oper">
                                    <a href="#" class="btn btn-outline-success active btn-sm" role="button" data-bs-toggle="button" aria-pressed="true" ng-click="statselect()"><span class="stat_select"><?php echo $index['stat_select']; ?></span></a>
                                    <button type="button" class="btn btn-outline-danger btn-sm" id="btn"><?php echo $index['Rimuovi']; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <span id="descrizione"><?php echo $index['descrizione']; ?></span>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12">
                        <ul class="list-group">
                            <li class="list-group-item border-0 small" style="background: rgba(0,0,0,0);">
                                <div class="d-flex justify-content-between">
                                    <span class="text-white"><?php echo $index['Prezzo']; ?></span>
                                    <span class="text-white text-end">59.99€</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 small" style="background: rgba(0,0,0,0);">
                                <div class="d-flex justify-content-between">
                                    <span class="text-white"><?php echo $index['tasse']; ?></span>
                                    <span class="text-secondary text-end"><?php echo $index['dichiara_tasse']; ?></span>
                                </div>
                            </li>
                            <hr>
                            <li class="list-group-item border-0 small" style="background: rgba(0,0,0,0);">
                                <div class="d-flex justify-content-between">
                                    <span class="text-white"><?php echo $index['Prezzo_totale']; ?></span>
                                    <span class="text-white text-end">{{total}}€</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary w-100"><?php echo $index['Checkout']; ?></button>
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

    <!-- <script src="carrello.js"></script> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js" crossorigin="anonymous"></script>
    <script src="carrello.js"></script>
    <script src="jquery-3.6.1.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            var stat = document.getElementsByClassName("btn-outline-success");

        for (var i = 0; i < stat.length; i++) {
           var button = stat[i];
           button.addEventListener('click', stat_change)
       } 

       function stat_change(event) {
        var buttonClicked = event.target;
        var value = buttonClicked.innerText;

        if (value === "<?php echo $index['stat_select']; ?>") {
            buttonClicked.innerHTML = "<?php echo $index['stat_noselect']; ?>";
        } 
        else if (value === "<?php echo $index['stat_noselect']; ?>") {
            buttonClicked.innerHTML = "<?php echo $index['stat_select']; ?>";
        }
        }; 
    
        });


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
