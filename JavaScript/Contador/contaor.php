<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>Untitled 1</title>
</head>

<body>
<script>
function conta()
        {
        document.formulario.txtQtde.value = document.formulario.txtTexto.value.length;
        }
</script>
<form name="formulario">
Texto:<br>
<textarea name="txtTexto" cols="30" rows="10" onkeyup="javascript:conta()"></textarea><br><br>

Qtde de caracteres: <input type="text" name="txtQtde" value="0">
</form>



</body>
</html>