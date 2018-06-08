<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diário Virtual | Lucas</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="controle/js/ajax.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="cleavejs/dist/cleave.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="controle/css/estilo.css" />
    <script src="controle/js/app.js"></script>
</head>
<body>
    <div class="container fonte edit">
        <div class="row">
            <div class="col-md-12">  <h1 class="h1 fonte">My Incridible Life</h1>
                <hr></div>
            <div class="col-md-3 vertical">
                <ol>
                    <li data-toggle="modal" data-target="#exampleModal">Escrever <i class="fa fa-pencil"></i></li>
                    <li>Vida Pessoal<i class="fa fa-info"></i></li>
                    <li>Meu futuro <i class="fa fa-cloud"></i></li>
                    <a href="album.php"><li>Album de fotos <i class="fa fa-photo"></i></li></a>
                    <li>Comentar sobre <i class="fa fa-comments"></i></li>
                </ol>
            </div>
            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fonte h5" id="exampleModalLabel">Escreva sobre seu dia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><b>X</b></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="controle/php/processa-ajax.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-md-6">
                                    <br>
                                    <label for="data"><b>Data</b></label>
                                    <?php
                                        date_default_timezone_set('America/Fortaleza');
                                        $data=date('d/m/Y');
                                        echo "<input type=\"date\" id=\"data\" name=\"data\" value=\"{$data}\" placeholder=\"{$data}\" class=\"input\" required>";
                                    ?> 
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <label for=""><b>Titulo</b></label>
                                    <input type="text" name="titulo" class="input" placeholder="Titulo" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="texto" class="txt-escreve" lang="pt-br">Escreva sobre o seu dia aqui..</textarea>
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
            <script>
                        var cleave = new Cleave('#data', {
                            date: true,
                            datePattern: ['d', 'm', 'Y']
                        });
                    </script>
            <div class="col-md-9">
              
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <b>
                                Olá, meu nome é Lucas, tenho 17 anos de idade e comecei no curso de informática no ano de 2016,
                                entrei no curso de informática porque achei que dentre as opções que a escola oferecia era o que eu mais me indentificava.
                                Entrei pensando que ia aprender a usar facebook, criar imagens, usar o Photoscape, e quando começou as auals de informática básica, conversão de números binários
                                foi que eu fui perceber que não era nada no deu que eu imaginava, e depois começou Lógica de Programação e foi só sucesso.
                            </b>
                        </p>
                    </div>
                    <div class="col-md-6">
                       <div class="foto">
                            <img src="https://dlory.ch/clip.png" class="icon">
                            <img src="https://lh3.googleusercontent.com/ZXnbVHpjBKFKqbMXr5slDkTW9PPNohZJ0NN0w1MWxohhlA5mEfd04YouxWoeqmreF0_J9OgR_qTcT8qwGEYaopmbSxyfxj-HxHz_hNTgLyLTEaZOoM-4u-WlyMlL_RQWACYgpqOoGPLPxemw3SsSw8fQUWsIle_rzV3tIzZcJVmZ4-25v0iIcNDSiF1H2ZgWvYp8NzJEVNn1afY5P_2XJUZYTGlD063bUv4iPoxxbYjfKpWDfzA7zDIR6JIWb7C1UFfMAdgDskjaOZYdCGk6HS0FSa5AjWCmhxOcMbdfpTRi_jAG_aD9StEQJaLV8GEO9ZNrERESBC_xyJU1XM5yxO872FpE1lYZ_IxNgsh6_x90uJodM2tj_aYoznB4LqOCFFT_jaNszRN9le6YHlnhlERVjK9JOhlgevfk9tA_dUA8rfgVsOrTiUZAAdVLMh58q54S8oBEQsFnZ-pBh9--h3IM3qdEOmcAYOIIIOmc5wTn3mDEUuNoa381MqiLXvliys3ZhZwVG2VwIqXIZF3VoT-TyqyR1lDZpsrvofKrcON5sIO2FsCBp7s5asgJc288lwSrQ8jgOkmEyKqEd_fZX8XT7z6xxBGxVRXj1fc=w394-h641-no" alt="Lucas2017" class="img">
                       </div>
                    </div>
                </div>
                <br>
                <h1 class="h1 fonte">Time Line</h1>
                <hr>
                <br>
                    <?php
                        require_once("controle/php/conexao.php");
                        $con=new Conectar();
                        $select="SELECT * FROM timeline ORDER BY data DESC;";
                        $comand=$con->getCon()->query($select,PDO::FETCH_OBJ);
                        foreach($comand as $linha){
                            if(isset($linha->img)){
                                if($linha->position=="E"){
                                            echo "
                                                <div class=\"timeline\">

                                                <img src=\"http://4.bp.blogspot.com/-0yPkG3xT4Ec/TuTzpr5v4mI/AAAAAAAADk0/fMSicn9FRME/s1600/tape+1.png\" class=\"adesivo\">
                                                <div class=\"row\">
                                                <div class=\"col-md-3\">
                                                <br>
                                                <h5><b>{$linha->data}</b></h5>
                                                </div>
                                                <div class=\"col-md-9\">
                                                <br>
                                                <h3><b>{$linha->titulo}</b></h3>
                                                </div>
                                                <div class=\"col-md-5\">
                                                <div class=\"foto\">
                                                <img src=\"https://dlory.ch/clip.png\" class=\"icon\">
                                                    <img src=\"img/imagem.php?id={$linha->id}\" class=\"img-time-line\">
                                                </div>
                                                </div>
                                                <div class=\"col-md-7\">
                                                <p>
                                                    <b>
                                                        {$linha->texto}
                                                    </b>
                                                </p>
                                                </div>
                                                <div class=\"col-md-12 footer\">
                                                <ol>
                                                    <li><i class=\"fa fa-pencil aparece\"></i></li>
                                                    <li data-toggle=\"modal\" data-target=\"#ModalFoto{$linha->id}\"><i class=\"fa fa-photo aparece\" ></i></li>
                                                </ol>
                                                </div>
                                                </div>
                                                </div>
                                                <br>
                                                <br>
                                                ";
                                            }else {
                                                echo "
                                                <div class=\"timeline\">

                                                <img src=\"http://4.bp.blogspot.com/-0yPkG3xT4Ec/TuTzpr5v4mI/AAAAAAAADk0/fMSicn9FRME/s1600/tape+1.png\" class=\"adesivo\">
                                                <div class=\"row\">
                                                <div class=\"col-md-3\">
                                                <br>
                                                <h5><b>{$linha->data}</b></h5>
                                                </div>
                                                <div class=\"col-md-9\">
                                                <br>
                                                <h3><b>{$linha->titulo}</b></h3>
                                                </div>

                                                <div class=\"col-md-7\">
                                                <p>
                                                    <b>
                                                        {$linha->texto}
                                                    </b>
                                                </p>
                                                </div>
                                                <div class=\"col-md-5\">
                                                <div class=\"foto\">
                                                <img src=\"https://dlory.ch/clip.png\" class=\"icon\">
                                                    <img src=\"img/imagem.php?id={$linha->id}\" class=\"img-time-line\">
                                                </div>
                                                </div>
                                                <div class=\"col-md-12 footer\">
                                                <ol>
                                                    <li><i class=\"fa fa-pencil aparece es\"></i></li>
                                                    <li data-toggle=\"modal\" data-target=\"#ModalFoto{$linha->id}\" ><i class=\"fa fa-photo aparece es\" ></i></li>
                                                </ol>
                                                </div>
                                                </div>
                                                </div>
                                                <br>
                                                <br>
                                                ";
                                            }	
                               }else{
                                echo "
                                <div class=\"timeline\">
                                    <div class=\"adesivo\"></div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <br>
                                            <h5><b>{$linha->data}</b></h5>
                                        </div>
                                        <div class=\"col-md-9\">
                                            <br>
                                            <h3><b>{$linha->titulo}</b></h3>
                                        </div>
                                        <div class=\"col-md-12\">
                                        <hr class=\"red\">
                                            <p>
                                                <b>
                                                   {$linha->texto}
                                                </b>
                                            </p>
                                        </div>
                                        <div class=\"col-md-12 footer\">
                                            <ol>
                                                <li><i class=\"fa fa-pencil aparece\"></i></li>
                                                <li data-toggle=\"modal\" data-target=\"#ModalFoto{$linha->id}\"><i class=\"fa fa-photo aparece\" ></i></li>
                                            </ol>
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
                                       <h5 class=\"modal-title fonte h5\" id=\"ModalFoto{$linha->id}Label\">Escolha uma foto para colar</h5>
                                       <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                       <span aria-hidden=\"true\"><b>X</b></span>
                                       </button>
                                   </div>
                                   <div class=\"modal-body\">
                                       <form action=\"controle/php/colarFoto.php?id={$linha->id}\" method=\"post\" enctype=\"multipart/form-data\">
                                       <label class=\"target-file\" for=\"foto{$linha->id}\">Escolher a foto</label> 
                                       <input type=\"file\" name=\"foto\" id=\"foto{$linha->id}\" class=\"file\">                                          
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
                        }
                     
                    ?>
            </div>
        </div>
    </div>
</body>
<?php  
     if(isset($_SESSION['ex'])){
        echo "
            <script>
                swal({
                    title: \"Opsss...!!!\",
                    text: \"Aconteceu um erro, mas não se preocupe, meu dono ja vai concerta-lo!\",
                    icon: \"error\",
                    button: \"Tudo Bem!\",
                });
            </script>
        ";
        unset($_SESSION['ex']);
    }
    if(isset($_SESSION['extr'])){
       if($_SESSION['extr']=='notFound'){
        echo "
        <script>
            swal({
                title: \"INFELIZMENTE NÃO FOI POSSÍVEL COLAR A IMAGEM\",
                text: \"Não encontrei nenhuma imagem aqui!tente novamente\",
                icon: \"error\",
                button: \"Tudo Bem!\",
            });
        </script>
    ";
       }else if($_SESSION['extr']=='notPermision'){
        echo "
        <script>
            swal({
                title: \"ARQUIVO NÃO PERMITIDO\",
                text: \"O arquivo enviado não é permitido, é permitido apenas arquivos: JPG, JPEG, PNG\",
                icon: \"error\",
                button: \"Tudo Bem!\",
            });
        </script>
    ";
       }
        unset($_SESSION['extr']);
    }
?>
</html>