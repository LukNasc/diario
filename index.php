<?php session_start();?>
<!DOCTYPE html>
<html>
<?php require_once('includes/head.php'); ?>
<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <?php require_once("includes/titulo.html");?>
            </div>
            <!-- col-md-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-4 col-12 col-lg-4 padding0 heigth100">
                <?php require_once("includes/menu.php");?>
            </div>
            <!-- col-md-4 -->
            <div class="col-md-8 col-lg-8 col-sm-12 col-12 branco">
                <div class="caixa">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                        <h1 class="h1">Um Pouco Sobre Mim</h1>
                            <p>
                                <b>
                                    Olá, meu nome é Lucas, tenho 17 anos de idade e comecei no curso de informática no ano de 2016,
                                    entrei no curso de informática porque achei que dentre as opções que a escola oferecia era o que eu mais me indentificava.
                                    Entrei pensando que ia aprender a usar facebook, criar imagens, usar o Photoscape, e quando começou as auals de informática básica, conversão de números binários
                                    foi que eu fui perceber que não era nada no deu que eu imaginava, e depois começou Lógica de Programação e foi só sucesso.
                                </b>
                                <!-- b -->
                            </p>
                            <!-- p -->
                        </div>
                        <!-- col-md-5 -->
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <img src="https://lh3.googleusercontent.com/ZXnbVHpjBKFKqbMXr5slDkTW9PPNohZJ0NN0w1MWxohhlA5mEfd04YouxWoeqmreF0_J9OgR_qTcT8qwGEYaopmbSxyfxj-HxHz_hNTgLyLTEaZOoM-4u-WlyMlL_RQWACYgpqOoGPLPxemw3SsSw8fQUWsIle_rzV3tIzZcJVmZ4-25v0iIcNDSiF1H2ZgWvYp8NzJEVNn1afY5P_2XJUZYTGlD063bUv4iPoxxbYjfKpWDfzA7zDIR6JIWb7C1UFfMAdgDskjaOZYdCGk6HS0FSa5AjWCmhxOcMbdfpTRi_jAG_aD9StEQJaLV8GEO9ZNrERESBC_xyJU1XM5yxO872FpE1lYZ_IxNgsh6_x90uJodM2tj_aYoznB4LqOCFFT_jaNszRN9le6YHlnhlERVjK9JOhlgevfk9tA_dUA8rfgVsOrTiUZAAdVLMh58q54S8oBEQsFnZ-pBh9--h3IM3qdEOmcAYOIIIOmc5wTn3mDEUuNoa381MqiLXvliys3ZhZwVG2VwIqXIZF3VoT-TyqyR1lDZpsrvofKrcON5sIO2FsCBp7s5asgJc288lwSrQ8jgOkmEyKqEd_fZX8XT7z6xxBGxVRXj1fc=w394-h641-no" alt="Lucas2017" class="img some">
                        </div>
                        <!-- col-md-6 -->
                        <div class="col-md-12 col-12 col-lg-12 footer" style="background-color:rgb(23, 245, 134);padding:5px;border:solid 1px rgb(18, 177, 97);">
                            <ol>
                                <a href="https://www.instagram.com/blessed7170/"><li><i class="fa fa-instagram"></i></li></a>
                                <a href="http://lucas.ntectreinamentos.com.br/portifolio/"><li><i class="fa fa-book"></i></li></a>
                                <a href="https://www.github.com/LukNasc"><li><i class="fa fa-github"></i></li></a>
                            </ol>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- caixa -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h1 class="h1" id="menu">Diário</h1>
                        <br>
                        <div id="diario">
                        <?php
                        $i=0;
                        require_once("controle/php/conexao.php");
                        $con=new Conectar();
                        $N='N';
                       if(isset($_SESSION['id'])){
                        $select="SELECT * FROM timeline ORDER BY data DESC;";
                        $obj=$con->getCon()->query($select, PDO::FETCH_OBJ);
                       }else{
                        $select="SELECT * FROM timeline WHERE privado=? ORDER BY data DESC;";
                        $comand=$con->getCon()->prepare($select);
                        $comand->bindParam(1,$N);
                        $comand->execute();
                        $obj=$comand->fetchAll(PDO::FETCH_OBJ);
                        
                       }

                            foreach($obj as $linha){
                                $data=date('d/m/Y', strtotime($linha->data));
                                if(isset($linha->img)){
                                    echo "
                                        <div class=\"timeline\">
                                            <div class=\"row\">
                                                <div class=\"col-md-3 col-sm-3\">
                                                    <br>
                                                    <h5><b>{$data}</b></h5>
                                                </div>
                                                <div class=\"col-md-8 col-sm-8\">
                                                        <br>
                                                    <h2><b>{$linha->titulo}</b></h2>
                                                </div>
                                                <div class=\"col-md-1 col-sm-1 col-1\">
                                                    <h5><b>#{$linha->id}</b></h5>
                                                </div>
                                                <div class=\"col-md-5 col-sm-12\">
                                                    <img src=\"img/imagem.php?id={$linha->id}&type=timeline\" class=\"img-timeLine\">
                                                </div>
                                                <div class=\"col-md-7 col-sm-12\">
                                                    <p>
                                                        <b>
                                                            {$linha->texto}
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class=\"col-md-12 col-sm-12 footer\">
                                                        ";
                                                   echo "<div id='icones{$linha->id}'>";
                                                   if(isset($_SESSION['id'])){
                                                    echo "
                                                        <ol>
                                                            <li><i class=\"fa fa-pencil aparece\"></i></li>
                                                            <li data-toggle=\"modal\" data-target=\"#ModalFoto{$linha->id}\"><i class=\"fa fa-photo aparece\" ></i></li>
                                                        </ol>
                                                        ";
                                                    }
                                                   echo "</div>";
                                                      
                                        echo"        </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        ";
                                   }else{
                                    echo "
                                    <div class=\"timeline\">
                                        <div class=\"row\">
                                            <div class=\"col-md-3 col-sm-3\">
                                                <br>
                                                <h5><b>{$data}</b></h5>
                                            </div>
                                            <div class=\"col-md-8 col-sm-8\">
                                                <br>
                                                <h2><b>{$linha->titulo}</b></h2>
                                            </div>
                                            <div class=\"col-md-1 col-1 col-sm-1\">
                                            <h5><b>#{$linha->id}</b></h5>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12\">
                                            <hr>
                                                <p>
                                                    <b>
                                                       {$linha->texto}
                                                    </b>
                                                </p>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 footer\">";
                                            echo "<div id='icones{$linha->id}'>";
                                            if(isset($_SESSION['id'])){
                                             echo "
                                                 <ol>
                                                 <li data-toggle=\"modal\" data-target=\"#ModalEditar{$linha->id}\"><i class=\"fa fa-pencil aparece\"></i></li>
                                                     <li data-toggle=\"modal\" data-target=\"#ModalFoto{$linha->id}\"><i class=\"fa fa-photo aparece\" ></i></li>
                                                 </ol>
                                                 ";
                                             }
                                            echo "</div>";
                                    echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    ";
                                   }
                               echo "  <!-- modal -->
                               <div class=\"modal fade\" id=\"ModalFoto{$linha->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalFoto{$linha->id}Label\" aria-hidden=\"true\">
                                   <div class=\"modal-dialog\" role=\"document\">
                                       <div class=\"modal-content\">
                                       <div class=\"modal-header\">
                                           <h5 class=\"modal-title fonte h5\" style=\"font-size:30px;\" id=\"ModalFoto{$linha->id}Label\">Escolha uma foto para colar</h5>
                                           <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                           <span aria-hidden=\"true\"><b>X</b></span>
                                           </button>
                                       </div>
                                       <div class=\"modal-body\">
                                           <form action=\"controle/php/colarFoto.php?id={$linha->id}\" method=\"post\" enctype=\"multipart/form-data\">
                                           <center><label class=\"target-file \" for=\"foto{$linha->id}\" id=\"fileName{$linha->id}\"></label><center>
                                           <input type=\"file\" name=\"foto\" id=\"foto{$linha->id}\" class=\"file\">   
                                           <center><img id=\"img{$linha->id}\" width=\"200px\" height=\"200px\"></center>                                       
                                       </div>
                                       <div class=\"modal-footer\">
                                           <input type=\"submit\" value=\"Colar\" class=\"btn btn-primary\">
                                           </form>
                                           <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                                           <button class=\"btn btn-warning\">Descolar</button>
                                       </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- /modal -->";
                               date_default_timezone_set('America/Fortaleza');
                               $data=date('d/m/Y');
                               echo "  <!-- modal -->
                               <div class=\"modal fade\" id=\"ModalEditar{$linha->id}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalEditar{$linha->id}Label\" aria-hidden=\"true\">
                                   <div class=\"modal-dialog modal-lg\" role=\"document\">
                                       <div class=\"modal-content\">
                                       <div class=\"modal-header\">
                                           <h5 class=\"modal-title fonte h5\" style=\"font-size:30px;\" id=\"ModalEditar{$linha->id}Label\">Editar texto '{$linha->titulo}'</h5>
                                           <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                           <span aria-hidden=\"true\"><b>X</b></span>
                                           </button>
                                       </div>
                                       <div class=\"modal-body\">
                                           <form action=\"controle/php/editarTexto.php?id={$linha->id}\" method=\"post\">
                                           <div class=\"row\">
                                           <div class=\"col-md-3\">
                                                   <br>
                                                   <label for=\"data\"><b>Data</b></label>
                                                      
                                                       
                                                       <input type=\"date\" id=\"data\" name=\"data\" value=\"{$linha->data}\" placeholder=\"{$linha->data}\" class=\"form-control\">
                                               </div>
                                               <div class=\"col-md-3\">
                                                   <br>
                                                   <label for=\"titulo\"><b>Titulo</b></label>
                                                   <input type=\"text\" name=\"titulo\" class=\"form-control\" value=\"{$linha->titulo}\" id=\"titulo\" placeholder=\"{$linha->titulo}\" maxlength=\"26\" >
                                               </div>
                                               <div class=\"col-md-6\">
                                                   <div class=\"row\">
                                                       <div class=\"col-md-12\">
                                                           <h5><b>Todos Podem Ver?</b></h5>
                                                       </div>
                                                       <div class=\"col-md-3\">
                                                           <h5>Sim</h5>
                                                       </div>
                                                       <div class=\"col-md-3\">
                                                           <input type=\"radio\" name=\"privado\" class=\"form-control\" id=\"privado\" value=\"N\" required>
                                                       </div>
                                                   </div>    
                                                   <div class=\"row\">
                                                       <div class=\"col-md-3\">
                                                           <h5>Não</h5>
                                                       </div>
                                                       <div class=\"col-md-3\">
                                                       <input type=\"radio\" name=\"privado\" class=\"form-control\" id=\"publico\" value=\"S\" required> 
                                                       </div>
                                                   </div>
                                                   
                                               </div>
                                               <div class=\"col-md-12\">
                                                   <textarea name=\"texto\" class=\"txt-escreve form-control\" lang=\"pt-br\">{$linha->texto}</textarea>
                                               </div>
                                           </div>         
                                       </div>
                                       <div class=\"modal-footer\">
                                           <input type=\"submit\" value=\"Editar\" class=\"btn btn-primary\">
                                           </form>
                                           <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                                           <a href=\"controle/php/apagarTxt.php?id={$linha->id}\"><button class=\"btn btn-danger\">Excluir</button></a>
                                       </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- /modal -->";
                               echo "
                                   <script>
                                   var input{$linha->id}    = document.getElementById('foto{$linha->id}'),
                                   fileName{$linha->id}= document.getElementById('fileName{$linha->id}');
                                   input{$linha->id}.addEventListener('change', function(){
                                   fileName{$linha->id}.style.backgroundImage=\"url('img/file_upload.png')\";
                                     });
                                       $(function(){
                                           $('#foto{$linha->id}').change(function(){
                                               const file = $(this)[0].files[0]
                                               const fileReader = new FileReader()
                                                   
                                               fileReader.onloadend = function(){
                                                   $('#img{$linha->id}').attr('src',fileReader.result)
                                               }
                                               fileReader.readAsDataURL(file)
                                           })
                                       })
                           </script>
                           <script>
                           Muda(\"icones{$linha->id}\");
                            </script>
                               ";
                               
                            }
                       
                     
                    ?>
                            </div>
                            <!-- diario -->
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
     <!-- modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fonte h5" id="exampleModalLabel" style="font-size:50px;">Escreva sobre seu dia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="controle/php/processa-ajax.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-md-3">
                                    <br>
                                    <label for="data"><b>Data</b></label>
                                    <?php
                                        date_default_timezone_set('America/Fortaleza');
                                        $data=date('d/m/Y');
                                        echo "<input type=\"date\" id=\"data\" name=\"data\" value=\"{$data}\" placeholder=\"{$data}\" class=\"form-control\" required>";
                                    ?> 
                                </div>
                                <div class="col-md-3">
                                    <br>
                                    <label for="titulo"><b>Titulo</b></label>
                                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo" maxlength="26" required>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5><b>Todos Podem Ver?</b></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Sim</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="privado" class="form-control" id="privado" value="N" required>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5>Não</h5>
                                        </div>
                                        <div class="col-md-3">
                                        <input type="radio" name="privado" class="form-control" id="publico" value="S" required> 
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">
                                    <textarea name="texto" class="txt-escreve form-control" lang="pt-br">Escreva sobre o seu dia aqui...</textarea>
                                </div>
                            </div>
                           
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Escrever" class="btn btn-primary">
                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Apagar</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- /modal -->
</body>
<script src="controle/js/ajax.js"></script>
</html>