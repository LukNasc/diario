<?php
    session_start();
    require_once('conexao.php');
    $con=new Conectar();
    $sql_select='SELECT * FROM senha WHERE senha=?;';
    $cmd=$con->getCon()->prepare($sql_select);
    $cmd->bindParam(1, $_GET['senha']);
    $cmd->execute();
    $return=$cmd->fetchAll(PDO::FETCH_COLUMN, 1);  
    if($return){
        $_SESSION['id']=$_GET['senha'];
        if(isset($_SESSION['id'])){
            if(!isset($_GET['pagina'])){
                echo "<li name=\"INDEX\" data-toggle=\"modal\" data-target=\"#exampleModal\">Escrever <i class=\"fa fa-pencil\"></i></li>";
            }
            echo "<li onclick='Sair()' name=\"SAIR DA INDEX\" id='sair'>Sair <i class=\"fa fa-sign-out\"></i></li>";
        }else{
            echo "<li onclick='Logar()' name=\"ENTRAR DA INDEX\" id='log'>Indentifique-se <i class=\"fa fa-address-card\"></i></li>";
        }
    }else{
        if(isset($_SESSION['id'])){
            if(!isset($_GET['pagina'])){
                echo "<li name=\"INDEX\" data-toggle=\"modal\" data-target=\"#exampleModal\">Escrever <i class=\"fa fa-pencil\"></i></li>";
            }
            echo "<li onclick='Sair()' name=\"SAIR DA INDEX\" id='sair'>Sair <i class=\"fa fa-sign-out\"></i></li>";
        }else{
            echo "<li onclick='Logar()' name=\"ENTRAR DA INDEX\" id='log'>Indentifique-se <i class=\"fa fa-address-card\"></i></li>";
        }
    }
   
?>