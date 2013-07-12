<?php
echo $texto = 'ESTA É UMA FRASE COM ACENTUAÇÃO<br />';
 
echo strtolower( $texto )."<br />"; // escreve: 'esta ?? uma frase com acentua????o'
echo mb_strtolower( $texto, 'UTF-8' ); // escreve: 'esta é uma frase com acentuação'


?>