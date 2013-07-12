<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MESMERiZE" />

	<title>tabela01.php</title>
</head>

<body>

    <table border="1">
    <tr>
	<?php
    
    $coluna  = 4;
    $linha   = 2;
    $cont    = 0;

    for($l=0;$l<$linha;$l++)
    {
        for($c=0;$c<$coluna;$c++)
        {                   
                $cont = ($cont +1 );            
                if ($cont % 2 ==0 )
                {                
                  echo "<th>" . ($cont) . "</th>";
                }
        }
        if ($coluna = $c)
        {
         echo"</tr>";                       
        }
    }

	?>
    </table>
    
    
    
    <table >
<tbody>
    <tr>
	<td>
    <strong>Pontos positivos:</strong>
    </td>
    <td>
    <strong>Pontos negativos:</strong>
    </td>
    </tr>
    <td>
    
Praticidade,<br />

Peso,<br />

Sensibilidade,<br />

Precisão.<br />
    </td>
    <td>
    Cabo USB muito curto,<br />

Essa versão a caneta não tem "borracha",<br />

    </td>
    </tr>
</tbody>
</table>
</body>




