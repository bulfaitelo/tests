<?php

$explode_test ="eu tenho um carro azul";
$explode = explode(' ', $explode_test);

print "<pre>";
htmlspecialchars(print_r($explode));
print "</pre>";

print $explode[0];
print " ";
print $explode[1];
print " ";
print $explode[2];
print " ";
print $explode[3];
print " ";
print $explode[4];



$tesxt_2 = "image/jpeg";

$saida_text_2 = explode('/', $tesxt_2);


print_r($saida_text_2);


?>