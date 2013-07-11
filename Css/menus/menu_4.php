<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>menu em php "dinanico"</title>
        <style>

    .menuhorizontal {
        margin: auto;
        padding: 0;
        width: auto;
        height: 30px;
    }
    
    .menuhorizontal ul {
        list-style: none;
    }
    
     .menuhorizontal li {
        display: inline;
        float: left;
        padding:  0px;
        margin:  0;
        width:80px;
        border-left: #666666 thin solid;        
    }
    
     .menuhorizontal a{
        display: block;
        text-decoration: none;
        padding:  6px;
        background-color: #cccccc;
        font-family: verdana, arial, helvetia, sans-serif;
        font-size: 14px;
        font-weight: bold;
     }
 
     .menuhorizontal :hover{
        background-color: #eeeeee;
        text-decoration: none;
        color: #ffffff;
     } 
    
     .menuhorizontal li.btnesquerdo {
        border: none;
    }
    </style>
    
    
</head>
<body>
<?php
$login = "root";
$senha = "susepro";
$host = "localhost";

$conectar = mysql_connect($host,$login,$senha) or die ("deu alguma merda pra cnetctar ao DB");

$ok = mysql_select_db("thiago",$conectar);

$sel_tab = "select*from menu;";

$qry_exec = mysql_query($sel_tab);

$com_sql = mysql_num_rows($qry_exec);
    
    echo "<ul class='menuhorizontal'>";
while ($qry_result = mysql_fetch_array($qry_exec))

    {
        $id = $qry_result["id"];
        $nome = $qry_result["nome"];
        $link = $qry_result["link"];
        
      //  echo $id; echo " "; echo $nome; echo " "; echo $link; echo "<br /> "; 
       echo "<li><a href='$link'>$nome</a></li>";
    }
    echo "</ul>";
?>

    
  



</body>
</html>