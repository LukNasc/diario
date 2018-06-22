<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <?php require_once('includes/head.php'); ?>
    <!-- html -->
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php require_once('includes/titulo.html'); ?>
                </div>
                <!-- col-md-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-md-4 padding0 height100">
                    <?php require_once('includes/menu.php'); ?>
                </div>
                <!-- col-md-4 -->
                <div class="col-md-8 branco">
                <br><br><br>
                    <h1 class="h1">Deixe aqui um comentário sobre Lucas</h1>
                    <br>
                    <form action="controle/php/comentario.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3 col-lg-2">
                                <center>
                                    <label for="foto"><img src="img/semperfilM.jpeg" class="perfil" id="img"></label>
                                    <input type="file" name="foto" id="foto" class="file" >
                                    <input type="text" autocomplete="off" class='form-control' id='campoNome' name="nome" placeholder="Nome" onclick="aviso()">
                                    <div id="aviso">
                                        <p>
                                            O campo de imagem e de nome não é obrigatório caso você não queira se indentificar.
                                            Mas caso você decida colocar uma foto, obrigatoriamente é necessário seu nome.
                                        </p>
                                    </div>
                                <center>
                            </div>
                            <!-- col-md-2 -->
                            <div class="col-md-9 col-lg-10">
                                <textarea name="comentario" id="comentario" class="comentario" onclick="place()">Deixe seu comentário</textarea>
                                <input type="submit" value="Comentar" class="enviar">
                            </div>
                            <!-- col-md-10 -->
                            <script>
                            $(function(){
                                    $('#foto').change(function(){
                                        const file = $(this)[0].files[0]
                                        const fileReader = new FileReader()
                                            
                                        fileReader.onloadend = function(){
                                            $('#img').attr('src',fileReader.result)
                                        }
                                        fileReader.readAsDataURL(file)
                                    })
                                })
                            </script>
                        </div>
                        <!-- row -->
                    </form>
                    <!-- form -->
                    <?php 
                        require_once('controle/php/conexao.php');
                        $con=new Conectar();
                        $sql_select="SELECT * FROM comentarios ORDER BY id DESC";
                        $return=$con->getCon()->query($sql_select, PDO::FETCH_OBJ);
                        if($return->rowCount()>0){
                            foreach($return as $linha){
                                echo "
                                <div class=\"box\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3 col-12 col-lg-2 box-img\">
                                            <center>";
                                            if($linha->img!=NULL){
                                                echo " <img src=\"img/imagem.php?type=comentario&id={$linha->id}\" class=\"perfil\">";
                                            }else{
                                                echo " <img src=\"img/semperfilM.jpeg\" class=\"perfil\">";
                                            }
                               
                                               
                                echo "      </center>
                                        </div>
                                        <div class=\"col-md-9 col-12 col-lg-10 comentario-box\">
                                        <h5><b>{$linha->nome}</b></h5>
                                            <p >
                                                {$linha->comentario}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                        }else{
                            echo "<br><br><h1 class=\"h1\">Nenhum comentário para mostrar</h1>";
                        }
                    ?>
                    <!-- comentario-box -->  
                </div>
                <!-- branco -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </body>
</html>