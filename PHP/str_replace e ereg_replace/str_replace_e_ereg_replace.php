<?php

function trataTxt($var) {

	$var = strtolower($var);
	
	$var = ereg_replace("[áàâãª]","a",$var);	
	$var = ereg_replace("[éèê]","e",$var);	
	$var = ereg_replace("[óòôõº]","o",$var);	
	$var = ereg_replace("[úùû]","u",$var);	
	$var = str_replace("ç","c",$var);
	
	return $var;
}

echo "Texto com acento:" . "á é í ó ú<br />";
echo "<br>";
echo "Texto sem acento:" . trataTxt("á é í ó ú");

?>



<?php


function tratar_licenca_rap ($string)
{
    $string= ereg_replace("[ -]","",$string);
    
    while(strlen($string)<10)
    {
        $string = "0".$string;
    }
    
    return $string;
}
$texo = "<br /> S - A2037A/97";print "<br />sem tratamento";print "$texo";print "<br />com tratamento";print tratar_licenca_rap($texo);print "<br />";
?>



<?php

print tratar_licenca_rap("S - A003/11");

?>

