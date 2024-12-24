<?php 

$nome = "Pedro Henrique";

function imprimir_nome() {
    global $nome;
    echo $nome;
}

imprimir_nome();

function declarar_cidade() {
    global $cidade;
    $cidade = "São Paulo";
}

declarar_cidade();
echo "<br>Cidade: " . $cidade;

echo "<hr>";

$a = 1;
$b = 5;
$c = 7;

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();