<form method="post" action="?btn=ok">
    <fieldset>
        <legend>�reas de interesse:</legend>
        <label>
        <input name="id_area[123]" value="1" type="checkbox">Rob�tica
        </label>
        <label>
        <input name="id_area[123]" value="2" type="checkbox">Sistemas
        </label>
        <label>
        <input name="id_area[]" value="3" type="checkbox">Linguagens
        </label>
        <label>
        <input name="id_area[]" value="4" type="checkbox">I.A.
        </label>
        <label>
        <input name="id_area[]" value="5" type="checkbox">Jogos
        </label>
    </fieldset>
    <input value="enviar" type="submit">
</form>

<?php

$areas = isset($_POST['id_area']) ? $_POST['id_area'] : NULL;
echo $areas."<br />"; //Array
foreach($areas as $key => $id_area){
	echo"chave:".$key." value: ".$id_area."<br />";//imprimir id de �reas
}





?>
