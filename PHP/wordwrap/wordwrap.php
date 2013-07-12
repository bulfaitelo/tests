<?php

$link ="<A href='http://www.cespe.unb.br//concursos/ses_df_12_residencia_2/arquivos/ED_2_2_2012_RES_M__D_RETIFICA____O.PDF'>http://www.cespe.unb.br//concursos/ses_df_12_residencia_2/arquivos/ED_2_2_2012_RES_M__D_RETIFICA____O.PDF</a>";


echo $link;

$link_quebrado = wordwrap($link, 200, "<br />\n");

echo "<br />";

echo $link_quebrado;


?>