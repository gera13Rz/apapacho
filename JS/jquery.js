$(document).ready(function(){
    $("#btnCancelar").click(function(){
        url = "login.php";
        window.open(url, '_self');
        return false;
    });
});