function ConfermaPassword(){
    var password = document.getElementById('password').value;
    var conf_pw = document.getElementById('conf_pw').value;

    if(conf_pw == password){
        var conf_pw = document.querySelectorAll("input");
		conf_pw[2].style.border = "solid 2px #53E652";
        document.getElementById("conferma_password").innerHTML = "<font color=#53E652>Confermato!</font>";
    }
    else{
        var conf_pw = document.querySelectorAll("input");
		conf_pw[2].style.border = "solid 2px #f00";
        document.getElementById("conferma_password").innerHTML = "<font color=#f00>Inserisci password come prima!</font>";
    }
}

function VerificaPassword(){
    var password = document.getElementById('password').value;
    var reg_pw=/(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[^a-zA-Z0-9]).{8,30}/;

    if(reg_pw.test(password) == true){
        
        document.getElementById("controll_password").innerHTML = "<font color=#53E652>Password valido!</font><br>";
        document.getElementById("controll_password_1").innerHTML = "<font color=#53E652>-Una lettera maiuscola e minuscola<br>";
        document.getElementById("controll_password_2").innerHTML = "<font color=#53E652>-Un numero<br>";
        document.getElementById("controll_password_3").innerHTML = "<font color=#53E652>-Un simbolo speciale come @.+-_<br>";
        document.getElementById("controll_password_4").innerHTML = "<font color=#53E652>-Lunghezza tra 8-30<br>";
        var pw = document.querySelectorAll("input");
		pw[1].style.border = "solid 2px #53E652";
    }
    else{
        var pw = document.querySelectorAll("input");
		pw[1].style.border = "solid 2px #f00";
        document.getElementById("controll_password_1").innerHTML = "-Una lettera maiuscola e minuscola<br>";
        document.getElementById("controll_password_2").innerHTML = "-Un numero<br>";
        document.getElementById("controll_password_3").innerHTML = "-Un simbolo speciale come @.+-_<br>";
        document.getElementById("controll_password_4").innerHTML = "-Lunghezza tra 8-30<br>";
    }
}

function VerificaEta(){
    var eta = document.getElementById('eta').value;
    var reg_eta=/^(([1-9])|([1-9]\d)|99)$/;

    if(reg_eta.test(eta) == true){
        var eta = document.querySelectorAll("input");
		eta[3].style.border = "solid 2px #53E652";
        document.getElementById("controll_eta").innerHTML = "<font color=#53E652>Valido!";
    }
    else{
        var eta = document.querySelectorAll("input");
		eta[3].style.border = "solid 2px #f00";
        document.getElementById("controll_eta").innerHTML = "Inserisci una età corretta!";
    }
}

function VerificaHobby(){
    var hobby = document.getElementById('hobby').value;
    var reg_hobby=/^[a-zA-Z]*$/;

    if(reg_hobby.test(hobby) == true && hobby.length!=0){
        var hobby = document.querySelectorAll("input");
		hobby[4].style.border = "solid 2px #53E652";
        document.getElementById("controll_hobby").innerHTML = "<font color=#53E652>valido!";
     }
     else{
        var hobby = document.querySelectorAll("input");
		hobby[4].style.border = "solid 2px #f00";
         document.getElementById("controll_hobby").innerHTML = "Inserisci una hobby corretta!";
     }
}

function VerificaNazione(){
    var nazione = document.getElementById('nazione').value;
    var reg_nazione=/^[a-zA-Z]*$/;

    if(reg_nazione.test(nazione) == true && nazione.length!=0){
        var nazione = document.querySelectorAll("input");
		nazione[5].style.border = "solid 2px #53E652";
        document.getElementById("controll_nazione").innerHTML = "<font color=#53E652>Valido!";
     }
     else{
         var nazione = document.querySelectorAll("input");
		 nazione[5].style.border = "solid 2px #f00";
         document.getElementById("controll_nazione").innerHTML = "Inserisci una nazione corretta!";
     }
}
