<?php
// Variável que recebe o conteúdo do arquivo texto.
$existing_links = file_get_contents("links.txt");

// Vetor que recebe as URLs que serão adicionados ao arquivo
$link_array = array("http://copqo.com","http://google.com");

// Variável que receberá as URLs que ainda não existem no arquivo
$links_tobe_added = "";

// Inicia a leitura do vetor
for( $i = 0 ; $i < count($link_array) ; $i++ ) {

// Compara as URLs do vetor com as do arquivo.
// Se a URL já existe, retorna true, senão retorna false.
$url_exists = strpos($existing_links, $link_array[$i]);

// Verifica se a URL já existe
if ($url_exists == true) {

// Esta variável recebe a URL que deve ser adicionada no arquivo
$links_tobe_added .= $link_array[$i]."\r\n";
}
}

// Abre o arquivo para gravação. Se não conseguir abrí-lo, retorna erro
$fh = fopen("links.txt", 'a') or die("Não foi possível abrir o arquivo...");

// Escreve as URLs selecionadas no arquivo
fwrite($fh,$links_tobe_added);

// Fecha o arquivo no final da gravação.
fclose($fh);

?>
