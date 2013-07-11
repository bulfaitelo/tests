<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>Untitled 4</title>
</head>

<body>
<script>


function validar_pt()
                {
                    if(document.form.nome_passageiro.value=="")
                    {
                        alert("O campo Nome é obrigatório. Favor preencher.");
                        document.form.nome_passageiro.focus();
                        return false;
                    }
                }

</script>
<form method="post" name="form" onsubmit="validar_pt()">

  
  <input type=text name='nome_passageiro' style='width:250px;' value=''> </td>

<input type="submit" />



</form>

<script>
function validar_pt1 ()
{
    if(document.form1.nome_completo.value=="")
    {
         alert ("O campo Nome é obrigatório. Favor preencher.");
         document.inscricao.nome_completo.focus();
         return false;
    }
}


</script>                      
<form method="post" name="form1" onsubmit="  validar_pt1()">
                                
  <input type='text' value='' name=nome_completo style='width:167px;' maxlenght='350'>
<input type="text" name='nome'/>

<input type="submit" />

</form>


</body>
</html>