<?php
//Nela temos o ano atual no servidor. 
function ANO(){ 
 $numero_ano = date("Y"); 
 return $numero_ano; 
} 
echo "//Nela temos o ano atual no servidor.<br />";
echo ano()."<br /><br />";
//Nessa função retornamos com a quantidade de dias no mes atual, 30, 31 ou fevereiro 29 ou 28 
function NUMERODIASMES(){ 
     $dias_mes = date("t"); 
     return $dias_mes; 
}
Echo "Nessa função retornamos com a quantidade de dias no mes atual, 30, 31 ou fevereiro 29 ou 28.<br />";
echo NUMERODIASMES()."<br /><br />";





function diasemana($data) {
  $ano =  substr("$data", 0, 4);
	$mes =  substr("$data", 5, -3);
	$dia =  substr("$data", 8, 9);

	$diasemana = date("w", mktime(0,0,0,$mes,$dia,$ano) );

	switch($diasemana) {
		case"0": $diasemana = "Domingo";	   break;
		case"1": $diasemana = "Segunda-Feira"; break;
		case"2": $diasemana = "Terça-Feira";   break;
		case"3": $diasemana = "Quarta-Feira";  break;
		case"4": $diasemana = "Quinta-Feira";  break;
		case"5": $diasemana = "Sexta-Feira";   break;
		case"6": $diasemana = "Sábado";		break;
	}

	echo "$diasemana";
}

//Exemplo de uso
diasemana("2013-04-15");

echo date("Y-m-d");

?>
