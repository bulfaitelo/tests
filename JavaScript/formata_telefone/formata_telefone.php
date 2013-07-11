<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>formata telefone </title>
    
    <!-- quando estava com o <script type='Javascript'> não finconava tenho que ver o porquer disso -->
    <script > 
function formatTelefone(element, e){
  if (e.keyCode != 8){
    length = element.value.length;
    if (length == 2){
      if (element.value.charAt(0)!="(")
        element.value = "(" + element.value + ")";
    }
    if (length == 3)
      if (element.value.charAt(0)=="(")
        element.value += ")";
    if (length == 8)
      element.value += "-";
  }
}
</script>
</head>

<body>
<label>Telefone</label><br />
        <input type='text' size=20 name='telefone' id='telefone' maxlength=13 onkeydown="formatTelefone(this, event)" tabindex="9" />


</body>
</html>