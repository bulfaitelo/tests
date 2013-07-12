<?php
$array_numero = array(0 => '0', 1 => array( 1 => "array 1", 2 => "array 2" ) , 2 => '2', 3 => '3');
$array_numero1 = array(0 => '0');
$key = array_search('1', $array_numero); // $key = 2;
echo $key."<br />";
$key = array_search('3', $array_numero);   // $key = 1;
echo $key."<br />";


$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
echo $key."<br />";
$key = array_search('red', $array);   // $key = 1;

echo $key."<br />";


echo "<br />_______________________________________<br /><br />";

if(array_search('1', $array_numero))
{
    echo "o vetor 1 é igual";
}

echo count($array_numero1);

print_r($array_numero);
echo "<br />_______________________________________<br /><br />";

?>