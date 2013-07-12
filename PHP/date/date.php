<?php

$today =getdate();

$mon = $today['mon'];  

function mes ($numero_mes)
{
    $vetor_meses_num=array (1 => "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
      "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
      
      $retorno_mes = $vetor_meses_num[$numero_mes];
      
      return $retorno_mes;    
}

print mes($mon);
          

print "<br />";

date_default_timezone_set('America/Araguaina');

print $hour= date("G:i"); // Bug!!!


?>