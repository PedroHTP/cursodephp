<?php
// conexao
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "banco-estudo";

    $connect = mysqli_connect($host, $username, $password, $database);
    mysqli_set_charset($connect, "utf8");

    if(mysqli_connect_error()) {
        echo "Falha na conexão: ". mysqli_connect_error();
    }