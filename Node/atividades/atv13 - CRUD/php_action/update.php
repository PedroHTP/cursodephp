<?php
// session
    session_start();
// conexao
require_once './db_connect.php';
// filtro de input
require_once './filtro.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Validação do ID
        $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
            if (!$id) {
                $_SESSION['mensagem'] = "ID inválido!";
                header('Location: ../index.php');
                exit;
            }

        $nome = clear($_POST['nome']);
        $sobrenome = clear($_POST['sobrenome']);
        $email = clear($_POST['email']);
        $idade = clear($_POST['idade']);

        $comando = "UPDATE clientes SET 
        nome = '$nome', 
        sobrenome = '$sobrenome', 
        email = '$email', 
        idade = '$idade' 
        WHERE id = $id";

        if (mysqli_query($connect, $comando)) {
            $_SESSION['mensagem'] = "Cadastro atualizado com sucesso!";
            
        } else {
            $_SESSION['mensagem'] = "Erro ao atualizar cadastro: ". mysqli_error($connect);
            
        }

        mysqli_close($connect);

        // redirecionamento
        header('Location: ../index.php');
        exit;
    }