<?php

$array['test']= "abcdef";
$array['test1'] = "  abcd";

echo $array['test']['0'];
echo $array['test1']['0'];
echo "<br />";

if($array['test'][0]!= " ")
{
    echo"<br />";
    echo " a arrau test e diferente de espaço";
}
else
{
    echo "<br />";
    echo "deu merda...";
}


if($array['test1'][0]!= " ")
{
    echo"<br />";
    echo " a arrau test e diferente de espaço";
}
else
{
    echo "<br />";
    echo "deu merda...";
}




?>