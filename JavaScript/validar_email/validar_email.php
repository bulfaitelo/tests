<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>Untitled 2</title>
    <script>
    function validaForm1(id)
    {
      //validar email_pessoal(verificao de endereco eletrônico)
          parte1 = document.inscricao.email_pessoal.value.indexOf("@");
          parte2 = document.inscricao.email_pessoal.value.indexOf(".");
          parte3 = document.inscricao.email_pessoal.value.length;
          if (!(parte1 >= 3 && parte2 >= 1 && parte3 >= 9)) {
                    alert ("validar mail 1");
                    document.inscricao.email_pessoal.focus();
                    return false;
          }

         //validar email(verificao de endereco eletrônico)
          parte12 = document.inscricao.email_pessoal2.value.indexOf("@");
          parte22 = document.inscricao.email_pessoal2.value.indexOf(".");
          parte32 = document.inscricao.email_pessoal2.value.length;
          if (!(parte12 >= 3 && parte22 >= 1 && parte32 >= 9)) {
                    alert (" validar mail 2");
                    document.inscricao.email_pessoal2.focus();
                    return false;
          }
          
         email = document.inscricao.email_pessoal2.value;
         email2 = document.inscricao.email_pessoal2.value;
         if (email != email2)
         {
            alert ("diferentes");
         }
          
    }
    </script>
    
    
    
</head>

<body>

<form name='inscricao' method='post' onSubmit="return validaForm1()">

<input id="personal-email" class="width-90" type="text" name="email_pessoal" value="">

<input id="personal-email-confirm" class="width-95" type="text" name="email_pessoal2" value="">

<input type="submit" name="Enviar" />

</form>
</body>
</html>