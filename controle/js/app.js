    function Logar(){
            var value=prompt("Digite sua senha");
            if(value!=null){
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
   function Muda(id){
    var change=document.getElementById('div');
   change.onclick=function(){
        local=document.getElementById(id);
        local2=document.getElementById('diario');
        requisitarArquivo('includes/diario.php', local2);
        requisitarArquivo('includes/icons.php?id='+id, local);
        }  
    }
        
    var cleave = new Cleave('#data', {
        date: true,
        datePattern: ['d', 'm', 'Y']
    });
    function aviso(){
        var campo=document.getElementById('campoNome');
            document.getElementById('aviso').style.display='block';
        campo.onblur=function(){
            document.getElementById('aviso').style.display='none';
        }
    }
    function place(){
            var campo=document.getElementById('comentario');
            campo.innerHTML='';
            
        }

    
