<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validações</title>
    <style>
        .erro {
            color: red;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 5px;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php 
        session_start();

        $autenticado = isset($_SESSION['autenticado']) && $_SESSION['autenticado'];

            if ($autenticado) {
                echo '<script>window.location.href="explorer.php";</script>';
            }

            $nome = $_POST['nome'] ?? null;
            $idade = $_POST['idade'] ?? null;
            $email = $_POST['email'] ?? null;
            $peso = $_POST['peso'] ?? null;
            $ip = $_POST['IP'] ?? null;
            $url = $POST['url'] ?? null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            $erros = array();

            if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
                $erros[] = "Idade inválida, o número inserido precisa ser inteiro.";
            }

            if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                $erros[] = "Email inválido, escreva no formato e-mail (exemplo@gmail.com).";
            }

            if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
                $erros[] = "peso inválido.";
            }

            if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
                $erros[] = "IP inválido.";
            }

            if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
                $erros[] = "URL inválida.";
            }

            if(!empty($erros)) {
                foreach ($erros as $mensagem) {
                    echo "<p class='erro'>$mensagem<p>";
                }
            } else {
                echo '<script>window.location.href="explorer.php";</script>';
            }
        }
    ?>
    
    <h1>Validações: filtros de validação</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="nome">NOME:</label>
        <input type="text" name="nome" id="idnome" value="<?= htmlspecialchars($nome) ?>">
        <label for="nome">IDADE:</label>
        <input type="text" name="idade" id="ididade" value="<?= htmlspecialchars($idade) ?>">
        <label for="email">EMAIL:</label>
        <input type="email" name="email" id="idemail" value="<?= htmlspecialchars($email) ?>">
        <label for="peso">PESO:</label>
        <input type="text" name="peso" id="idpeso" value="<?= htmlspecialchars($peso) ?>">
        <label for="ip">IP:</label>
        <input type="text" name="ip" id="idip" value="<?= htmlspecialchars($ip) ?>">
        <label for="url">URL:</label>
        <input type="text" name="url" id="idurl" value="<?= htmlspecialchars($url) ?>">
        <input type="submit" value="Enviar">
    </form>
    <?php 
    ?>
</body>
</html>