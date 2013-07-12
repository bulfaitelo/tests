<?php
echo "É case Sensitive <br /><br />";
$os = array("Mac", "NT", "Irix", "Linux"); 
if (in_array("Irix", $os)) { 
    echo "Tem Irix";
}
if (in_array("mac", $os)) { 
    echo "Tem mac";
}
echo "<br />";
if (in_array("Mac", $os)) { 
    echo "Tem Mac";
}

?>



