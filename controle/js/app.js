    function Logar(){
            var value=prompt("Digite sua senha");
            if(value=="senha"){
                var local=document.getElementById('div');
                requisitarArquivo('controle/php/log.php?senha='+value, local);
            }else{
                var p=  document.getElementById("msg");
                p.innerHTML="Você pode tentar depois";
                   setTimeout(apagar,5000);
                   function apagar(){
                       p.innerHTML="";
                   }
            }
        }
    function Sair(){
            var local=document.getElementById('div');
            requisitarArquivo('controle/php/sair.php', local);
    }
    var cleave = new Cleave('#data', {
        date: true,
        datePattern: ['d', 'm', 'Y']
    });

  
    
