<?

echo "Here you can see what files were processed and what file information you can get from XUpload<br><br>";
if($_GET){$FF=$_GET;} else {$FF=$_POST;}

foreach($FF as $key => $value)
{
   if(!is_array($value)){ print "$key => $value<br>"; }
}


?>

