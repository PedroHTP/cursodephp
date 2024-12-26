<?php
    echo "<h1>FUNÇÕES STRING</h1>";

    $frase = "Olá Mundo! Que todos tenham um belo natal!";

    // strtoupper - Converte letras minusculas em maiusculas.
    // strtolower - Converte letras maiusculas em minusuculas.
    // substr - Retornar a string apartir de um determinado ponto.
    // str_pad - Complementa outra string com uma quantidade especifica de caracteres.
    // str_repeat - Repete uma string, uma certa quantidade de vezes.
    // strlen - Retorna o comprimento do texto.
    // str_replace - Substitui uma palavra em um texto.
    // strpos - Retorna a posição de uma palavra em um texto

    echo substr($frase, 12, 25);

    print "<hr>";
    
    $adicional = " Nesse ano!";
    $novafrase = str_replace ("ano", "fim de ano",(str_pad($frase, strlen($frase)+strlen($adicional), $adicional)));
    echo $novafrase;

    print "<hr>";

    echo strpos($novafrase, "fim");
    print "<br>";
    echo substr($novafrase, strpos($novafrase, "fim"));

    print "<hr>";

    echo "<h1>FUNÇÕES PARA NÚMEROS</h1>";

    $numero = 1332.4223;
    echo "Número inserido: ".$numero;
    print "<br><br>";
    echo "O número inserido formato é: R$ ". number_format($numero, 2, ",", "."); //Formata o valor
    print "<br>";
    echo "O número inserido arredondado é ". round($numero); //Arredonda o valor
    print "<br>";
    echo "O número inserido arredondado para cima é ". ceil($numero); //Arredonda para cima
    print "<br>";
    echo "O 232.79 arredondado para baixo é ". floor(232.79); //Arredonda para baixo
    print "<br>";
    echo "Números aleatorios de 1 a 20: ". rand(1, 20); //Gera núemros aleatorios
    