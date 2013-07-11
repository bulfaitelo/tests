<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>Untitled 1</title>
    
    
    <script >
    
    function aviso_box ()
    {
        decisao = confirm("ok te redireciona para outra pagina cancelar não hehe\n test");
        if (decisao){
          
          location.href='ok.php?ok= valor do get';
          
          //  alert ("Você clicou no botão OK,\n"+
            //           "porque foi retornado o valor: "+decisao);
        } else {
            alert ("Você clicou no botão CANCELAR,\n"+
                       "porque foi retornado o valor: "+decisao);
        }
        
    }


    </script>
</head>

<body>

<input  type="button" value="test" onclick="aviso_box()"/>

</body>
</html>