<?php

$texto10 = "thiago";
if(strlen($texto10)==10)
{
    print $texto10;
}
print $texto10;



while(strlen($texto10)<10)
{
    $texto10 = "0".$texto10;
}
echo "<br /><br />";

echo $texto10;

echo $mes_referencia = "1";

$mes_referencia = tratar_mes_referencia($mes_referencia);

function tratar_mes_referencia($mes_referencia)
{
    if(1==strlen($mes_referencia))
    {
        $mes_referencia = "0".$mes_referencia;
    }
    return $mes_referencia;  
}

echo $mes_referencia;

?>

