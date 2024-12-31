<?php
// session
    session_start();
// conexao
require_once './db_connect.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Validação do ID
        $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
            if (!$id) {
                $_SESSION['mensagem'] = "ID inválido!";
                header('Location: ../index.php');
                exit;
            }

        $comando = "DELETE FROM clientes WHERE id = $id";

        if (mysqli_query($connect, $comando)) {
            $_SESSION['mensagem'] = "Cadastro deletado com sucesso!";
            
        } else {
            $_SESSION['mensagem'] = "Erro ao deletar cadastro: ". mysqli_error($connect);
            
        }

        mysqli_close($connect);

        // redirecionamento
        header('Location: ../index.php');
        exit;
    }