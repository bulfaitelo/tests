<?php
function tratar_num_termo_vistoria ($string,$regiao_bc_referencia) // tenho que ver como ele vai recebor os valores RJ, MA e BL,
                                                                    // eu coloquei o mesmo valor do get que vem do relatorio.php
{
    $string = ltrim($string, "0");
    
    if($regiao_bc_referencia=="1")
    {
        $string = "RJ".$string;
    }
    
    if($regiao_bc_referencia=="2")
    {
        $string = "PA".$string;
    }
    
    if($regiao_bc_referencia=="3")
    {
        $string = "MA".$string;        
    }
    
    while(strlen($string)<10)
    {
        $string = "0".$string;
    }
    
    if($string=="0000000000")
    {
        $string ="";
    }
    
    return $string;
}    

print $test = tratar_num_termo_vistoria("0149A/06","3");



?>