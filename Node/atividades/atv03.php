<?php 
    $palavras = array("Agosto", "Mar", "Vento", "Cachoira");
    $numeros = array(43, 23, 200, 772);
    $frase = array_merge($numeros, $palavras);
    foreach ($frase as $value) {
        echo $value . ", ";
    }
