<?php
// Vari�vel que recebe o conte�do do arquivo texto.
$existing_links = file_get_contents("links.txt");

// Vetor que recebe as URLs que ser�o adicionados ao arquivo
$link_array = array("http://copqo.com","http://google.com");

// Vari�vel que receber� as URLs que ainda n�o existem no arquivo
$links_tobe_added = "";

// Inicia a leitura do vetor
for( $i = 0 ; $i < count($link_array) ; $i++ ) {

// Compara as URLs do vetor com as do arquivo.
// Se a URL j� existe, retorna true, sen�o retorna false.
$url_exists = strpos($existing_links, $link_array[$i]);

// Verifica se a URL j� existe
if ($url_exists == true) {

// Esta vari�vel recebe a URL que deve ser adicionada no arquivo
$links_tobe_added .= $link_array[$i]."\r\n";
}
}

// Abre o arquivo para grava��o. Se n�o conseguir abr�-lo, retorna erro
$fh = fopen("links.txt", 'a') or die("N�o foi poss�vel abrir o arquivo...");

// Escreve as URLs selecionadas no arquivo
fwrite($fh,$links_tobe_added);

// Fecha o arquivo no final da grava��o.
fclose($fh);

?>
