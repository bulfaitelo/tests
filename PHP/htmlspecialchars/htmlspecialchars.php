<?php

/** ele mostra as variaveis na tela ela da mo adianto... ^^**/

 if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
} else {}


 if ($_GET) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_GET, true));
    echo '</pre>';
} else {}




?>

<form action="htmlspecialchars.php" method="get">
    <input type="submit" value="Get" name="get" />
</form>
<br />
<form action="htmlspecialchars.php" method="post">
    <input type="submit" value="post" name="post" />
</form>