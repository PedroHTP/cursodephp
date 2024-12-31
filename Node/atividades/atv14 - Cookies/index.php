<?php 
    function horas($horas) {
        $segundos = $horas * 3600;
        return $segundos;
    }
// COOKIE
// setcookie ($nome-do-cookie, $valor-do-cookie, time()+3600);

setcookie('user', 'Pedro Henrique Teixeira Pião', time()+horas(2));
setcookie('email', 'pedrohtpgbi2007@gmail.com', time()+horas(2));

var_dump($_COOKIE);
