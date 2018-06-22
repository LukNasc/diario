<?php
    require_once('conexao.php');
    $con=new Conectar();
    $insert='INSERT INTO senha(senha) VALUES(?)';
    $cmd=$con->getCon()->prepare($insert);
    $cmd->bindParam(1, $_POST['senha']);
    $cmd->execute();
    $_SESSION['id']=$_POST['senha'];
    header('location: ../../');
?>