<?php
// session
    session_start();
// conexao
require_once './db_connect.php';
// filtro de input
require_once './filtro.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = clear($_POST['nome']);
        $sobrenome = clear($_POST['sobrenome']);
        $email = clear($_POST['email']);
        $idade = clear($_POST['idade']);

        $comando = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

        if (mysqli_query($connect, $comando)) {
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        } else {
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
        }
        
        mysqli_close($connect);

        // redirecionamento
        header('Location: ../index.php');
        exit;
    }