<?php
require_once('../controle/php/conexao.php');
$con=new Conectar();
    if(isset($_GET['type'])){
        $mostrarImg="SELECT imagem FROM album WHERE id=?;";
        $preparar = $con->getCon()->prepare($mostrarImg);
        $preparar-> bindParam(1, $_GET['id']);
        $preparar->execute();
        $preparar->bindColumn(1, $imagem, PDO::PARAM_LOB );
        $arquivo = $preparar->fetch(PDO::FETCH_BOUND);
        header("Content-type: image");
        echo $imagem;
    }else{
        
        $mostrarImg="SELECT img FROM timeline WHERE id=?;";
        $preparar = $con->getCon()->prepare($mostrarImg);
        $preparar-> bindParam(1, $_GET['id']);
        $preparar->execute();
        $preparar->bindColumn(1, $imagem, PDO::PARAM_LOB );
        $arquivo = $preparar->fetch(PDO::FETCH_BOUND);
        header("Content-type: image");
        echo $imagem;
    }
?>