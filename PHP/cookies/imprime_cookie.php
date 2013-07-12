<?php
$apagar = $_GET['apagar'];

if($apagar=="Apagar")
{
    setcookie("test1");
    setcookie("test2");
}


echo "o valor do primeiro cookie é : ". $_COOKIE['test1'];
echo "<br /><br />";
echo "o valor do segundo cookie é : ". $_COOKIE['test2'];

?>

<form action="" method="get">

<input type="submit" name="apagar" value="Apagar" />

</form>
