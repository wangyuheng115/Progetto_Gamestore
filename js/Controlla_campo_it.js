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

function VerificaNickname(){
    var name = document.getElementById('Nickname').value;
    var reg_name=/^[A-Za-z0-9]{4,20}$/g;

    if(reg_name.test(name) == true){
        var name = document.querySelectorAll("input");
		name[3].style.border = "solid 2px #53E652";
        document.getElementById("controll_name").innerHTML = "<font color=#53E652>Nickname Valido!";
    }
    else{
        var name = document.querySelectorAll("input");
		name[3].style.border = "solid 2px #f00";
        document.getElementById("controll_name").innerHTML = "<font color=#f00>Nickname non valido!";
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
         document.getElementById("controll_hobby").innerHTML = "<font color=#f00>Inserisci una hobby corretta!</font>";
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
         document.getElementById("controll_nazione").innerHTML = "<font color=#f00>Inserisci una nazione corretta!";
     }
}
