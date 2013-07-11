<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv='content-type' content='text/html' />
	<meta name='author' content='BULFAITELO' />
    <script src='estrelas.js'></script>
	<title>Untitled 2</title>
    
    <style>
    elemento {
}
.publicacoes .article-content .article-item .stars-container {
    float: left;
    margin: 5px 0px;
}
.stars-container {
    display: block;
    width: 104px;
    height: 20px;
    background: url('estrelas.png') no-repeat scroll 0% 0% transparent;
}
.content {
    color: rgb(47, 47, 47);
    font-size: 14px;
}
body {
    font-family: 'Lato',Arial,Verdana,sans-serif;
}
body {
    font: 13px/1.5 Helvetica,Arial,'Liberation Sans',FreeSans,sans-serif;
}
html {
    font-family: sans-serif;
}

elemento {}.stars-container .stars-value {display: block;height: 20px;background: url('estrelas.png') no-repeat scroll 0px -20px transparent;}.content {color: rgb(47, 47, 47);font-size: 14px;}body {font-family: 'Lato',Arial,Verdana,sans-serif;}body {font: 13px/1.5 Helvetica,Arial,'Liberation Sans',FreeSans,sans-serif;}html {font-family: sans-serif;}
    
</style>

<script language='JavaScript' type='text/javascript'>

</script>
    
    
</head>

<body>
<form action='' method='post'>

<input id='valor' type='hidden' value='50' name='nota' />

<span  class='stars-container' onclick='muda(event);'>
    <span id='estrela' class='stars-value' style='width:50%'  >
    </span>
</span>
<input type='submit' />
</form>



</body>
</html>

";

