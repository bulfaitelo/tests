<?php
$texto = "eu não sou besta pra tirar onda de herói";

echo substr($texto, 0, 16);  // eu não sou besta
echo "<br>\\n";
echo substr($texto, 11);     // besta pra tirar onda de herói
echo "<br>\\n";
echo substr($texto, 11, 9);  // besta pra
echo "<br>\\n";
echo substr($texto, -5);     // herói
echo "<br>\n";

$id_sub_categoria_texto_noticia = "and id_sub_categoria_texto = '5'";
echo $id_sub_categoria_texto_noticia;

$id_sub_categoria_texto_noticia = substr($id_sub_categoria_texto_noticia, 4);

echo $id_sub_categoria_texto_noticia;


echo "<br /><br />*********___________*************";

$textoo = "12345    101010";
echo "<br />".$textoo."<br />";
Echo substr_replace($textoo,"testeasdasdqweweqweqwe" ,8, 7);

//substr($textoo,8, 7)  "lalala";
echo "<br />";
echo $textoo;

echo "<br /><br />*********______SITE PHP_____*************<br />";

$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var<hr />\n";

/* Estes dois exemplos substituem tudo de $var com 'bob'. */
echo substr_replace($var, 'bob', 0) . "<br />\n";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

/* Insere 'bob' direto no começo de $var. */
echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

/* Estes dois exemplos substituem 'MNRPQR' em $var com 'bob'. */
echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

/* Deleta 'MNRPQR' de $var. */
echo substr_replace($var, '', 10, -1) . "<br />\n";

echo "<br /><br />*********______SITE PHP_____*************";

?>


