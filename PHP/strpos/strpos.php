
<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note o uso de ===.  Simples == n�o funcionaria como esperado
// por causa da posi��o de 'a' � 0 (primeiro) caractere.
if ($pos === false) {
    echo "A string '$findme' n�o foi encontrada na string '$mystring'";
} else {
    echo "A string '$findme' foi encontrada na string '$mystring'";
    echo " e existe na posi��o $pos";
}

?>
