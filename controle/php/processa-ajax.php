<?php
session_start();
  try{
    $data = $_POST['data'];
    $date=date('d-m-Y', strtotime($data));          
    $date = date("Y-m-d",strtotime(str_replace('/','-',$data)));  
        require_once("conexao.php");
        $con=new Conectar();
        $verificar="SELECT * FROM timeline;";
        $ver=$con->getCon()->query($verificar);    
        //   insert
        $sql=$con->getCon()->prepare("INSERT INTO timeline(texto,data,titulo,privado) VALUES(?,?,?,?);");
        $sql->bindParam(1, $_POST['texto']);
        $sql->bindParam(2, $date);
        $sql->bindParam(3, $_POST['titulo']);
        $sql->bindParam(4, $_POST['privado']);
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