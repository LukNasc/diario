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
            <div class="col-md-12">
                <h1 class="h1 fonte">Album de Fotografías</h1>
                <hr>
            </div>
            <div class="col-md-3 vertical">
                <ol>
                    <a href="index.php"><li>Voltar <i class="fa fa-arrow_left"></i></li></a>
                    <li>Vida Pessoal<i class="fa fa-info"></i></li>
                    <li>Meu futuro <i class="fa fa-cloud"></i></li>
                    <a href="album.php"><li class="selecionado">Album de fotos <i class="fa fa-photo"></i></li></a>
                    <li>Comentar sobre <i class="fa fa-comments"></i></li>
                </ol>
            </div>
       </div>
    </div>
</body>
</html>