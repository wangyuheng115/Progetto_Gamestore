function ConfermaPassword() {

    var password = document.getElementById('password').value;
    var conf_pw = document.getElementById('conf_pw').value;

    if (conf_pw == password) {
        var conf_pw = document.querySelectorAll("input");
        conf_pw[1].style.border = "solid 2px #53E652";
        document.getElementById("conferma_password").innerHTML = "<font color=#53E652>Confirmé!</font>";
    }
    else {
        var conf_pw = document.querySelectorAll("input");
        conf_pw[1].style.border = "solid 2px #f00";
        document.getElementById("conferma_password").innerHTML = "<font color=#f00>Entrez le mot de passe comme avant!</font>";
    }
}
