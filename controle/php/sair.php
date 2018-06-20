<?php
    session_start();
    unset($_SESSION['id']);
    if(isset($_SESSION['id'])){
        if(!isset($_GET['pagina'])){
            echo "<li name=\"INDEX\" data-toggle=\"modal\" data-target=\"#exampleModal\">Escrever <i class=\"fa fa-pencil\"></i></li>";
        }
        echo "<li onclick='Sair()' name=\"SAIR DA INDEX\" id='sair'>Sair <i class=\"fa fa-sign-out\"></i></li>";
    }else{
        echo "<li onclick='Logar()' name=\"ENTRAR DA INDEX\" id='log'>Indentifique-se <i class=\"fa fa-address-card\"></i></li>";
    }
?>