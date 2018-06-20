<?php
    session_start();
    try{
        require_once('conexao.php');
        $con=new Conectar();
        $foto=$_FILES['foto'];
       if(isset($foto['name'])&&isset($foto['error'])==1){
            $ext=strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
            $permitidas="png;jpg;jpeg";
            if(strstr($permitidas, $ext)){
                if(empty($_POST['titulo'])){
                    $_POST['titulo']="Sem Titulo";
                }
                $arquivo=fopen($foto['tmp_name'],'rb');
                $data = $_POST['data'];
                $date=date('d-m-Y', strtotime($data));          
                $date = date("Y-m-d",strtotime(str_replace('/','-',$data)));  
                $sql_insert="INSERT INTO album(titulo,data,imagem) VALUES(?,?,?);";
                $cmd=$con->getCon()->prepare($sql_insert);
                $cmd->bindParam(1, $_POST['titulo']);
                $cmd->bindParam(2, $date);
                $cmd->bindParam(3, $arquivo, PDO::PARAM_LOB);
                $cmd->execute();
                header('location: ../../album.php');
            }else{
                $_SESSION['ex']="notPermision";
                header("location:../../album.php");
            }
       }else{
           $_SESSION['ex']="notFound";
           header("location:../../album.php");
       }
    }catch(ErrorException $e){
        if(file_exists("controle/php/logs")){
            chdir('controle/php/logs');
        }else{
            mkdir('controle/php/logs');
            chdir('controle/php/logs');
        }
        $hora=date('H:m:s');
        $data=date('d/m/Y');
        $erro=$e->getMessage();
        $msgm="No dia $data às $hora occoreu o seguinte erro: \n $erro";
        $arquivo=fopen('album.log','a');
        fwrite($arquivo, $msgm);
        fclose();
        $_SESSION['ex']='erro';
        header("location:../../album.php");
    }catch(Exception $e){
        if(file_exists("controle/php/logs")){
            chdir('controle/php/logs');
        }else{
            mkdir('controle/php/logs');
            chdir('controle/php/logs');
        }
        $hora=date('H:m:s');
        $data=date('d/m/Y');
        $erro=$e->getMessage();
        $msgm="No dia $data às $hora occoreu a seguinte exceção: \n $erro";
        $arquivo=fopen('album.log','a');
        fwrite($arquivo, $msgm);
        fclose();
        $_SESSION['ex']='ex';
        header("location:../../album.php");
    }
?>