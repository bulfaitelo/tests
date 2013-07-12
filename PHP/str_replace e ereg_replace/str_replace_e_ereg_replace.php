<?php

function trataTxt($var) {

	$var = strtolower($var);
	
	$var = ereg_replace("[����]","a",$var);	
	$var = ereg_replace("[���]","e",$var);	
	$var = ereg_replace("[�����]","o",$var);	
	$var = ereg_replace("[���]","u",$var);	
	$var = str_replace("�","c",$var);
	
	return $var;
}

echo "Texto com acento:" . "� � � � �<br />";
echo "<br>";
echo "Texto sem acento:" . trataTxt("� � � � �");

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

