<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="BULFAITELO" />

	<title>mudar caracteres especiais</title>
</head>

<body>
        <form action="char_esp.php" method="post">
        <input type="text" name="nome" />
        <input  type="submit" name="enviar" value="enviar"/>


</form>
<?php


    $nome =$_POST['nome'];  
           
    
  function trataTexto($var)
   {

    	$var = strtoupper($var);
    	
    	$var = ereg_replace("[��������]","A",$var);	
    	$var = ereg_replace("[������]","E",$var);	
    	$var = ereg_replace("[���������]","O",$var);	
    	$var = ereg_replace("[������]","U",$var);	
    	$var = str_replace("�","C,",$var);
        $var = ereg_replace("[������]","I", $var);
        $var = ereg_replace("[_-]", " ", $var);
    	
    	return $var;
    }


echo trataTexto($nome);  
echo "<br/><br/>";
echo $nome;


    
    
?>



</body>
</html>