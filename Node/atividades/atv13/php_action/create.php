<?php
// session
    session_start();
// conexao
require_once './db_connect.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);

        $comando = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

        if (mysqli_query($connect, $comando)) {
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../index.php');
        }
    }