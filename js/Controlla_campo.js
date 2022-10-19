function VerificaCampi(){
    var email=document.getElementById('email').value;
        //alert(email);

    var pattern ="/*+*@*+*.*+*/";
    if (email == pattern) {
        alert('errore');
    }

    document.modulo.action = 'us_db.php';
    document.modulo.submit();
}
