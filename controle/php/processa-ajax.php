<?php
session_start();
  try{
        require_once("conexao.php");
        $con=new Conectar();
        $verificar="SELECT * FROM timeline;";
        $ver=$con->getCon()->query($verificar);    
        //   insert
        $sql=$con->getCon()->prepare("INSERT INTO timeline(texto,data,titulo,position) VALUES(?,?,?,?);");
        $sql->bindParam(1, $_POST['texto']);
        $sql->bindParam(2, $_POST['data']);
        $sql->bindParam(3, $_POST['titulo']);
        $count=$ver->rowCount();
        if($count>0){
            echo "to aqui";
            $select="SELECT position FROM timeline ORDER BY id DESC LIMIT 1";
            $cmd=$con->getCon()->query($select);
            $ultimo_valor=$cmd->fetchColumn();
            //    insert
            if($ultimo_valor=="E"){
                $d="D";
                $sql->bindParam(4, $d);
            }else{
                $e="E";
                $sql->bindParam(4, $e);
            }
        }else{
          $e="E";
          $sql->bindParam(4, $e);
        }
        $sql->execute();
        header("location: ../../");
  }catch(SQLException $e){
      if(file_exists("logs")){
        chdir("logs");
      }else{
        mkdir("logs", 0777);
        chdir("logs");
      }
      $arquivo=fopen("processaSQL.log","a");
        $time=date('H:i:s');
        $data=date('d-m-Y');
        $erro=$e->getMessage();
        $mensagem="No dia ".$data." às ".$time." ocorreu a seguinte exceção de SQL: \n $erro \n\n";
        fwrite($arquivo, $mensagem);
        fclose($arquivo);
        $_SESSION['ex']="sql";
        header("location: ../../");
  }catch(Exception $e){
    if(file_exists("logs")){
        chdir("logs");
      }else{
        mkdir("logs", 0777);
        chdir("logs");
      }
      $arquivo=fopen("processa.log","a");
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