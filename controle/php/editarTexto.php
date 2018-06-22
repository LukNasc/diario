<?php
require_once("conexao.php");
$con=new Conectar();
    $sql_update='UPDATE timeline SET texto=?, data=?, titulo=?, privado=? WHERE id=?';
    $cmd=$con->getCon()->prepare($sql_update);
    $cmd->bindParam(1, $_POST['texto']);
    $cmd->bindParam(2, $_POST['data']);
    $cmd->bindParam(3, $_POST['titulo']);
    $cmd->bindParam(4, $_POST['privado']);
    $cmd->bindParam(5, $_GET['id']);
    $cmd->execute();
    header('location:../../');
?>