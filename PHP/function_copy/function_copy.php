
<?php
$file = 'function_copy.php';
$newfile = './test/function_copy.php';

if (!copy($file, $newfile)) 
{
    echo "falha ao copiar $file...\n";
}

?>
