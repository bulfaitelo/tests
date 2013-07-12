<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MESMERiZE" />

	<title>tabela02.php</title>
</head>

<body>

    <table border="1">
    <tr>
	<?php


    $coluna  = 10;
    $linha   = 75;
    $cont    = 0;

    for($l=0;$l<$linha;$l++)
    {
        for($c=0;$c<$coluna;$c++)
        {              

                $cont = ($cont +1 );
            
            if ($cont % 2 ==0 )
            {
                 $bgcolor = "#6de99c";
               echo "<th bgcolor=$bgcolor>" . ($cont) . "</th>\n";
            }
            else
            {
                $bgcolor = "#4798f4";
                echo "<th bgcolor=$bgcolor>" . ($cont) . "</th>\n";  
            }
 
         }
         if ($coluna = $c)
         {
            echo"</tr>";                       
         }

    }
	?> 
    </table>
</body>
