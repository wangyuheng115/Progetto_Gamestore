function VisualizzaPassword(){
    var img = document.getElementById("view_pw");
    var pw = document.getElementById("password");

    if(pw.type === "password"){
        pw.type = "text";
        img.src="img/visualizzapw.png";
    }
    else{
        pw.type = "password";
        img.src="img/no_pw.png";
    }
}
