<?php

$text = file_get_contents("lendo_txt_meu_test.txt");

print $text ;
print "<br /><br /><br />";
//com explode 

$vetor_texo = explode("\n", $text);

foreach ($vetor_texo as $chave)
{
    if($chave !="")
    {
        print $chave . "<br />";
    }
    
}

print "<pre>";
print htmlspecialchars(print_r($vetor_texo));
print "</pre>";

?>