<ol class="fixed ol">
    <a href="index.php"><li>Home<i class="fa fa-home"></i></li></a>
    <li>Vida Pessoal<i class="fa fa-info"></i></li>
    <a href="future.php?pagina=future"><li>Meu futuro <i class="fa fa-cloud"></i></li></a>
    <a href="album.php?pagina=album"><li>Album de fotos <i class="fa fa-photo"></i></li></a>
    <li>Comentar sobre <i class="fa fa-comments"></i></li>
   
    <div id='div'>
    <?php 
       if(isset($_SESSION['id'])){
            if(!isset($_GET['pagina'])){
                echo "<li name=\"INDEX\" data-toggle=\"modal\" data-target=\"#exampleModal\">Escrever <i class=\"fa fa-pencil\"></i></li>";
            }
            echo "<li onclick='Sair()' name=\"SAIR DA INDEX\" id='sair'>Sair <i class=\"fa fa-sign-out\"></i></li>";
        }else{
            echo "<li onclick='Logar()' name=\"ENTRAR DA INDEX\" id='log'>Indentifique-se <i class=\"fa fa-address-card\"></i></li>";
        }
    ?>
    </div>
    <p id="msg"></p>
    <br>
    <div id="relogio"></div>
    <h5 class="data" lang='pt-br'>
    <?php 
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Fortaleza');
    echo strftime('%a, %d de %B de %Y', strtotime('today'));
  ?>
    </h5>
    <script>
          var intervalo = setInterval(relogio, 1000);
        function relogio(){
            var data=new Date();
            var time=data.toLocaleTimeString();
            document.getElementById("relogio").innerHTML=time;
        }
    </script>
</ol>
