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
    <script src="carrello.js"></script>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background: rgb(23, 23, 23);">
    <div class="position-relative g-col-4">
        <div class="d-inline-flex">
            <h1 class="text-white"><?php echo ($index["Articoli"]); ?></h1>
            <button type="submit" class="text-white text-end position-relative" style="left:230%; background: none; border: none;" function="function()">
                <h1><?php echo ($index["Svuota carrello"]); ?>
            </button></h1>
        </div>
        <div class="fixed-top" style="top:10%; margin: 20px; left:-9%;">
            <div class="CartContainer">
                <div class="row" id="prodotto">
                    <div class=" small-box bg-dark w-25 p-4 offset-md-1 d-flex position-absolute text-white"><?php echo ($index["Gioco"]); ?>
                        <label for="prezzo" class=" small-box w-50 p-4 position-absolute offset-md-11 d-flex text-white" style="height: 100%; margin-top:-24px; left: 15%; background: rgb(23, 200, 10);">69.99€</label>
                    </div>
                    <button class="btn btn-danger w-25 p-4 position-relative d-flex text-white" style="height: 100%; left: -30%; background: rgb(23, 200, 10);" type="button">bottone</button>
                </div>
                <div class="row" id="prodotto">
                    <div class=" small-box bg-dark w-25 p-4  offset-md-1 d-flex position-absolute text-white" style="margin-top:100px;"><?php echo ($index["Gioco"]); ?><label for="prezzo" class=" small-box w-50 p-4 position-absolute offset-md-11 d-flex text-white" style="height: 100%; margin-top:-24px; left: 15%; background: rgb(23, 200, 10);">69.99€</label></div>
                </div>
                <div class="row" id="prodotto">
                    <div class=" small-box bg-dark w-25 p-4  offset-md-1 d-flex position-absolute text-white" style="margin-top:200px;"><?php echo ($index["Gioco"]); ?><label for="prezzo" class=" small-box w-50 p-4 position-absolute offset-md-11 d-flex text-white" style="height: 100%; margin-top:-24px; left: 15%; background: rgb(23, 200, 10);">69.99€</label></div>
                </div>
                <div class="row">
                    <div class=" small-box border-end border-start  p-4 offset-md-1 d-flex position-absolute text-white" style="margin-top: 350px;">
                        <h2><?php echo ($index["Prezzo_totale"]); ?></h2>
                    </div>
                </div>
                <button class="position-absolute p-4 text-white text-align-left" type="submit" style="width: 250px; left:990px; margin-top: 200px; background: rgb(23, 200, 10); border:none; border-radius: 25px;">
                    <h2><?php echo ($index["Checkout"]); ?></h2>
                </button>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            </div>
        </div>
    </div>
</body>

</html>
