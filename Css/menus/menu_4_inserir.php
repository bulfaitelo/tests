<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>Untitled 5</title>
</head>

<body>
    <form action="menu_4_inserir.php" method="post">
    <label>Nome:</label>
    <input type="text" name="nome" value="" />
    <br />
    <label>Link: </label>
    <input type="text" name="link" value="" />
    <br /><br />
    <input type="submit" name="enviar" />   
    
    </form>


<?php
    
    $nome = $_POST['nome'];
    $link = $_POST['link'];
    
    
    echo $nome; echo " "; echo $link;  
?>


<?php
$login = "root"; 
$senha ="susepro"; 
$host = "localhost";



$conectar = mysql_connect($host,$login,$senha) or die *("deu merda ");

$ok = mysql_select_db("thiago", $conectar);




$inserir = "insert into menu set nome='$nome', link='$link'";

if (($nome != null) && ($link != null))
{

    mysql_query($inserir); 
}



$sel_tab = "select*from menu;";

$qry_exec = mysql_query($sel_tab);

$com_sql = mysql_num_rows($qry_exec);

    echo "<table border='1'>";
    echo "<tr><td>ID</td><td>Nome</td><td>Link</td>";
while ($qry_result = mysql_fetch_array($qry_exec))

    {
        $id = $qry_result["id"];
        $nome = $qry_result["nome"];
        $link = $qry_result["link"];
        
  //      echo $id; echo " "; echo $nome; echo " "; echo $link; echo "<br /> "; 
        
        echo "<tr><td> $id </td><td> $nome </td><td> $link </td></tr>  ";
    
    
    
    }
     echo "</table>";   

?>

</body>
</html>