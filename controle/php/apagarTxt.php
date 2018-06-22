<?php 
require_once("conexao.php");
$con=new Conectar();
    $sql='DELETE FROM timeline WHERE id=?';
    $cmd=$con->getCon()->prepare($sql);
    $cmd->bindParam(1, $_GET['id']);
    $cmd->execute();
    header('location:../../');
?>