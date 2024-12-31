<?php
// Manipulação de Arquivos
/* 
- fopen()
- fclose()
- fwrite()
- !feof()
- fgets()
- filesize
*/

$nome_arquivo = 'arquivo.txt';
$conteudo = "Conteudo que será escrito no arquivo \r\n";

$file_size = filesize($nome_arquivo);

$arquivo = fopen($nome_arquivo, 'r');

// fwrite($arquvo, $conteudo); // escreve o conteudo no arquivo

while (!feof($arquivo)) {
    $linha = fgets($arquivo, $file_size);
    echo $linha ."<br>";
}

fclose($arquivo);