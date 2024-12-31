<?php
// Expessões Regulares
// Define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras.
// ^ inicio da espressão, $ final da expressão - /i - case sensite
// [] conjunto de caracteres
// {} ocorrências - ?{0,1} *{0,} ={1,}
// /^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/   ---> E-mail
// /^[0-9]{2}


$string = "contato@gmail.com";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)+$/i";
if (preg_match($padrao, $string)) {
    echo "Válido";
    echo "<hr>";
    echo $string;
} else {
    echo "Inválido";
    echo "<hr>";
}

echo "<hr>";

$string = "31/12/2024";
$padrao = "/^[0-3]{2}\/[0-9]{2}\/[0-9]{4}$/i";
if (preg_match($padrao, $string)) {
    echo "Válido";
    echo "<hr>";
    echo $string;
} else {
    echo "Inválido";
    echo "<hr>";
}