<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MESMERiZE" />

	<title>tabela03.php</title>
</head>

<body>

    <table cellpadding="0" cellspacing="0" border="0">
    <tr>
    <td>
    <form action="tabela03.php" method="post" enctype="multipart/form-data">
    <table cellpadding="0" cellspacing="0" border="0">
    <tr>
    <td>Numero Inicial: </td>
    <td><input type="text" name="x" id="x" /></td> <!-- baseado no id -->
    </tr>
    <td>Linha:</td>
    <td><input type="text" name="linha" id="linha" /></td> <!-- baseado no id -->
    </tr>
    <tr>
    <td>Coluna:</td>
    <td><input type="text" name="coluna" id="coluna" /></td> <!-- baseado no id -->
    </tr>

        <td><input type="submit" value="Enviar" /></td>

    </tr>
    </table>
    </form>
    </td>
    </tr>
    </table>

    <table border="1">
    <tr>
	<?php

  //  if ($_POST) 
 //   {
    $x = $_POST['x'];
    $linha = $_POST['linha'];
    $coluna = $_POST['coluna'];
    

    
    echo ("<b>O valor digitado foi: ".$_POST['x']."<br><br>");
    echo ("<b>A quantidade de linhas foi: ".$_POST['linha']."<br><br>");
    echo ("<b>A quantidade de colunas foi: ".$_POST['coluna']."<br><br>");    
  //  }

  //  $coluna  = 10;
   // $linha   = 75;
    $cont    = 0;
    $d       = 1;
   // $x       = 0; //valor definido pelo usuario


    for($l=0;$l<$linha;$l++)
    {
        for($c=0;$c<$coluna;$c++)
        {              
              //coluna 
            $cont = ($cont +1 );

            if ($cont % 2 ==0 )
            {
                if (($cont == 200)&&($d ==1))
                {

                     $bgcolor ="#a00000";       
                     echo "<th bgcolor=$bgcolor> ! </th>";  
                    // echo "<FONT FACE='Verdana' COLOR='#0000AA'>Fonte Verdfsdfsdfdana azul</FONT>";                           
                     $d = 0;
                     $cont = $cont -1;
                     $x     = $x -1;
                } 
                else  
                {
                    $bgcolor = "#6de99c";
                    echo "<th bgcolor=$bgcolor>" . ($x) . "</th>";
                }
            }
            else
            {
                if (($cont == 200)&&($d ==1))
                {
        
                     $bgcolor = "#4798f4";       
                     echo "<th bgcolor=$bgcolor> ! </th>\n";
                     $d = 0;
                     $cont = $cont -1;
                                     $x     = $x -1;
                 } 
                 else  
                 {
                      $bgcolor = "#4798f4";
                      echo "<th bgcolor=$bgcolor>" . ($x) . "</th>\n";          
                 }
            }
            $x    = ($x    +1) ;            
        }
             if ($coluna = $c)
             {
                    echo"</tr>";                       
             }
    }
    if (($coluna == 0) || ($linha == 0)){ 
        
        echo "<h1>deixou de colocar um valor em Coluna ou linha";
    }

	?>
    
    
    
    
    </table>
</body>
