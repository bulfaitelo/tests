<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>Untitled 1</title>
</head>

<body>

<?php

$test = $_POST['categoria'];


echo "$test";



?>



<form method="post" action='select_submit.php' method="get" >
<select name="categoria" onchange='this.form.submit()' >
  <option selected>Selecione</option>
  <option>-------------</option>
  <option value="1">test 1</option> 
  <option value="2">test 2</option>
  <option value="3">test 3</option> 
  <option value="4">test 4</option>
  <option value="5">test 5</option> 
  <option value="6">test 6</option>
  </select>
</form>


</body>
</html>