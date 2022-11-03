function ConfermaPassword(){ 

    var password = document.getElementById('password').value;
    var conf_pw = document.getElementById('conf_pw').value;

    if(conf_pw == password){
        var conf_pw = document.querySelectorAll("input");
		conf_pw[2].style.border = "solid 2px #53E652";
        document.getElementById("conferma_password").innerHTML = "<font color=#53E652>确认成功!</font>";
    }
    else{
        var conf_pw = document.querySelectorAll("input");
		conf_pw[2].style.border = "solid 2px #f00";
        document.getElementById("conferma_password").innerHTML = "<font color=#f00>请确保输入的密码一致!</font>";
    }
}

function VerificaEta(){
    var eta = document.getElementById('eta').value;
    var reg_eta=/^(([1-9])|([1-9]\d)|99)$/;

    if(reg_eta.test(eta) == true){
        var eta = document.querySelectorAll("input");
		eta[3].style.border = "solid 2px #53E652";
        document.getElementById("controll_eta").innerHTML = "<font color=#53E652>已确认!";
    }
    else{
        var eta = document.querySelectorAll("input");
		eta[3].style.border = "solid 2px #f00";
        document.getElementById("controll_eta").innerHTML = "<font color=#f00>请输入正确的年龄!";
    }
}

function VerificaHobby(){
    var hobby = document.getElementById('hobby').value;
    var reg_hobby=/^[a-zA-Z]*$/;

    if(reg_hobby.test(hobby) == true && hobby.length!=0){
        var hobby = document.querySelectorAll("input");
		hobby[4].style.border = "solid 2px #53E652";
        document.getElementById("controll_hobby").innerHTML = "<font color=#53E652>已确认!";
     }
     else{
        var hobby = document.querySelectorAll("input");
		hobby[4].style.border = "solid 2px #f00";
         document.getElementById("controll_hobby").innerHTML = "<font color=#f00>请输入正确的爱好!</font>";
     }
}

function VerificaNazione(){
    var nazione = document.getElementById('nazione').value;
    var reg_nazione=/^[a-zA-Z]*$/;

    if(reg_nazione.test(nazione) == true && nazione.length!=0){
        var nazione = document.querySelectorAll("input");
		nazione[5].style.border = "solid 2px #53E652";
        document.getElementById("controll_nazione").innerHTML = "<font color=#53E652>已确认!";
     }
     else{
         var nazione = document.querySelectorAll("input");
		 nazione[5].style.border = "solid 2px #f00";
         document.getElementById("controll_nazione").innerHTML = "<font color=#f00>请输入正确的国家!";
     }
}
