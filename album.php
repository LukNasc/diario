<?php session_start();?>
<!DOCTYPE html>
<html>
<?php require_once('includes/head.php'); ?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php require_once("includes/titulo.html");?>
            </div>
            <!-- col-md-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-4 padding0 heigth100">
                <?php require_once("includes/menu.php");?>
            </div>
            <!-- col-md-4 -->
            <div class="col-md-8 branco">
                <br>
                <br>
                <br>
                <div class="col-md-12">
                    <h1 class="h1">Album de Fotografías</h1>
                </div>
                <!-- col-md-12 -->
               <div class="row">
               <?php
                       try{
                        require_once("controle/php/conexao.php");
                        $con =new Conectar();
                        $sql_select="SELECT * FROM album ORDER BY id DESC ";
                        $cmd=$con->getCon()->query($sql_select, PDO::FETCH_OBJ);
                        if($cmd->rowCount()>0){
                            foreach($cmd as $linha){
                               $date=date('d/m/Y', strtotime($linha->data));
                                echo "
                                    <div class=\"col-md-4\">
                                        <div class=\"img-content\">
                                           <img data-toggle=\"modal\" data-target=\"#comentarioFoto{$linha->id}\" src=\"img/imagem.php?type=al&id={$linha->id}\" alt=\"{$linha->titulo}\" class=\"img-album\" id=\"btn{$linha->id}\">
                                            <div class=\"img-op\">
                                                <h6>{$linha->titulo}</h6>
                                                <h6 class=\"date\">{$date}</h6>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </div>
                                ";
                                echo "
                                     <!-- modal -->
                <div class=\"modal fade\" id=\"comentarioFoto{$linha->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title fonte h5\" id=\"exampleModalLabel\" style=\"font-size:50px;\">Informações da foto</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\"><b>X</b></span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                           <div class=\"row\">
                                <div class=\"col-md-5\">
                                    <img src=\"img/imagem.php?type=al&id={$linha->id}\" alt=\"{$linha->titulo}\" width=\"100%\" height=\"300px\">
                                </div>
                                <div class=\"col-md-7\">
                                    <h3><b>Titulo:</b> {$linha->titulo}</h3>
                                    <h3><b>Identificação</b> #{$linha->id}</h3>
                                    <h3><b>Data da foto:</b> {$date}</h3>
                                </div>
                           </div>
                               
                        </div>
                        <div class=\"modal-footer\">
                            <a href=\"controle/php/removeFoto.php\"><button type=\"button\" class=\"btn btn-danger\" >Excluir Imagem</button></a>
                            <button class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /modal -->
                                ";
                            }
                        }else{  
                            echo "<center><h2>Nenhuma imagem para mostrar, você pode adicionar uma imagem ao seu album no formulário a baixo</h2></center><br>";
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
                        $msgm="No dia $data às $hora occoreu a seguinte exceção: \n $erro";
                        $arquivo=fopen('album.log','a');
                        fwrite($arquivo, $msgm);
                        fclose();
                        echo "<script>
                            swal({
                                title: 'Opsss...!!',
                                text: 'Ocorreu um erro e não é possível mostrar as imagens, mas estamos trabalhando para corrigit',
                                icon: 'error'
                            });
                        </script>";
                       }
                    ?>
                    <div class="col-md-12">
                        <div class="upload">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="formulario">
                                            <form action="controle/php/fotoAlb.php" method="post" enctype="multipart/form-data">
                                                <label for="foto" class="target-file" id="fileName"></label>
                                                <input type="file" name="foto" id="foto" class="file">
                                                <input type="text" name="titulo" id="titulo" class="form-control" maxlength="10" placeholder="Titulo">
                                                <br>
                                                <input type="date" name="data" id="data" class="form-control" value="<?php echo date('d/m/Y');?>">
                                                <br>
                                                    
                                                <input type="submit" value="Enviar Foto" class="btn btn-edit">
                                            </form>
                                            <!-- form -->
                                        </div>
                                        <!-- formulario -->
                                    </div>
                                    <!-- col-md-4 -->
                                    <div class="col-md-8">
                                    <center><h2>Imagem Selecionada</h2>
                                        <img src="http://www.bichobrasil.com.br/wp-content/themes/BichoBrasil_v1/images/2612f766d8738038e82d4df7addf7144_bordaimgproduto02.png" id="img" width="300px" height="300px"></center>
                                    </div>
                                    <!-- col-md-8 -->
                                </div>
                                <!-- row -->
                        </div>
                        <!-- upload -->
                       <script>
                            var $input    = document.getElementById('foto'),
                                $fileName = document.getElementById('fileName');
                                $input.addEventListener('change', function(){
                                $fileName.style.backgroundImage="url('img/file_upload.png')";
                            });
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
                       <!-- script -->
                    </div>
                    <!-- col-md-12 -->
               </div>
               <!-- row -->
                
            </div>
            <!-- branco -->
        </div>
        <!-- rowPrimary -->
    </div> 
    <!-- container -->
</body>
</html>