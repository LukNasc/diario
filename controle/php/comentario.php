<?php 
    session_start();
    require_once('conexao.php');
    $con=new Conectar();
    try{
        if(isset($_FILES['foto']['name'])&&$_FILES['foto']['error']==0){
            $nome=$_FILES['foto']['name'];
            $permitidas='jpg;jpeg;png';
            $ext=strtolower(pathinfo($nome, PATHINFO_EXTENSION));
            if(strstr($permitidas, $ext)){
               if(!empty($_POST['nome'])){
                    $sql_insert='INSERT INTO comentarios(nome,img,comentario) VALUES(?,?,?)';
                    $cmd=$con->getCon()->prepare($sql_insert);
                    $arquivo=fopen($_FILES['foto']['tmp_name'], 'rb');
                    $cmd->bindParam(1, $_POST['nome']);
                    $cmd->bindParam(2, $arquivo, PDO::PARAM_LOB);
                    $cmd->bindParam(3, $_POST['comentario']);
                    $cmd->execute();
               }else{
                echo "<script>alert('Quando você adiciona uma foto, você precisa obrigatoriamente colocar um nome')</script>";
               }
            }else{
                echo "<script>alert('O formtado de arquivo enviado não é permitido')</script>";
            }
        }else{
            $sql_insert='INSERT INTO comentarios(comentario) VALUES(?)';
                $cmd=$con->getCon()->prepare($sql_insert);
                $cmd->bindParam(1, $_POST['comentario']);
                $cmd->execute();
        }    
        header('location: ../../comentario.php');
    }catch(Exception $e){
        date_default_timezone_set('America/Fortaleza');
    $data=date('d/m/Y');
    $hora=date('H:m:s');
    $msg=$e->getMessage();
    $msg="OCORREU UMA EXCEÇÃO NO DIA $data às $hora \n $msg na linha $linha \n";
    $arquivo=fopen('comentarios.log', 'a');
    fwrite($arquivo, $msg);
    fclose();
   header('location: ../../comentario.php');
    }
?>