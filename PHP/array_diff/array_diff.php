<?php

echo "test 1 php.net<br />";

$array1 = array("a" => "verde", "vermelho", "azul", "vermelho");
$array2 = array("b" => "verde", "amarelo", "vermelho");
$result = array_diff($array1, $array2);
var_dump($result);

echo "<br />";

$array3 = array("a" => "verde", "vermelho", "azul", "vermelho");
var_dump($array3);


$result1 = array_diff($array3, "vermelho");


?>
