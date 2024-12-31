<?php

// datas
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y | H:i:s A');

Echo "<br>";

// TIME
    $time = time();
//  echo date('d/m/Y', $time);

// MKTIME
    $data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
//  echo date('d/m/y - h:i', $data_pagamento);

// STRTOTIME
    $data = '2019-04-10 13:30:00';
    $data = strtotime($data);

echo date('d/m/Y', $data);
