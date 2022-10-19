<?php
	session_start();
	if(isset($_get['login'])){
		unset($_SESSION);
		session_destroy();
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Un sito che fornisce tutte le video giochi più popolari!|FIFA23, GTA5....">
	<title>Game Store</title>
	<link rel="stylesheet" href="css/stile_homepage.css" media="screen" type="text/css">
</head>

<body>
<form action="db/use_db.php" method="post">
	<div class="layout">
		<div class="titolo">
			<header>
				<h1 align="center"><img src="img/logo.png" width="50px" title="GameStore">Game Store</h1>
				
			</header>
			<aside>
				<form action="home_page.php" method="get">
					<input type="submit" name="login" id="login" value="">
					<input type="submit" name="carrello" id="carrello" value="">
				</form>
			</aside>
		</div>


		<div class="menu">
			
			<nav>
				<header>
					<h2 align="center">Genere</h2>
				</header>
				<ul>
					<div class="genere"><li>Avventure</li></div>
					<div class="genere"><li>MMORPG</li></div>
					<div class="genere"><li>RPG</li></div>
					<div class="genere"><li>Sportivo</li></div>
				</ul>
			</nav>

		</div>

	
		<div class="giochi">
			<header>
				<h2 align="left">Giochi in offerta</h2>
			</header>
			
			<div class="img" id="FIFA23">
			<a href="https://store.epicgames.com/it/p/fifa-23" target="_blank">
				<img src="img/FIFA23.jpg" title="FIFA23">
				<div class="name" style="text-align:center;">FIFA23</div>
			       
					<p>Questa è la didascalia dell’immagine.</p>
			

			</a>
			</div>
	 </div>

	 <div class="giochi">
			<div class="img" id="gta5">
			<a href="https://store.epicgames.com/it/p/grand-theft-auto-v" target="_blank">
				<img src="img/GTA5.jpg" title="GTA5">
				<div class="name" style="text-align:center;">GTA5</div>
			</a>
			</div>
	 </div>

	 <div class="giochi">
			<div class="img" id="red">
			<a href="https://store.epicgames.com/it/p/red-dead-redemption-2" target="_blank">
				<img src="img/red.jpg" title="Red dead redeption II">
				<div class="name" style="text-align:center;">Red dead redeption II</div>
			</a>
			</div>
	 </div>
	
	
	
			<div class="fine">
			<hr width="100%">
			<footer>
				<p align="left">Gmail:123456</p>
				<p align="left">Telefono:123456</p>
				<p align="left">Facebook:123456</p>
				<p>dovesiamo: <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.7319445058715!2d14.283455715369469!3d40.855808679316475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b081d82403555%3A0xe353ae7cee808809!2sVia%20Taddeo%20da%20Sessa%2C%2065%2C%2080143%20Napoli%20NA!5e0!3m2!1szh-CN!2sit!4v1665744001208!5m2!1szh-CN!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="30px" height="30px"></iframe></p>
			</footer>
			</div>
	</div>
</form>
</body>

</html>
