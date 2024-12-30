<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php 
        //Connect BD
            require_once 'db_connect.php';
        // Session
            session_start();
        // verificação
            if (!isset($_SESSION['logado'])) {
                header('Location: index.php');
            }
        // Dados
            $id = $_SESSION['id_usuario'] ?? null;
            $comando = "SELECT * FROM usuarios WHERE id = '$id'" ?? null;
            $resultado = mysqli_query($connect, $comando) ?? null;
            $dados = mysqli_fetch_array($resultado) ?? array('nome' => 'anônimo');
            mysqli_close($connect);
    ?>
        <p>Olá <?=$dados['nome']?></p>
        <p><a href="longout.php">SAIR</a></p>
</body>
</html>