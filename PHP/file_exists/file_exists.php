<?php

for($pg=0;$pg<=30;$pg++) /** aqui eu tenho que alterar os valores caso seja necessarios mais tarde **/
{    
    if(file_exists("file_$pg.php"))
    {
        print "<strong>";
        require("file_$pg.php");
        print "</strong>";
    }    
}


/**
 * tinha feito para colocar no ANTC
 * 
for($pg=0;$pg<=30;$pg++) /** aqui eu tenho que alterar os valores caso seja necessarios mais tarde 
{    
    if(file_exists("noticias/noticia$pg.php"))
    {
        if($secao=="noticia$pg")
        {
            require("noticias/noticia$pg.php");
        }

    }    
}

**/

?>
