<?php
    session_start();
    require_once("conexao.php");
    $con=new Conectar();
    try{
       $img=$_FILES['foto'];
       if(isset($img['name'])&&isset($img['error'])==1){
            $nome=$img['name'];
            $exten=strtolower(pathinfo($nome, PATHINFO_EXTENSION));
            $permitidas="png;jpg;jpeg";
            if(strstr($permitidas,$exten)){
                $arquivo=fopen($img['tmp_name'], 'rb');
                $sql_update="UPDATE timeline SET img=? WHERE id=?;";
               $cmd=$con->getCon()->prepare($sql_update);
               $cmd->bindParam(1, $arquivo, PDO::PARAM_LOB);
               $cmd->bindParam(2, $_GET['id']);
               $cmd->execute();
               header('location:../../');
            }else{
                $_SESSION['extr']="notPermision";
                header("location:../../");
            }
       }else{
           $_SESSION['extr']="notFound";
           header("location:../../");
       }
    }catch(Exception $e){
        if(file_exists("logs")){
            chdir("logs");
          }else{
            mkdir("logs", 0777);
            chdir("logs");
          }
          $arquivo=fopen("colarFoto.log","a");
            $time=date('H:i:s');
            $data=date('d-m-Y');
            $erro=$e->getMessage();
            $mensagem="No dia ".$data." às ".$time." ocorreu a seguinte exceção: \n $erro \n\n";
            fwrite($arquivo, $mensagem);
            fclose($arquivo);
            $_SESSION['ex']="geral";
            header("location: ../../");
    }
?>