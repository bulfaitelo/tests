<?php
echo $texto = 'ESTA � UMA FRASE COM ACENTUA��O<br />';
 
echo strtolower( $texto )."<br />"; // escreve: 'esta ?? uma frase com acentua????o'
echo mb_strtolower( $texto, 'UTF-8' ); // escreve: 'esta � uma frase com acentua��o'


?>