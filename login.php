<?php

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
    <title>Game_store_Loginpage</title>
    <link rel="stylesheet" href="css/stile_login.css" media="screen">
    <link rel="stylesheet" href="css_bootstrap/bootstrap.css">
    <!-- <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">  -->
    <script src="js/login_view_pw.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script> -->

    <link href="jquery-ui-plugin/css/base/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <script src="jquery-ui-plugin/js/jquery-1.10.2.js"></script>
    <script src="jquery-ui-plugin/js/jquery-ui-1.10.4.custom.js"></script>

    <script>
        $(function() {
            $(document).tooltip({
                position: {
                    my: "center top-30",
                    at: "center top",
                    using: function(position, feedback) {
                        $(this).css(position);
                        $("<div>")
                            .addClass("tooltip")
                            .addClass(feedback.vertical)
                            .addClass(feedback.horizontal)
                            .appendTo(this);
                    }
                }
            });
        });
    </script>

    <style>
        .ui-tooltip,
        .tooltip:after {
            background: white;
            border: 2px solid black;
        }

        .ui-tooltip {
            padding: 10px 20px;
            color: black;
            border-radius: 20px;
            font: bold 14px "Helvetica Neue", Sans-Serif;
            text-transform: capitalize;
            box-shadow: 0 0 7px lightgray;
        }

        .tooltip {
            width: 30px;
            height: 20px;
            overflow: hidden;
            position: absolute;
            left: 50%;
            margin-left: -35px;
            bottom: -16px;
        }
    </style>
</head>

<body>

    <div class="container p-5 my-5 text-white" id="container">
        <div class="box" id="box">
            <div class="row">
                <div class="col-12">
                    <h1 align="center"><img src="img/logo.png" width="50px" title="GameStore">Game<span style="color: red;">Store</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="db/use_db.php" method="post" enctype="application/x-www-form-urlencoded">
                        <div class="row">
                            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                                <div class="email" align="center">
                                    <div class="form-floating ">
                                        <input type="email" title="<?php echo $login['tooltipemail'];?>" name="Email" id="email" required="required" class="form-control form-control-sm" placeholder="Inserisci Email" style="border: 0; border-bottom:2px solid black ; background: rgba(0 ,0 , 0, 0%);">
                                        <label for="email"> <?php echo $login['email'];?> </label>
                                    </div>
                                    <span id="controll_email" style="font-size: 18px;"></span>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-sm-6 offset-sm-3">
                                <div class="pw" align="center">
                                    <div class="form-floating ">
                                        <input type="password" name="Password" title="<?php echo $login['tooltippw'];?>" id="password" required="required" class="form-control form-control-sm" placeholder="Inserisci Password" style="border: 0; border-bottom:2px solid black ; background: rgba(0 ,0 , 0, 0%);">
                                        <label for="password"><?php echo $login['pw'];?></label>
                                        <div class="img"><img src="img/no_pw.png" id="view_pw" width="25px" onclick="VisualizzaPassword()"></div>
                                    </div>
                                    <span id="controll_password" style="font-size: 18px;"></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (isset($_GET['msg'])) {
                            echo "<p style='color: red;' align='center'>Hai sbagliato Email o Password.</p>";
                        }
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="Ritrova" align="center">
                                    <a href="Ritrova_pw.php" style="font-size: 15px; color: blue;"><?php echo $login['rpw'];?></a><br>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="buttone" align="center">
                                    <input type="submit" name="login" value="<?php echo $login['login'];?>" class="btn btn-primary btn-lg" align="center">
                                    <input type="submit" onclick="window.location.href='registra.php'" value="<?php echo $login['reg'];?>" class="btn btn-primary btn-lg">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#box").fadeIn(2500);
        })


        $('#email').blur(function() {
            var email = $('#email').val();

            $.post("./db/Verifica_email.php", {
                Email: email
            }, function(data) {
                if (data.trova === 0) {
                    var email = document.querySelectorAll("input");
                    email[0].style.border = "solid 2px #f00";
                    document.getElementById("controll_email").innerHTML = "<font color=#f00><?php echo $login['noemail'];?>";
                } else {
                    document.getElementById("controll_email").innerHTML = "<font color=#53E652><?php echo $login['validemail'];?></font>";
                    var email = document.querySelectorAll("input");
                    email[0].style.border = "solid 2px #53E652";
                }
            }, "json");
        });

        $('#password').blur(function() {
            var pw = $('#password').val();

            $.post("./db/Verifica_pw.php", {
                Password: pw
            }, function(data) {
                if (data.trova === 0) {
                    document.getElementById("controll_password").innerHTML = "<font color=#f00><?php echo $login['erorpw'];?>";
                } else {
                    document.getElementById("controll_password").innerHTML = "";
                }
            }, "json");
        });
    </script>
</body>

</html>
