$(document).ready(function() {
    $('#input').focusin(function(){
        $("#caixa").attr("style","display:block;");
       
    });
    function none(){
        $("#caixa").attr("style","display:none;")
    }
    $('#input').focusout(function(){
        window.setTimeout( none(),5000 );
    });
});
